<?php
/**
* Fotoğraf Yönetimi
*/
class Picture extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index(){
        $this->view->title = "Görsel İşlemler";
        $this->view->render("header");
        $this->view->render("picture/index");
        $this->view->render("footer");
    }
    public function upload(){
        $resimler = array();
        foreach ($_FILES['txtImage'] as $k => $l) {
            foreach ($l as $i => $v) {
                if (!array_key_exists($i, $resimler))
                    $resimler[$i] = array();
                $resimler[$i][$k] = $v;
            }
        }
        foreach ($resimler as $resim){
            $handle = new Upload($resim);
            if ($handle->uploaded) {
                /* Resim Yükleme İzni */
                $handle->allowed = array('image/*');
                /* Resmi İşle */
                $handle->Process("upload/picture/");
                $handle->file_name_body_pre = 'thumb_';
                $handle->image_convert = 'jpg';
                $handle->image_resize = true;
                $handle->image_ratio_crop = true;
                $handle->image_x = 200;
                $handle->image_ratio_y = true;
                $handle->Process('upload/picture/thumb');
                if ( $handle->processed ){
                    $this->view->render('success');
                } else {
                    $this->view->render('error');
                }
                $handle-> Clean();
            } else {
                echo $handle->error;
            }
        }
    }
    /*
    public function index() {
      $directory = DIRECTORY;
      $directory_seperator = "/";
      $width = "100px";
      $height = "10px";

      $this->view->title = 'Fotoğraf Yönetimi';
      /*
      $categorylistcontrol = $this->model->CategoryList();
      if($categorylistcontrol[0]>0){
        $this->view->category = $this->model->CategoryList();
      }else{
        $this->view->category = 'Aktif Kategori Bulunmuyor';
      }
      */
      /*
      $this->view->category = $this->model->CategoryList();
      $this->view->imageslist = $this->getAllImgs($this->getAllDirs($directory, $directory_seperator));
      $this->view->render('header');
      $this->view->render('picture/index');
      $this->view->render('footer');
    }

    public function create() {
        $data = array(
            'images'        => $_FILES['txtImage']['name'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        for ($i=0; $i < count($data['images']); $i++) {
          $a = $this->multiimageupload($i);
        }
        $this->model->create($data);
    }
    public function multiimageupload($i){
      
      $directory = 'upload/picture/';
      $uploadfile = $directory . basename($_FILES['txtImage']['name'][$i]);
      $maxsize = 104857600;
      $size = filesize($_FILES['txtImage']['tmp_name'][$i]);
      $extensions = array('.png','.jpg','.tif');
      $extension = strrchr($_FILES['txtImage']['name'][$i], '.');
      if ($_FILES['txtImage']['name'][$i] != "" || $_FILES['txtImage']['tmp_name'][$i] != "") {
          if(in_array($extension, $extensions)){
              if($size < $maxsize){
                  if (move_uploaded_file($_FILES['txtImage']['tmp_name'][$i], $uploadfile)){
                      header('location: ' . URL . 'picture');
                  }else{
                    $this->view->render('alert');
                    echo '<div class="container"> <div class="row"> <div class="col-sm-12 col-md-12"> <div class="alert alert-danger">';
                        echo '<strong>Hata Oluştu!</strong> Dosya Yüklenemedi! - Klasörün Yazma Yetkisine Sahip Olduğundan Emin Olunuz.';
                        echo '<a href="'.URL.'picture'.'">Geri Dön</a>';
                    echo '</div> </div> </div> </div>';
                  }
              }else{
                $this->view->render('alert');
                echo '<div class="container"> <div class="row"> <div class="col-sm-12 col-md-12"> <div class="alert alert-danger">';
                    echo '<strong>Hata Oluştu!</strong> Dosya Boyutu 1MB dan Düşük Olmalıdır.';
                    echo '<a href="'.URL.'picture'.'">Geri Dön</a>';
                echo '</div> </div> </div> </div>';
              }
          }else{
            $this->view->render('alert');
            echo '<div class="container"> <div class="row"> <div class="col-sm-12 col-md-12"> <div class="alert alert-danger">';
                echo '<strong>Hata Oluştu!</strong> <br/> Sadece Png, Jpg ve HD Görüntüler İçin TIF Uzantılı Dosyalara İzin Veriliyor. <br/> Örnek : Doğru Format - resim.jpg | Yanlış Format - resim.JPG <br/>';
                echo '<a href="'.URL.'picture'.'">Geri Dön</a>';
            echo '</div> </div> </div> </div>';
          }
      }else{
        $this->view->render('alert');
        echo '<div class="container"> <div class="row"> <div class="col-sm-12 col-md-12"> <div class="alert alert-danger">';
            echo '<strong>Hata Oluştu!</strong>Dosya Adı Boş Geçilemez';
            echo '<a href="'.URL.'picture'.'">Geri Dön</a>';
        echo '</div> </div> </div> </div>';
      }
    }
    public function getAllDirs($directory, $directory_seperator) {
      $dirs = array_map(function ($item) use ($directory_seperator) {
          return $item . $directory_seperator;
      }, array_filter(glob($directory . '*'), 'is_dir'));
      foreach ($dirs as $dir) {
          $dirs = array_merge($dirs, $this->getAllDirs($dir, $directory_seperator));
      }
      return $dirs;
    }

    public function getAllImgs($directory) {
      $resizedFilePath = array();
      foreach ($directory as $dir) {
        foreach (glob($dir . '*.png') as $filename) {
            array_push($resizedFilePath, $filename);
        }
      }
      foreach ($directory as $dir) {
        foreach (glob($dir . '*.jpg') as $filename) {
            array_push($resizedFilePath, $filename);
        }
      }
      return $resizedFilePath;
    }

    public function setcategory(){
        $data = array(
            'category_id'  => $_POST['category_id'],
            'images'  => $_POST['directoryfotolist'],
        );
        $this->model->setcategory($data);
    }
    */
}
?>
