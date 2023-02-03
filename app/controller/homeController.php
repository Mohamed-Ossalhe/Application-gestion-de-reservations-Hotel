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
    public function reservations() {
        if(isUserLogged()) {
            $this->view("home/client-dashboard", ["reservations" => $this->getUserReservations()]);
            $this->view->render();
        }else {
            $this->log_in();
        }
    }
    public function guests($id) {
        if(isUserLogged()) {
            $this->view("home/reservation-guests", ["guests" => $this->getReservationsGuests($id)]);
            $this->view->render();
        }else {
            $this->log_in();
        }
    }
    // get user reservations
    public function getUserReservations() {
        $this->model("Reservation");
        $data = array(
            "user-id" => $_SESSION["user_id"]
        );
        $reservations = $this->model->getUserReservations($data);
        return $reservations;
    }
    // get user reservation guests
    public function getReservationsGuests($id) {
        $data = array(
            "reserve-id" => $this->validateData($id)
        );
        $this->model("Guest");
        $guests = $this->model->getGuests($data);
        return $guests;
    }
    // search rooms
    public function searchRoom() {
        extract($_POST);
        $data = array();
        // echo $room_type . " " . $suite_type . " " . $check_in . " " . $check_out;
        if(!empty($suite_type)) {
            $data = array(
                "room-type" => $this->validateData($room_type),
                "suite-type" => $this->validateData($suite_type),
                "check-in" => $this->validateData(date("Y-m-d", strtotime($check_in))),
                "check-out" => $this->validateData(date("Y-m-d", strtotime($check_out)))
            );
        }else {
            $data = array(
                "room-type" => $this->validateData($room_type),
                "suite-type" => null,
                "check-in" => $this->validateData(date("Y-m-d", strtotime($check_in))),
                "check-out" => $this->validateData(date("Y-m-d", strtotime($check_out)))
            );
        }
        $this->model("Room");
        $rooms = $this->model->searchData($data);
        echo json_encode($rooms);
    }
    // display rooms
    public function display_Rooms(){
        $this->model("Room");
        $rooms = $this->model->getData();
        echo json_encode($rooms);
    }

    // validate inputs and remove special characters
    public function validateData($data) {
        if(isset($data) and !empty($data)) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
}
?>