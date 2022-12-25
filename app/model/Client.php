<?php
    class Client extends DB {
        // sign in
        public function signUp($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `clients`(first_name,last_name,email,password,phone_number) VALUES (:f_name, :l_name, :email, :password, :phone_n)");
                $stmt->bindParam("f_name", $data["f_name"]);
                $stmt->bindParam("l_name", $data["l_name"]);
                $stmt->bindParam("email", $data["email"]);
                $stmt->bindParam("password", $data["password"]);
                $stmt->bindParam("phone_n", $data["phone_n"]);
                $stmt->execute();
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // log in
        public function logIn($data) {
            try {
                $stmt = $this->connect()->prepare("SELECT first_name,last_name,email,password FROM `clients` WHERE email = :email");
                $stmt->bindParam("email", $data["email"]);
                // $stmt->bindParam("password", $data["password"]);
                if($stmt->execute()) {
                    return $stmt->fetch();
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>