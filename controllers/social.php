<?php 
/**
* Sosyal Medya İşlemleri
*/
class Social extends Controller{
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index(){
        $this->view->title = 'Sosyal Medya';
        $this->view->render('header');
        $this->view->render('social/index');
        $this->view->render('footer');
    }
    public function getlist(){
        $this->view->title = 'Sosyal Medya';
        $this->view->social = $this->model->SocialMediaList();
        $this->view->render('header');
        $this->view->render('social/getlist');
        $this->view->render('footer');
    }
    public function create(){
        $data = array(
            'facebook'  => $_POST['txtQuestions'],
            'twitter'   => $_POST['txtAnswer1'],
            'googleplus'=> $_POST['txtAnswer2'],
            'youtube'   => $_POST['txtAnswer3'],
            'linkedin'  => $_POST['txtAnswer4'],
            'instagram' => $_POST['txtAnswer5'],
            'adddate'   => date('Y-m-d H:i:s'),
            'userid'    => $_SESSION['userid']
        );
        $result = $this->model->create($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function edit($id){
        $this->view->social = $this->model->socialSingleList($id);
        if (empty($this->view->social)) {
            header('location: ' . URL . 'social/getlist');
        }
        $this->view->title = 'Sosyal Medya';
        $this->view->render('header');
        $this->view->render('social/edit');
        $this->view->render('footer');
    }
    public function editSave($social_id){
        $data = array(
            'social_id'  => $social_id,
            'facebook'   => $_POST['txtQuestions'],
            'twitter'    => $_POST['txtAnswer1'],
            'googleplus' => $_POST['txtAnswer2'],
            'youtube'    => $_POST['txtAnswer3'],
            'linkedin'   => $_POST['txtAnswer4'],
            'instagram'  => $_POST['txtAnswer5'],
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
    public function delete($social_id){
        $this->model->delete($social_id);
        header('location: ' . URL . 'social/getlist');
    }
}
?>