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
        $data = array();
        extract($_POST);
        if(isset($_POST['room_type']) && !empty($_POST['room_type'])) {
            if(isset($_POST['suite_type']) && !empty($_POST['suite_type']) && $_POST['suite_type'] !== null) {
                $data = array(
                    "room_type" => $_POST["room_type"],
                    "suite_type" => $_POST["suite_type"],
                );
                // echo 'hello world am using ajax roomtype: '. $data['room_type'] . ' + suite type:'. $data['suite_type'];
            }else {
                $data = array(
                    "room_type" => $_POST["room_type"],
                    "suite_type" => $_POST["suite_type"] = null
                );
                // echo 'hello world am using ajax roomtype: '. $data['room_type'] . ' + no suite type';
            }
            $rooms = $this->model->searchData($data);
            // $result = json_encode($rooms);
            foreach($rooms as $room) {
                $bookBtn = "../home/log_in";
                $suiteType = '';
                if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true) {
                    $bookBtn = "../home/bookRoom/";
                }else {
                    $bookBtn = "../home/log_in";
                }
                if($room['suite_type'] !== null) {
                    $suiteType = "Suite Type: ".$room['suite_type'];
                }else {
                    $suiteType = '';
                }
                echo '<div class="card bg-secondary-clr">
                <img src="'.BASE_URL.'/public/assets/img/rooms/'.$room["room_image"].'" alt="" class="w-full">
                <div class="card-text text-white p-3">
                    <h1 class="wilkysta-font text-3xl">'.$room["room_heading"].'</h1>
                    <div class="info montserrat-font flex items-center gap-4 text-sm my-2">
                        <p>Capacity: '.$room["capacity"].'</p>
                        <i class="bx bxs-circle text-xs text-gray-400"></i>
                        <p>Room Type: '.$room["room_type"].'</p>
                        <i class="bx bxs-circle text-xs text-gray-400"></i>
                        <p>'.$suiteType.'</p>
                    </div>
                    <a href="#" class="wilkysta-font uppercase text-lg underline decoration-dotted">see details</a>
                    <hr class="my-2">
                    <div class="price-btn wilkysta-font flex items-center justify-between">
                        <p class="uppercase text-2xl">$<span>'.$room["room_price"].'</span>/night</p>
                        <a href="'. $bookBtn . $room["room_id"] .'"><button class="border border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                    </div>
                </div>
            </div>';
            }
        }
    }
}
?>