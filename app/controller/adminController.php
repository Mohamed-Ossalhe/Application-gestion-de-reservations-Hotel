<?php
    session_start();
    class adminController extends Controller {
        // ! loading views
        public function index() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true) {
                $this->Dashbaord_Guests();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin log in page
        public function adminLogin($error = "") {
            $this->view("admin/admin-login", ["error" => $error]);
            $this->view->render();
        }
        // ! admin guests page
        public function Dashbaord_Guests() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true){
                $this->model("Client");
                $data = $this->model->getClients();
                $this->view("admin/dashboard-guests", ["guests" => $data]);
                $this->view->render();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin bookings page
        public function Dashbaord_Bookings() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true){
                $this->model("Client");
                $data = $this->model->getClients();
                $this->view("admin/dashboard-booking", ["guests" => $data]);
                $this->view->render();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin rooms page
        public function Dashbaord_Rooms() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true){
                $this->view("admin/dashboard-rooms", ["rooms" => $this->display_Rooms()]);
                $this->view->render();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin analytics page
        public function Dashbaord_Analytics() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true){
                $this->model("Client");
                $clients = $this->model->getClients();
                $this->view("admin/dashboard-analytics", ["guests"=>$clients, "rooms"=>$this->display_Rooms()]);
                $this->view->render();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin settings page
        public function Dashbaord_Settings() {
            if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"] === true){
                $this->model("Admin");
                $data = $this->model->getAdmin();
                $this->view("admin/dashboard-settings", ["adminData" => $data]);
                $this->view->render();
            }else {
                $this->adminLogin();
            }
        }
        // ! admin add room page
        public function addRoom($error = "") {
            $this->view("admin/add-room", ["error"=>$error]);
            $this->view->render();
        }

        // ! handling login proccess
        public function logIn() {
            if(isset($_POST["submit"])) {
                if(!isset($_SESSION["adminLogged"])) {
                    if(!empty($_POST["email"]) && !empty($_POST["password"])) {
                        $data = array(
                            "email" => filter_var($this->validateData($_POST["email"]), FILTER_SANITIZE_EMAIL),
                            "password" => $this->validateData($_POST["password"])
                        );
                        // var_dump($data);
                        $this->model("Admin");
                        $admin = $this->model->getAdmin();
                        if($data["email"] === $admin["admin_email"] && password_verify($data["password"], $admin["admin_password"])) {
                            $_SESSION["adminLogged"] = true;
                            $_SESSION["admin_name"] = $admin["admin_name"];
                            $_SESSION["admin_email"] = $admin["admin_email"];
                            header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/admin/Dashbaord_Guests");
                        }else {
                            $this->adminLogin("uncorrect email or password");
                        }
                    }else {
                        $this->adminLogin("Please Fill All The Fields");
                    }
                }
            }
        }
        // ! log out
        public function adminLogOut() {
            if(session_destroy()) {
                header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/admin/");
            }
        }
        // ! handling crud operations
        // display rooms
        public function display_Rooms(){
            $this->model("Room");
            $rooms = $this->model->getData();
            return $rooms;
        }
        // add room
        public function add_Room() {
            if(isset($_POST["submit"])){
                if(!empty($_POST["heading"]) && !empty($_POST["description"]) && !empty($_POST["room_type"]) && !empty($_POST["capacity"]) && !empty($_POST["price"]) && !empty($_FILES["image"])) {
                    $image_name = $_FILES["image"]["name"];
                    $image_tmp = $_FILES["image"]["tmp_name"];
                    $data = array(
                        "heading" => $this->validateData($_POST["heading"]),
                        "description" => $this->validateData($_POST["description"]),
                        "room_type" => $this->validateData($_POST["room_type"]),
                        "capacity" => $this->validateData($_POST["capacity"]),
                        "price" => $this->validateData($_POST["price"]),
                        "image" => $image_name
                    );
                    // echo $image_tmp;
                    $new_image_path = ROOT . DIRECTORY_SEPARATOR . "public/assets/img/rooms/" . $image_name;
                    $this->model("Room");
                    $this->model->insertion($data);
                    move_uploaded_file($image_tmp, $new_image_path);
                    header("Location: ../admin/Dashbaord_Rooms");
                }else {
                    $this->addRoom("<script>alert(\"Please Fill All The Fields!\")</script>");
                }
            }
        }
        // update room
        public function update_Room() {}
        // delete room
        public function delete_Room($id) {
            $this->model("Room");
            $this->model->remove($id);
            header("Location: ./admin/Dashbaord_Rooms");
        }
        // delete client
        // delete client
        public function deleteClient($id) {
            $this->model("Client");
            $this->model->removeClient($id);
            header("Location: http://localhost/Application-gestion-de-reservations-Hotel/public/admin/Dashbaord_Guests");
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