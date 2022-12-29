<?php
class Admin extends DB {
    // get admin
    public function getAdmin() {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM `admin`");
            if($stmt->execute()) {
                return $stmt->fetch();
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // update admin info
    public function updateAdmin($data) {
        try {
            $stmt = $this->connect()->prepare("UPDATE `admin` SET admin_name = :name, admin_email = :email, admin_password = :password");
            $stmt->bindParam("name", $data["full_name"]);
            $stmt->bindParam("email", $data["email"]);
            $stmt->bindParam("password", $data["new_password"]);
            $stmt->execute();
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>