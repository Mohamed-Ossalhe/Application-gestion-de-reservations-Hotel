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
        // get clients
        public function getClients() {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `clients`");
                if($stmt->execute()) {
                    return $stmt->fetchAll();
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // validate client
        public function validateClient($data) {
            try {
                $stmt = $this->connect()->prepare("SELECT email FROM `clients` WHERE email = :email");
                $stmt->bindParam("email", $data);
                $stmt->execute();
                if($stmt->fetch()) {
                    return true;
                }else {
                    return false;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>