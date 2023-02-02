<?php
    class clientController extends Controller {
        // index page = login page
        public function index($error = "") {
            $this->view("home/sign-up", ["error" => $error]);
            $this->view->render();
        }
        //! sign up
        public function clientSignUp() {
            if(isset($_POST["submit"])) {
                if(!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["phone_n"])) {
                    $data = array(
                        "email" => filter_var($this->validateData($_POST["email"]), FILTER_SANITIZE_EMAIL),
                        "password" => password_hash($this->validateData($_POST["password"]), PASSWORD_DEFAULT),
                        "f_name" => $this->validateData($_POST["first_name"]),
                        "l_name" => $this->validateData($_POST["last_name"]),
                        "phone_n" => $this->validateData($_POST["phone_n"])
                    );
                    $this->model("Client");
                    $existed_clients = $this->model->validateClient($data["email"]);
                    if($existed_clients) {
                        $this->index("This Email Already Exist!");
                        exit;
                    }else {
                        $this->model->signUp($data);
                        redirect("home/log_in");
                    }
                }else {
                    $this->index("Please Fill All The Fields!");
                    exit;
                }
            }
        }
        // ! log in
        public function clientLogIn() {
            if(isset($_POST["submit"])) {
                if(!isUserLogged()) {
                    if(!empty($_POST["email"]) && !empty($_POST["password"])) {
                        $data = array(
                            "email" => filter_var($this->validateData($_POST["email"]), FILTER_SANITIZE_EMAIL),
                            "password" => $this->validateData($_POST["password"])
                        );
                        $this->model("Client");
                        $client = $this->model->logIn($data);
                        if($data["email"] === $client["email"] && password_verify($data["password"], $client["password"])) {
                            $_SESSION["username"] = $client["first_name"] . ' ' . $client["last_name"];
                            $_SESSION["email"] = $client["email"];
                            $_SESSION["user_id"] = $client["client_id"];
                            $_SESSION["phone_number"] = $client["phone_number"];
                            $_SESSION["logged"] = true;
                            redirect("home/rooms");
                        }else {
                            $this->view("home/log-in", ["error" => "Uncorrect Email Or Password"]);
                            $this->view->render();
                        }
                    }else {
                        $this->view("home/log-in", ["error" => "Please Fill All The Fields"]);
                        $this->view->render();
                        exit;
                    }
                }else {
                    header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/home/");
                }
            }
        }
        // ! log out
        public function clientLogOut() {
            if(session_destroy()) {
                redirect("home/");
            }
        }
        // ! book room
        public function bookRoom() {
            extract($_POST);
            if(!empty($check_in) && !empty($check_out) && !empty($room_id) && !empty($total_price)){
                $data = array(
                    "check-in" => $this->validateData(date("Y-m-d", strtotime($check_in))),
                    "check-out" => $this->validateData(date("Y-m-d", strtotime($check_out))),
                    "room-id" => $this->validateData($room_id),
                    "client-id" => $_SESSION["user_id"],
                    "total-guets" => $total_guests,
                    "total-price" => $this->validateData($total_price)
                );
                // var_dump($data);
                $this->model("Reservation");
                if(!$this->model->checkAvailable($data)) {
                    $this->model->book_room($data);
                    $this->addGuests();
                    echo json_encode(array("message" => "Room Booked Successfully!", "booked" => true));
                }else {
                    echo json_encode(array("message" => "sorry! this room is already booked in this time period!", "booked" => false));
                }
            }
        }
        // ! add guests
        public function addGuests() {
            extract($_POST);
            if(!empty($guestsFnames) && !empty($guestsLnames) && !empty($guestsBdates)) {
                $this->model("Reservation");
                $reserve_id = $this->model->getReserveMaxId();
                $this->model("Guest");
                for($i = 0; $i < count($guestsFnames); $i++) {
                    $data = array(
                        "first-name" => $this->validateData($guestsFnames[$i]),
                        "last-name" =>  $this->validateData($guestsLnames[$i]),
                        "birth-date" => $this->validateData($guestsBdates[$i]),
                        "reserve-id" => $this->validateData($reserve_id["reserve_id"])
                    );
                    $this->model->addGuets($data);
                }
            }
        }
        // ! cancel reservation
        public function cancelReservation($id) {
            $data = array(
                "reserve-id" => $this->validateData($id)
            );
            $this->model("Reservation");
            if($this->model->cancelReservation($data)) {
                redirect("home/reservations");
            }
        }
        // validate inputs and remove special characters
        public function validateData($data) {
            if(isset($data) and !empty($data)) {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        }
    }
?>