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
        $this->view("home/rooms", ["rooms"=>$this->searchRoom()]);
        $this->view->render();
    }
    public function bookRoom($id) {
        $this->view('home/book-room');
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
        if(isset($_POST["search"])) {
            if(!empty($_POST["room_type"])) {
                $data = array(
                    "room_type" => $_POST["room_type"],
                    "suite_type" => $_POST["suite_type"],
                );
                // $rooms = $this->model->searchData($data);
                // return $rooms;
                var_dump($data);
            }
        }//else {
        //     $rooms = $this->model->searchData($data);
        //     return $rooms;
        //     var_dump($data);
        // }
    }
}
?>