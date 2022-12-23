<?php
    // session_start();
    class adminController extends Controller {
        public function index() {
            $this->view("admin/dashboard-rooms");
            $this->view->render();
        }
        public function Dashbaord_Guests() {
            $this->view("admin/dashboard-guests");
            $this->view->render();
        }
        public function Dashbaord_Bookings() {
            $this->view("admin/dashboard-booking");
            $this->view->render();
        }
        public function Dashbaord_Rooms() {
            $this->view("admin/dashboard-rooms");
            $this->view->render();
        }
        public function Dashbaord_Analytics() {
            $this->view("admin/dashboard-analytics");
            $this->view->render();
        }
        public function Dashbaord_Settings() {
            $this->view("admin/dashboard-settings");
            $this->view->render();
        }
    }
?>