<?php
class Login extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->title = 'Oturum Aç';
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }
    public function run() {
        $this->model->run();
    }
    public function logout() {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }
}
?>