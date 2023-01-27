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
        public function bookRoom($id) {
            // if(!isUserLogged()){
            //     header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/home/log_in");
            // }else {
            //     $this->model("Room");
            //     $roomChoosed = $this->model->getDataRow($id);
            //     // check_in_date	check_out_date	room_id	client_id	guests_count	total_price
            //     $data = array(
            //         "check_in" => '23/12/2022',
            //         "check_out" => '25/12/2022',
            //         "room_id" => $roomChoosed["room_id"],
            //         "client_id" => $_SESSION["user_id"],
            //         "guests_count" => 6,
            //         "total_price" => 300
            //     );
            //     $this->model('Reservation');
            //     $this->model->book_room($data);
            //     header('Location: ../../home/rooms');
            // }
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