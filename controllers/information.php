<?php 
/**
* Bilgi Sayfaları
*/
class Information extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Bilgi Sayfaları';
        $this->view->render('header');
        $this->view->render('information/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Bilgi Sayfaları';
        $this->view->information = $this->model->InformationList();
        $this->view->render('header');
        $this->view->render('information/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'name' => $_POST['txtSection'],
            'detay' => $_POST['txtSchool'],
            'adddate' => date('Y-m-d H:i:s'),
            'userid' => $_SESSION['userid']
        );
        $result = $this->model->create($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function edit($id) {
        $this->view->information = $this->model->informationSingleList($id);

        if (empty($this->view->information)) {
            header('location: ' . URL . 'information/getlist');
        }
        $this->view->title = 'Bilgi Sayfaları Düzenle';
        $this->view->render('header');
        $this->view->render('information/edit');
        $this->view->render('footer');
    }
    public function editSave($information_id) {
        $data = array(
            'information_id' => $information_id,
            'name' => $_POST['txtSection'],
            'detay' => $_POST['txtSchool'],
            'adddate' => date('Y-m-d H:i:s'),
            'userid' => $_SESSION['userid']
        );
        $result = $this->model->editSave($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function delete($information_id) {
        $this->model->delete($information_id);
        header('location: ' . URL . 'information/getlist');
    }    
}
?>