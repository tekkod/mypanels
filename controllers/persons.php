<?php 
/**
* Kişiler İşlemleri
*/
class Persons extends Controller {
	function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Kişiler';
        $this->view->render('header');
        $this->view->render('persons/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Kişiler';
        $this->view->personsList = $this->model->personsList();
        $this->view->render('header');
        $this->view->render('persons/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'fullname' => $_POST['txtFullname'],
            'company'  => $_POST['txtCompany'],
            'email'    => $_POST['txtEmail'],
            'phone'    => $_POST['txtPhone'],
            'adress'   => $_POST['txtAdress'],
            'other'    => $_POST['txtOther'],
            'adddate'  => date('Y-m-d H:i:s'),
            'userid'   => $_SESSION['userid']
        );
        $result = $this->model->create($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }

    public function edit($id) {
        $this->view->persons = $this->model->personsSingleList($id);
        if (empty($this->view->persons)) {
            header('location: ' . URL . 'persons/getlist');
        }
        $this->view->title = 'Kişiler';
        $this->view->render('header');
        $this->view->render('persons/edit');
        $this->view->render('footer');
    }
    
    public function editSave($persons_id) {
        $data = array(
            'persons_id' => $persons_id,
            'fullname'   => $_POST['txtFullname'],
            'company'    => $_POST['txtCompany'],
            'email'      => $_POST['txtEmail'],
            'phone'      => $_POST['txtPhone'],
            'adress'     => $_POST['txtAdress'],
            'other'      => $_POST['txtOther'],
            'adddate'    => date('Y-m-d H:i:s'),
            'userid'     => $_SESSION['userid']
        );
        $result = $this->model->editSave($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function delete($persons_id) {
        $this->model->delete($persons_id);
        header('location: ' . URL . 'persons/getlist');
    }
}
?>