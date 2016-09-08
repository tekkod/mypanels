<?php 
/**
* Haberler
*/
class News extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title    = 'Haber Sayfaları';
        $this->view->category = $this->model->CategoryList();
        $this->view->newstype = $this->model->NewsTypeList();
        $this->view->source   = $this->model->SourceList();
        $this->view->render('header');
        $this->view->render('news/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Haber Listesi';
        $this->view->news  = $this->model->NewsList();
        $this->view->render('header');
        $this->view->render('news/getlist');
        $this->view->render('footer');
    }
    public function create() {
        /*
        Günlük Tarih , Static Tanımlanmış Yol , Sistemde Oturum Açan Kullanıcının ID,
        Seçilen Kategori ID Oluşturarak Path Oluşturarark Boş Bir Klasör Oluşturur.
        */
        $newsfoldername = date("Y-m-d");
        $staticpath = 'upload/haberler/';
        $foldername = $staticpath.$newsfoldername.'-'.$_SESSION['userid'].'-'.$_POST['txtCategory'];
        if (!file_exists($foldername)) {
            mkdir($foldername,777);
        }
        $filename = basename($_FILES['txtNewsImage']['name']);
        $uploadfolder_filename = $foldername.'/'.$filename;
        $maxsize = 10485760; //10MB
        $filesize = filesize($_FILES['txtNewsImage']['tmp_name']);
        $extensions = array('.png','.jpg','.tif');
        $extension = strrchr($filename, '.');
        $data = array(
            'category'      => $_POST['txtCategory'],
            'type'          => $_POST['txtNewstype'],
            'source'        => $_POST['txtSource'],
            'news'          => $_POST['txtNews'],
            'order'         => $_POST['txtNewsOrder'],
            'image'         => $uploadfolder_filename,
            'description'   => $_POST['txtNewsDesc'],
            'status'        => $_POST['txtOnayRadios'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        if(in_array($extension, $extensions)){
            if($filesize < $maxsize){
                if (move_uploaded_file($_FILES['txtNewsImage']['tmp_name'], $uploadfolder_filename)){
                    $this->model->create($data);
                    header('location: ' . URL . 'news/getlist');
                }else{
                    $this->view->render('alert');
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-12">';
                                echo '<div class="alert alert-danger text-center">';
                                    echo '<strong>Hata Oluştu!</strong>';
                                    echo '<br/>';
                                    echo 'Dosya Yüklenemedi!';
                                    echo '<br/>';
                                    echo 'Klasörün Yazma Yetkisine Sahip Olduğundan Emin Olunuz.';
                                    echo '<br/>';
                                    echo '<a href="'.URL.'">Ana Sayfa</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            }else{
                $this->view->render('alert');
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-sm-12 col-md-12">';
                            echo '<div class="alert alert-danger text-center">';
                                echo '<strong>Hata Oluştu!</strong>';
                                echo '<br/>';
                                echo 'Dosya Boyutu 10MB dan Düşük Olmalıdır.';
                                echo '<br/>';
                                echo '<a href="'.URL.'">Ana Sayfa</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }else{
            $this->view->render('alert');
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-sm-12 col-md-12">';
                        echo '<div class="alert alert-danger text-center">';
                            echo '<strong>Hata Oluştu!</strong>';
                            echo '<br/>';
                            echo 'Sadece Png, Jpg ve HD Görüntüler İçin TIF Uzantılı Dosyalara İzin Veriliyor.';
                            echo '<br/>';
                            echo 'Örnek : Doğru Format - resim.jpg | Yanlış Format - resim.JPG';
                            echo '<br/>';
                            echo '<a href="'.URL.'">Ana Sayfa</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
    public function edit($id) {
        $this->view->category = $this->model->CategoryList();
        $this->view->news     = $this->model->newsSingleList($id);
        $this->view->newstype = $this->model->NewsTypeList();
        $this->view->source   = $this->model->SourceList();

        if (empty($this->view->news)) {
            header('location: ' . URL . 'news/getlist');
        }
        $this->view->title = 'Haber Düzenle';
        $this->view->render('header');
        $this->view->render('news/edit');
        $this->view->render('footer');
    }
    public function editSave($news_id) {
        /* 
        Günlük Tarih , Static Tanımlanmış Yol , Sistemde Oturum Açan Kullanıcının ID, 
        Seçilen Kategori ID ve Rastgele 1-1000 arası Sayı Oluşturarak Path Oluşturarark Boş Bir Klasör Oluşturur.
        */
        $newsfoldername = date("Y-m-d");
        $staticpath = 'upload/haberler/';
        $foldername = $staticpath.$newsfoldername.'-'.$_SESSION['userid'].'-'.$_POST['txtCategory'];
        if (!file_exists($foldername)) {
            mkdir($foldername,777);
        }
        $filename = basename($_FILES['txtNewsImage']['name']);
        $uploadfolder_filename = $foldername.'/'.$filename;
        $maxsize = 10485760; //10MB
        $filesize = filesize($_FILES['txtNewsImage']['tmp_name']);
        $extensions = array('.png','.jpg','.tif');
        $extension = strrchr($filename, '.');
        $data = array(
            'news_id'       => $news_id,
            'category'      => $_POST['txtCategory'],
            'type'          => $_POST['txtNewstype'],
            'source'        => $_POST['txtSource'],
            'news'          => $_POST['txtNews'],
            'order'         => $_POST['txtNewsOrder'],
            'image'         => $uploadfolder_filename,
            'description'   => $_POST['txtNewsDesc'],
            'status'        => $_POST['txtOnayRadios'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        if(in_array($extension, $extensions)){
            if($filesize < $maxsize){
                if (move_uploaded_file($_FILES['txtNewsImage']['tmp_name'], $uploadfolder_filename)){
                    $this->model->editSave($data);
                    header('location: ' . URL . 'news/getlist');
                }else{
                    $this->view->render('alert');
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-12">';
                                echo '<div class="alert alert-danger text-center">';
                                    echo '<strong>Hata Oluştu!</strong>';
                                    echo '<br/>';
                                    echo 'Dosya Yüklenemedi!';
                                    echo '<br/>';
                                    echo 'Klasörün Yazma Yetkisine Sahip Olduğundan Emin Olunuz.';
                                    echo '<br/>';
                                    echo '<a href="'.URL.'">Ana Sayfa</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            }else{
                $this->view->render('alert');
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-sm-12 col-md-12">';
                            echo '<div class="alert alert-danger text-center">';
                                echo '<strong>Hata Oluştu!</strong>';
                                echo '<br/>';
                                echo 'Dosya Boyutu 10MB dan Düşük Olmalıdır.';
                                echo '<br/>';
                                echo '<a href="'.URL.'">Ana Sayfa</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }else{
            $this->view->render('alert');
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-sm-12 col-md-12">';
                        echo '<div class="alert alert-danger text-center">';
                            echo '<strong>Hata Oluştu!</strong>';
                            echo '<br/>';
                            echo 'Sadece Png, Jpg ve HD Görüntüler İçin TIF Uzantılı Dosyalara İzin Veriliyor.';
                            echo '<br/>';
                            echo 'Örnek : Doğru Format - resim.jpg | Yanlış Format - resim.JPG';
                            echo '<br/>';
                            echo '<a href="'.URL.'">Ana Sayfa</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
    public function delete($news_id) {
        $this->model->delete($news_id);
        header('location: ' . URL . 'news/getlist');

    }    
}
?>