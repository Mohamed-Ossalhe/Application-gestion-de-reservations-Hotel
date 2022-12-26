<?php
    session_start();
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
                    $this->model->signUp($data);
                    header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/home/log_in");
                }else {
                    $this->index("Please Fill All The Fields!");
                    exit;
                }
            }
        }
        // ! log in
        public function clientLogIn() {
            if(isset($_POST["submit"])) {
                if(!isset($_SESSION["logged"]) && !isset($_SESSION["username"])) {
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
                            $_SESSION["logged"] = true;
                            header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/home/");
                        }else {
                            $this->view("home/log-in", ["error" => "uncorrect email or password"]);
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
                header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/home/");
            }
        }
        // validate inputs and remove special characters
        public function validateData($value) {
            if(isset($value) and !empty($value)) {
                $data = trim($value);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        }
    }
?>