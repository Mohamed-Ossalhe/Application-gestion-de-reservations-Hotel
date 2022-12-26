<?php
class Admin extends DB {
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
}
?>