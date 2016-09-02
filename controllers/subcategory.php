<?php 
/**
* Alt Kategori İşlemleri
*/
class SubCategory extends Controller{
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index(){
        $this->view->title = 'Alt Kategori İşlemleri';
        $this->view->CategoryList = $this->model->CategoryList();
        $this->view->render('header');
        $this->view->render('subcategory/index');
        $this->view->render('footer');
    }
    public function getlist(){
        $this->view->title = 'Alt Kategori Listeleme';
        $this->view->SubCategoryList = $this->model->SubCategoryList();
        $this->view->render('header');
        $this->view->render('subcategory/getlist');
        $this->view->render('footer');
    }
    public function create(){
        $data = array(
            'category_id' => $_POST['txtCategory'],
            'name' => $_POST['txtSubCategory'],
            'status' => $_POST['txtOnayRadios'],
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
    public function edit($id){
        $this->view->CategoryList = $this->model->CategoryList();
        $this->view->subcategory = $this->model->subcategorySingleList($id);
        if (empty($this->view->subcategory)) {
            header('location: ' . URL . 'subcategory/getlist');
        }
        $this->view->title = 'Alt Kategori Güncelleme İşlemi';
        $this->view->render('header');
        $this->view->render('subcategory/edit');
        $this->view->render('footer');
    }
    public function editSave($subcategory_id){
        $data = array(
            'subcategory_id' => $subcategory_id,
            'category_id' => $_POST["txtCategory"],
            'name' => $_POST['txtSubCategory'],
            'status' => $_POST['txtOnayRadios'],
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
    public function delete($subcategory_id){
        $this->model->delete($subcategory_id);
        header('location: ' . URL . 'subcategory/getlist');
    }    
}
?>