<?php
// check if user is logged in
    function isUserLogged() {
        if(isset($_SESSION["logged"]) && $_SESSION["logged"]) {
            return true;
        }else {
            return false;
        }
    }
    // check if admin logged in
    function isAdminLogged() {
        if(isset($_SESSION["adminLogged"]) && $_SESSION["adminLogged"]) {
            return true;
        }else {
            return false;
        }
    }
?>