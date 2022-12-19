<?php
class Tour extends DB {
    // insert data
    public function insertData($data) {
        try {
            $stmt = $this->connect()->prepare("INSERT INTO `tours` (tour_name, tour_destination, tour_price, tour_description, tour_duration, tour_image, tour_status) VALUES (:name, :destination, :price, :description, :duration, :image, :status)");
            $stmt->bindParam("name", $data["name"]);
            $stmt->bindParam("destination", $data["destination"]);
            $stmt->bindParam("price", $data["price"]);
            $stmt->bindParam("description", $data["description"]);
            $stmt->bindParam("duration", $data["duration"]);
            $stmt->bindParam("image", $data["image"]["name"]);
            $stmt->bindParam("status", $data["status"]);
            if($stmt->execute()) {
                $new_path = ROOT . DIRECTORY_SEPARATOR . "public/img/tours/" . $data["image"]["name"];
                move_uploaded_file($data["image"]["tmp_name"], $new_path);
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // update data
    public function updateData($data) {
        try {
            if(!empty($data["image"])) {
                $stmt = $this->connect()->prepare("UPDATE `tours` SET tour_name = :name, tour_destination = :destination, tour_price = :price, tour_description = :description, tour_duration = :duration, tour_image = :image, tour_status = :status WHERE tour_id = :id");
                $stmt->bindParam("name", $data["name"]);    
                $stmt->bindParam("destination", $data["destination"]);
                $stmt->bindParam("price", $data["price"]);
                $stmt->bindParam("description", $data["description"]);
                $stmt->bindParam("duration", $data["duration"]);
                $stmt->bindParam("image", $data["image"]);
                $stmt->bindParam("status", $data["status"]);
                $stmt->bindParam("id", $data["id"]);
                $stmt->execute();
            }else {
                $stmt = $this->connect()->prepare("UPDATE `tours` SET tour_name = :name, tour_destination = :destination, tour_price = :price, tour_description = :description, tour_duration = :duration, tour_status = :status WHERE tour_id = :id");
                $stmt->bindParam("name", $data["name"]);    
                $stmt->bindParam("destination", $data["destination"]);
                $stmt->bindParam("price", $data["price"]);
                $stmt->bindParam("description", $data["description"]);
                $stmt->bindParam("duration", $data["duration"]);
                // $stmt->bindParam("image", $data["image"]);
                $stmt->bindParam("status", $data["status"]);
                $stmt->bindParam("id", $data["id"]);
                $stmt->execute();
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // delete data
    public function deleteData($id) {
        try {
            $stmt = $this->connect()->prepare("DELETE FROM `tours` WHERE tour_id = :id");
            $stmt->bindParam("id", $id);
            if($stmt->execute()) {
                echo 'data deleted';
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // view all data
    public function displayAllData() {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM `tours`");
            if($stmt->execute()) {
                return $stmt->fetchAll();
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // view row of data
    public function displayRowData($id) {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM `tours` WHERE tour_id = :id");
            $stmt->bindParam("id", $id);
            if($stmt->execute()) {
                return $stmt->fetch();
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // get total active tours
    public function countActiveData() {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM `tours` WHERE tour_status = 'active'");
            if($stmt->execute()) {
                return $stmt->fetchAll();
            }
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    // get most expensive data
    public function getExpensiveData() {
        try {
            $stmt = $this->connect()->prepare("SELECT tour_name FROM `tours` ORDER BY tour_price DESC");
            if($stmt->execute()) {
                return $stmt->fetch();
            }
        }catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>