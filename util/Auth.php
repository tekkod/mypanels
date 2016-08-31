<?php
/**
 * Oturum Kontrolü
 */
class Auth {
    public static function handleLogin() {
        header('Content-Type: text/html; charset=utf-8');
        session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: '.URL.'login');
            exit;
        }
    }
}