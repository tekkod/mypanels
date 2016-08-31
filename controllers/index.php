<?php
class Index extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->title = 'Ana Sayfa';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}
?>