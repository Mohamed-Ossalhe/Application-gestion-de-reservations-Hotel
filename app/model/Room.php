<?php
    class Room extends DB {
        // get rooms
        public function getData() {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `rooms`");
                if($stmt->execute()) {
                    return $stmt->fetchAll();
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // add room
        public function insertion($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `rooms`(room_description, room_type, suite_type, room_price, room_image, room_heading, capacity)VALUES(:desc, :r_type, :s_type, :price, :image, :heading, :capacity)");
                $stmt->bindParam("desc", $data["description"]);
                $stmt->bindParam("r_type", $data["room_type"]);
                $stmt->bindParam("s_type", $data["suite_type"]);
                $stmt->bindParam("price", $data["price"]);
                $stmt->bindParam("image", $data["image"]);
                $stmt->bindParam("heading", $data["heading"]);
                $stmt->bindParam("capacity", $data["capacity"]);
                $stmt->execute();
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // update room
        // remove room
        public function remove($data) {
            try {
                $stmt = $this->connect()->prepare("DELETE FROM `rooms` WHERE room_id = :id");
                $stmt->bindParam("id", $data);
                $stmt->execute();
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>