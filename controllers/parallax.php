<?php 
/**
* Animasyonlu Kayan Menü İşlemleri
*/
class Parallax extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Parallax Slider';
        $this->view->render('header');
        $this->view->render('parallax/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Parallax Slider Listeleme';
        $this->view->parallax = $this->model->parallaxList();
        $this->view->render('header');
        $this->view->render('parallax/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $foldername = 'upload/parallax/';
        $filename = $foldername.basename($_FILES['txtbackroundimage']['name']);
        $data = array(
            'parallaxname'       => $_POST['txtparallaxname'],
            'initialleft'        => $_POST['txtinitialleft'],
            'initialtop'         => $_POST['txtinitialtop'],
            'finalleft'          => $_POST['txtfinalleft'],
            'finaltop'           => $_POST['txtfinaltop'],
            'duration'           => $_POST['txtduration'],
            'fadestart'          => $_POST['txtfadestart'],
            'continuousleft'     => $_POST['txtcontinuousleft'],
            'continuoustop'      => $_POST['txtcontinuoustop'],
            'continuousduration' => $_POST['txtcontinuousduration'],
            'continuouseasing'   => $_POST['txtcontinuouseasing'],
            'backgroundimage'    => $filename,
            'width'              => $_POST['txtwidth'],
            'height'             => $_POST['txtheight'],
            'rotate'             => $_POST['txtrotate'],
            'durationrotate'     => $_POST['txtdurationrotate'],
            'delay'              => $_POST['txtdelay'],
            'exitleft'           => $_POST['txtexitleft'],
            'exittop'            => $_POST['txtexittop'],
            'exitduration'       => $_POST['txtexitduration'],
            'exitdelay'          => $_POST['txtexitdelay'],
            'adddate'            => date('Y-m-d H:i:s'),
            'userid'             => $_SESSION['userid']
        );
        $image = new Upload( $_FILES[ 'txtbackroundimage' ] );
        if ( $image->uploaded ) {
            $image->Process('upload/parallax');
            // yeniden farklı boyutta kayıt et (200x100)
            $image->file_name_body_pre = 'thumb_';
            $image->image_convert = 'jpg';
            $image->image_resize = true;
            $image->image_ratio_crop = true;
            $image->image_x = 200;
            $image->image_y = 100;
            $image->Process('upload/parallax/thumb');
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
        $this->view->title = 'Parallax Düzenleme';
        $this->view->parallax = $this->model->parallaxSingleList($id);
        if (empty($this->view->parallax)) {
            header('location: ' . URL . 'parallax/getlist');
        }
        $this->view->render('header');
        $this->view->render('parallax/edit');
        $this->view->render('footer');
    }
    public function editSave($parallax_id) {
        $foldername = 'upload/parallax/';
        $filename = $foldername.basename($_FILES['txtbackroundimage']['name']);
        $data = array(
            'parallax_id'        => $parallax_id,
            'parallaxname'       => $_POST['txtparallaxname'],
            'initialleft'        => $_POST['txtinitialleft'],
            'initialtop'         => $_POST['txtinitialtop'],
            'finalleft'          => $_POST['txtfinalleft'],
            'finaltop'           => $_POST['txtfinaltop'],
            'duration'           => $_POST['txtduration'],
            'fadestart'          => $_POST['txtfadestart'],
            'continuousleft'     => $_POST['txtcontinuousleft'],
            'continuoustop'      => $_POST['txtcontinuoustop'],
            'continuousduration' => $_POST['txtcontinuousduration'],
            'continuouseasing'   => $_POST['txtcontinuouseasing'],
            'backgroundimage'    => $filename,
            'width'              => $_POST['txtwidth'],
            'height'             => $_POST['txtheight'],
            'rotate'             => $_POST['txtrotate'],
            'durationrotate'     => $_POST['txtdurationrotate'],
            'delay'              => $_POST['txtdelay'],
            'exitleft'           => $_POST['txtexitleft'],
            'exittop'            => $_POST['txtexittop'],
            'exitduration'       => $_POST['txtexitduration'],
            'exitdelay'          => $_POST['txtexitdelay'],
            'adddate'            => date('Y-m-d H:i:s'),
            'userid'             => $_SESSION['userid']
        );
        $image = new Upload( $_FILES[ 'txtbackroundimage' ] );
        if ( $image->uploaded ) {
            $image->Process('upload/parallax');
            // yeniden farklı boyutta kayıt et (200x100)
            $image->file_name_body_pre = 'thumb_';
            $image->image_convert = 'jpg';
            $image->image_resize = true;
            $image->image_ratio_crop = true;
            $image->image_x = 200;
            $image->image_y = 100;
            $image->Process('upload/parallax/thumb');
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

    public function delete($parallax_id) {
        $this->model->delete($parallax_id);
        header('location: ' . URL . 'parallax/getlist');
    }
}
?>