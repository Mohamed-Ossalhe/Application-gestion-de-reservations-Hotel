<?php
    class clientController extends Controller {
        public function clientSignUp() {
            if(isset($_POST["submit"]) && !empty($_POST["email"])) {
                $data = array(
                    "email" => $this->validateData($_POST["email"]),
                    "password" => $this->validateData($_POST["password"]),
                    "f_name" => $this->validateData($_POST["first_name"]),
                    "l_name" => $this->validateData($_POST["last_name"]),
                    "phone_n" => $this->validateData($_POST["phone_n"])
                );
                if($this->model("Client")) {
                    $this->model->signUp($data);
                    header("Location: ../");
                    exit;
                }
                // header("Location: home");
            }
        }

        // validate inputs and remove special characters
        public function validateData($value) {
            if(isset($value) and !empty($value)) {
                $data = trim($value);
                $data = stripcslashes($value);
                $data = htmlspecialchars($value);
                return $data;
            }
        }
    }
?>