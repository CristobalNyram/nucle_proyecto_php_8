<?php

class Auth {

    public static function isUserLoggedIn() {
        session_start();
        return isset($_SESSION['user_id']);
    }

    public static function requireLogin() {
        // error_log(BASE_URL);
        if (!self::isUserLoggedIn()) {
            header("Location: " . BASE_URL . "/login.php");
            exit();
        }
    }

}

?>
