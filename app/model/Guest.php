<?php
    class Guest extends DB {
        // add guests
        public function addGuets($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `guests` (first_name, last_name, guest_birth_date, reserve_id) VALUES (:first_name, :last_name, :guest_birth_date, :reserve_id)");
                $stmt->bindParam("first_name", $data["first-name"]);
                $stmt->bindParam("last_name", $data["last-name"]);
                $stmt->bindParam("guest_birth_date", $data["birth-date"]);
                $stmt->bindParam("reserve_id", $data["reserve-id"]);
                if($stmt->execute()) {
                    return true;
                }else {
                    return false;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        public function getGuests($data) {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `guests` WHERE reserve_id = :id");
                $stmt->bindParam("id", $data["reserve-id"]);
                if($stmt->execute()) {
                    return $stmt->fetchAll();
                }else {
                    return false;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>