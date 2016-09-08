<?php 
/**
* Etkinlikler İşlemleri
*/
class Activities extends Controller {
	function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Etkinlikler';
        $this->view->CategoryList = $this->model->CategoryList();
        $this->view->render('header');
        $this->view->render('activities/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Etkinlikler';
        $this->view->activitiesList = $this->model->activitiesList();
        $this->view->render('header');
        $this->view->render('activities/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'title'       => $_POST['txtTitle'],
            'location'    => $_POST['txtLocation'],
            'category'    => $_POST['txtCategory'],
            'start'       => $_POST['txtStart'],
            'description' => $_POST['txtDescription'],
            'adddate'     => date('Y-m-d H:i:s'),
            'userid'      => $_SESSION['userid']
        );
        $result = $this->model->create($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function edit($id) {
        $this->view->activities = $this->model->activitiesSingleList($id);
        if (empty($this->view->activities)) {
            header('location: ' . URL . 'activities/getlist');
        }
        $this->view->title = 'Etkinlikler';
        $this->view->CategoryList = $this->model->CategoryList();
        $this->view->render('header');
        $this->view->render('activities/edit');
        $this->view->render('footer');
    }
    public function editSave($activities_id) {
        $data = array(
            'activities_id' => $activities_id,
            'title'         => $_POST['txtTitle'],
            'location'      => $_POST['txtLocation'],
            'category'      => $_POST['txtCategory'],
            'start'         => $_POST['txtStart'],
            'description'   => $_POST['txtDescription'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        $result = $this->model->editSave($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function delete($activities_id) {
        $this->model->delete($activities_id);
        header('location: ' . URL . 'activities/getlist');
    }
}
?>