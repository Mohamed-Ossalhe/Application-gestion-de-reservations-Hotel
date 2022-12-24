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
    public function log_in() {
        $this->view("home/log-in");
        $this->view->render();
    }
    public function sign_up() {
        $this->view("home/sign-up");
        $this->view->render();
    }
}
?>