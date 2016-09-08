<?php
/**
* Yorumlar
*/
class Comments extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Yorumlar';
        $this->view->render('header');
        $this->view->render('comments/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Yorumlar';
        $this->view->comments = $this->model->CommentsList();
        $this->view->render('header');
        $this->view->render('comments/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'comments'      => $_POST['txtComments'],
            'name'          => $_POST['txtCommentsName'],
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
        $this->view->comments = $this->model->commentsSingleList($id);

        if (empty($this->view->comments)) {
            header('location: ' . URL . 'comments/getlist');
        }
        $this->view->title = 'Yorum Düzenle';
        $this->view->render('header');
        $this->view->render('comments/edit');
        $this->view->render('footer');
    }
    public function editSave($comments_id) {
        $data = array(
            'comments_id'   => $comments_id,
            'name'          => $_POST['txtCommentsName'],
            'comments'      => $_POST['txtComments'],
            'confirm'       => $_POST['txtOnayRadios'],
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
    public function delete($comments_id) {
        $this->model->delete($comments_id);
        header('location: ' . URL . 'comments/getlist');
    }
}
?>
