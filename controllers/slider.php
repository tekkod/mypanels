<?php 
/**
* Slider İşlemleri
*/
class Slider extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index(){    
        $this->view->title = 'Slider İşlemleri';
        $this->view->render('header');
        $this->view->render('slider/index');
        $this->view->render('footer');
    }
    public function getlist(){
        $this->view->title = 'Slider Listesi';
        $this->view->slider = $this->model->SliderList();
        $this->view->render('header');
        $this->view->render('slider/getlist');
        $this->view->render('footer');
    }
    public function create(){
        $data = array(
            'slidername' => $_POST['txtQuestionName'],
            'slider'     => $_FILES['txtQuestion']['name'],
            'adddate'    => date('Y-m-d H:i:s'),
            'userid'     => $_SESSION['userid']
        );
        $image = new Upload( $_FILES[ 'txtQuestion' ] );
        if ( $image->uploaded ) {
            $image->Process('upload/slider');
            // yeniden farklı boyutta kayıt et (200x100)
            $image->file_name_body_pre = 'thumb_';
            $image->image_convert = 'jpg';
            $image->image_resize = true;
            $image->image_ratio_crop = true;
            $image->image_x = 200;
            $image->image_y = 100;
            $image->Process('upload/slider/thumb');
            // upload klasörüne değişiklik yapmadan kayıt et
            if ( $image->processed ){
                $result = $this->model->create($data);
                if ($result=='0') {
                    $this->view->render('error');
                }else{
                    $this->view->render('success');
                }
            } else {
                $this->view->render('error');
            }
        }
    }
    public function edit($id){
        $this->view->title = 'Slider Düzenleme';
        $this->view->slider = $this->model->sliderSingleList($id);
        if (empty($this->view->slider)) {
            header('location: ' . URL . 'slider/getlist');
        }
        $this->view->render('header');
        $this->view->render('slider/edit');
        $this->view->render('footer');
    }
    public function editSave($slider_id){
        $data = array(
            'slider_id'  => $slider_id,
            'slidername' => $_POST['txtQuestionName'],
            'slider'     => $_FILES['txtQuestion']['name'],
            'adddate'    => date('Y-m-d H:i:s'),
            'userid'     => $_SESSION['userid']
        );
        $image = new Upload( $_FILES[ 'txtQuestion' ] );
        if ( $image->uploaded ) {
            $image->Process('upload/slider');
            // yeniden farklı boyutta kayıt et (200x100)
            $image->file_name_body_pre = 'thumb_';
            $image->image_convert = 'jpg';
            $image->image_resize = true;
            $image->image_ratio_crop = true;
            $image->image_x = 200;
            $image->image_y = 100;
            $image->Process('upload/slider/thumb');
            // upload klasörüne değişiklik yapmadan kayıt et
            if ( $image->processed ){
                $result = $this->model->editSave($data);
                if ($result=='0') {
                    $this->view->render('error');
                }else{
                    $this->view->render('success');
                }
            } else {
                $this->view->render('error');
            }
        }
    }
    public function delete($slider_id){
        $this->model->delete($slider_id);
        header('location: ' . URL . 'slider/getlist');
    }
}
?>