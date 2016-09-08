<?php

/**
 * Created by PhpStorm.
 * User: TEKKOD
 * Date: 4.9.2016
 * Time: 21:26
 */
class Search extends Controller {
    public function __construct(){
        parent::__construct();
        Auth::handleLogin();
    }
    public function getValues(){
        $degerler = array("Kategori","Slider","Bilgi Sayfaları");
        if (in_array($_GET["q"],$degerler)){
            echo $_GET["q"]." Değer Bulundu";
        }
    }

    public function index(){
        $this->view->title = "Arama Sonucu";
        $this->view->render("header");
        if (isset($_GET["q"])){
            $this->view->result = $this->getValues();
        }else{
            var_dump("Nasılsın");
        }
        $this->view->render("search/index");
        $this->view->render("footer");
    }

}