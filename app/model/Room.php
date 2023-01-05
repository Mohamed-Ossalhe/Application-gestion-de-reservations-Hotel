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
        // get one room
        public function getDataRow($id) {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `rooms` WHERE room_id = :id");
                $stmt->bindParam("id", $id);
                if($stmt->execute()) {
                    return $stmt->fetch();
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
                if($stmt->execute()) {
                    return "inserted";
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // update room
        public function update($data) {
            try {
                if(!empty($data["image"])) {
                    $stmt = $this->connect()->prepare("UPDATE `rooms` SET room_description = :desc, room_type = :r_type, suite_type = :s_type, room_price = :price, room_image = :image, room_heading = :heading, capacity = :capacity WHERE room_id = :id");
                    $stmt->bindParam("desc", $data["description"]);
                    $stmt->bindParam("r_type", $data["room_type"]);
                    $stmt->bindParam("s_type", $data["suite_type"]);
                    $stmt->bindParam("price", $data["price"]);
                    $stmt->bindParam("heading", $data["heading"]);
                    $stmt->bindParam("capacity", $data["capacity"]);
                    $stmt->bindParam("image", $data["image"]);
                    $stmt->bindParam("id", $data["id"]);
                    $stmt->execute();
                }else {
                    $stmt = $this->connect()->prepare("UPDATE `rooms` SET room_description = :desc, room_type = :r_type, suite_type = :s_type, room_price = :price, room_heading = :heading, capacity = :capacity WHERE room_id = :id");
                    $stmt->bindParam("desc", $data["description"]);
                    $stmt->bindParam("r_type", $data["room_type"]);
                    $stmt->bindParam("s_type", $data["suite_type"]);
                    $stmt->bindParam("price", $data["price"]);
                    $stmt->bindParam("heading", $data["heading"]);
                    $stmt->bindParam("capacity", $data["capacity"]);
                    $stmt->bindParam("id", $data["id"]);
                    $stmt->execute();
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
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

        // ! search data
        public function searchData($data) {
            try {
                if($data) {
                    if($data["suite_type"]) {
                        $stmt = $this->connect()->prepare("SELECT * FROM `rooms` WHERE room_type = :room_type AND suite_type = :suite_type");
                        $stmt->bindParam("room_type", $data["room_type"]);
                        $stmt->bindParam("suite_type", $data["suite_type"]);
                    }else {
                        $stmt = $this->connect()->prepare("SELECT * FROM `rooms` WHERE room_type = :room_type");
                        $stmt->bindParam("room_type", $data["room_type"]);
                        // $stmt->bindParam("suite_type", $data["suite_type"]);
                    }
                    // $stmt->bindParam("capacity", $data["capacity"]);
                    if($stmt->execute()) {
                        return $stmt->fetchAll();
                    }
                }else {
                    $stmt = $this->connect()->prepare("SELECT * FROM `rooms`");
                    if($stmt->execute()) {
                        return $stmt->fetchAll();
                    }
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>