<?php

class homeController extends Controller {
    public function index() {
        $this->home();
    }
    public function home() {
        $this->view("home/home");
        $this->view->render();
    }
    public function rooms() {
        $this->view("home/rooms");
        $this->view->render();
    }
    public function bookRoom($id) {
        $this->model("Room");
        $roomDetails = $this->model->getDataRow($id);
        $this->view('home/book-room', ["roomDetails" => $roomDetails]);
        $this->view->render();
    }
    public function log_in($error = "") {
        $this->view("home/log-in", ["error" => $error]);
        $this->view->render();
    }
    public function sign_up($error = "") {
        $this->view("home/sign-up", ["error" => $error]);
        $this->view->render();
    }

    // search rooms
    public function searchRoom() {
        $this->model("Room");
        $data = array();
        $rooms = "";
        if(!empty($_POST['suite_type']) && !empty($_POST['room_type']) && !empty($_POST["check_in"]) && !empty($_POST["check_out"])) {
            $data = array(
                "room_type" => $_POST["room_type"],
                "suite_type" => $_POST["suite_type"],
                "check_in" => $_POST["check_in"],
                "check_out" => $_POST["check_out"]
            );
                // echo 'hello world am using ajax roomtype: '. $data['room_type'] . ' + suite type:'. $data['suite_type'];
                // echo 'hello world am using ajax roomtype: '. $data['room_type'] . ' + no suite type';
            $rooms = $this->model->searchData($data);
            echo json_encode($rooms);
        }else if(empty($_POST['suite_type']) && !empty($_POST['room_type']) && !empty($_POST["check_in"]) && !empty($_POST["check_out"])) {
            $data = array(
                "room_type" => $_POST["room_type"],
                "suite_type" => $_POST["suite_type"] = null,
                "check_in" => $_POST["check_in"],
                "check_out" => $_POST["check_out"]
            );
            $rooms = $this->model->searchData($data);
            echo json_encode($rooms);
        }else {
            echo json_encode(["error" => "No Rooms Available"]);
        }
    }
}
?>