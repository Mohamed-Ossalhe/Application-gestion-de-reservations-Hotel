<?php
    class Reservation extends DB {
        public function bookRoom($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `reservations` (check_in_date,check_out_date,room_id,client_id,guests_count,total_price)VALUES(:check_in, :check_out, :room_id, :client_id, :guests_count, :total_price)");
                $stmt->bindParam("check_in", $data["check_in"]);
                $stmt->bindParam("check_out", $data["check_out"]);
                $stmt->bindParam("room_id", $data["room_id"]);
                $stmt->bindParam("client_id", $data["client_id"]);
                $stmt->bindParam("guests_count", $data["guests_count"]);
                $stmt->bindParam("total_price", $data["total_price"]);
                if($stmt->execute()) {
                    return true;
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>