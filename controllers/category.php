<?php 
/**
* kategori İşlemleri
*/
class Category extends Controller {
	function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Kategori İşlemleri';
        $this->view->render('header');
        $this->view->render('category/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Kategori Listesi';
        $this->view->CategoryList = $this->model->CategoryList();
        $this->view->render('header');
        $this->view->render('category/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'name'   => $_POST['txtCategory'],
            'status' => $_POST['txtOnayRadios'],
            'adddate'=> date('Y-m-d H:i:s'),
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
        $this->view->category = $this->model->categorySingleList($id);
        if (empty($this->view->category)) {
            header('location: ' . URL . 'category/getlist');
        }
        $this->view->title = 'Kategori Güncelleme İşlemi';
        $this->view->render('header');
        $this->view->render('category/edit');
        $this->view->render('footer');
    }
    public function editSave($category_id) {
        $data = array(
            'category_id' => $category_id,
            'name'        => $_POST['txtCategory'],
            'status'      => $_POST['txtOnayRadios'],
            'adddate'     => date('Y-m-d H:i:s'),
            'userid'      => $_SESSION['userid']
        );
        $result = $this->model->editSave($data);
        if ($result=='0') {
            $this->view->render('error');
        }else{
            $this->view->render('success');
        }
    }
    public function delete($category_id) {
        $this->model->delete($category_id);
        header('location: ' . URL . 'category/getlist');
    }
}
?>