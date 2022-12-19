<?php
class Admin extends DB {
    public function getAdmin($data) {
        try {
            $stmt = $this->connect()->prepare("SELECT username, email, password FROM `admin` WHERE username = :username AND email = :email AND password = :pass");
            $stmt->bindParam("username", $data["username"]);
            $stmt->bindParam("email", $data["email"]);
            $stmt->bindParam("pass", $data["password"]);
            if($stmt->execute()) {
                return $stmt->fetchAll();
            }

        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>