<?php

class Error extends Controller {

    function __construct() {
        parent::__construct(); 
    }
    
    function index() {
        $this->view->msg = '<h2>Sayfa Bulunamadı</h2>';
        $this->view->title = $this->view->msg;
        
        $this->view->render('error/index');
    }

}