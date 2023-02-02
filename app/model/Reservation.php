<?php
    class Reservation extends DB {
        public function book_room($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `reservations` (check_in_date,check_out_date,room_id,client_id,guests_count,total_price)VALUES(:check_in, :check_out, :room_id, :client_id, :guests_count, :total_price)");
                $stmt->bindParam("check_in", $data["check-in"]);
                $stmt->bindParam("check_out", $data["check-out"]);
                $stmt->bindParam("room_id", $data["room-id"]);
                $stmt->bindParam("client_id", $data["client-id"]);
                $stmt->bindParam("guests_count", $data["total-guets"]);
                $stmt->bindParam("total_price", $data["total-price"]);
                if($stmt->execute()) {
                    return true;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // get high reserve id
        public function getReserveMaxId() {
            try {
                $stmt = $this->connect()->prepare("SELECT reserve_id FROM `reservations` ORDER BY reserve_id DESC LIMIT 1");
                if($stmt->execute()) {
                    return $stmt->fetch();
                }else {
                    return false;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // get reservations related to user
        public function getUserReservations($data) {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `reservations` WHERE client_id = :id");
                $stmt->bindParam("id", $data["user-id"]);
                if($stmt->execute()) {
                    return $stmt->fetchAll();
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // cancel reservation
        public function cancelReservation($data) {
            try {
                $stmt = $this->connect()->prepare("DELETE FROM `reservations` WHERE reserve_id = :id");
                $stmt->bindParam("id", $data["reserve-id"]);
                if($stmt->execute()) {
                    return true;
                }else {
                    return false;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        // check reservation
        public function checkAvailable($data) {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `reservations` WHERE ((:check_in BETWEEN reservations.check_in_date AND reservations.check_out_date OR :check_out BETWEEN reservations.check_in_date AND reservations.check_out_date OR (:check_in <= reservations.check_in_date AND :check_out >= reservations.check_out_date))) AND reservations.room_id = :room_id");
                $stmt->bindParam("check_in", $data["check-in"]);
                $stmt->bindParam("check_out", $data["check-out"]);
                $stmt->bindParam("room_id", $data["room-id"]);
                $stmt->execute();
                if($stmt->fetch()) {
                    return true;
                }else {
                    return false;
                }
            }catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>