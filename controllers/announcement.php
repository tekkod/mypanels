<?php 
/**
* Duyurular
*/
class Announcement extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Duyuru Sayfası';
        $this->view->render('header');
        $this->view->render('announcement/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Duyuru Listesi';
        $this->view->announcement = $this->model->AnnouncementList();
        $this->view->render('header');
        $this->view->render('announcement/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'announcement'  => $_POST['txtAnnouncement'],
            'order'         => $_POST['txtAnnouncementOrder'],
            'image'         => $_POST['txtAnnouncementImage'],
            'description'   => $_POST['txtAnnouncementDesc'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        $result = $this->model->create($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function edit($id) {
        $this->view->announcement = $this->model->announcementSingleList($id);

        if (empty($this->view->announcement)) {
            header('location: ' . URL . 'announcement/getlist');
        }
        $this->view->title = 'Duyuru Düzenle';
        $this->view->render('header');
        $this->view->render('announcement/edit');
        $this->view->render('footer');
    }
    public function editSave($announcement_id) {
        $data = array(
            'announcement_id'   => $announcement_id,
            'announcement'      => $_POST['txtAnnouncement'],
            'order'             => $_POST['txtAnnouncementOrder'],
            'image'             => $_POST['txtAnnouncementImage'],
            'description'       => $_POST['txtAnnouncementDesc'],
            'adddate'           => date('Y-m-d H:i:s'),
            'userid'            => $_SESSION['userid']
        );
        $result = $this->model->editSave($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function delete($announcement_id) {
        $this->model->delete($announcement_id);
        header('location: ' . URL . 'announcement/getlist');
    }
}
?>