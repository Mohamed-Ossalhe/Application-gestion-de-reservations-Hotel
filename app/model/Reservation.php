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
    }
?>