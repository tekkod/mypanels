<?php
/**
* Site Ayarları
*/
class Settings extends Controller {
    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'Site Ayarları';
        $this->view->render('header');
        $this->view->render('settings/index');
        $this->view->render('footer');
    }
    public function getlist() {
        $this->view->title = 'Site Ayarları';
        $this->view->settings = $this->model->SettingsList();
        $this->view->render('header');
        $this->view->render('settings/getlist');
        $this->view->render('footer');
    }
    public function create() {
        $data = array(
            'title'             => $_POST['txtTitle'],
            'description'       => $_POST['txtDescription'],
            'keyword'           => $_POST['txtKeywords'],
            'googleanalytics'   => $_POST['txtGoogleAnalytics'],
            'googlemaps'        => $_POST['txtGoogleMaps'],
            'logo'              => $_FILES['txtFirmaLogo'],
            'name'              => $_POST['txtFirmaName'],
            'phone'             => $_POST['txtFirmaPhone'],
            'fax'               => $_POST['txtFirmaFax'],
            'email'             => $_POST['txtFirmaEmail'],
            'adress'            => $_POST['txtFirmaAdress'],
            'siteemail'         => $_POST['txtSiteEMailAdress'],
            'siteemailpassword' => $_POST['txtSiteEMailPassword'],
            'siteemailhost'     => $_POST['txtSiteEMailHost'],
            'siteemailport'     => $_POST['txtSiteEMailPort'],
            'yandexmetrica'     => $_POST['txtYandexMetrica'],
            'adddate'           => date('Y-m-d H:i:s'),
            'userid'            => $_SESSION['userid']
        );
        $handle = new Upload($_FILES['txtFirmaLogo']);
        if ($handle->uploaded) {
            /* Resim Yükleme İzni */
            $handle->allowed = array('image/*');
            /* Resmi İşle */
            $handle->Process("upload/logo/");
            if ( $handle->processed ){
                $result = $this->model->create($data);
                if ($result=='0') {
                    $this->view->render('error');
                }else{
                    $this->view->render('success');
                }
            } else {
                $this->view->render('error');
            }
            $handle-> Clean();
        } else {
            echo $handle->error;
        }
    }
    public function edit($id) {
        $this->view->title = 'Site Ayarları';
        $this->view->settings = $this->model->settingsSingleList($id);
        if (empty($this->view->settings)) {
            header('location: ' . URL . 'settings/getlist');
        }
        $this->view->render('header');
        $this->view->render('settings/edit');
        $this->view->render('footer');
    }
    public function editSave($settings_id) {
        $data = array(
            'settings_id'       => $settings_id,
            'title'             => $_POST['txtTitle'],
            'description'       => $_POST['txtDescription'],
            'keyword'           => $_POST['txtKeywords'],
            'theme'             => $_POST['txtThemes'],
            'googleanalytics'   => $_POST['txtGoogleAnalytics'],
            'googlemaps'        => $_POST['txtGoogleMaps'],
            'logo'              => $_FILES['txtFirmaLogo']['name'],
            'name'              => $_POST['txtFirmaName'],
            'phone'             => $_POST['txtFirmaPhone'],
            'fax'               => $_POST['txtFirmaFax'],
            'email'             => $_POST['txtFirmaEMail'],
            'adress'            => $_POST['txtFirmaAdress'],
            'siteemail'         => $_POST['txtSiteEMailAdress'],
            'siteemailpassword' => $_POST['txtSiteEMailPassword'],
            'siteemailhost'     => $_POST['txtSiteEMailHost'],
            'siteemailport'     => $_POST['txtSiteEMailPort'],
            'yandexmetrica'     => $_POST['txtYandexMetrica'],
            'adddate'           => date('Y-m-d H:i:s'),
            'userid'            => $_SESSION['userid']
        );
        $handle = new Upload($_FILES['txtFirmaLogo']);
        if ($handle->uploaded) {
            /* Resim Yükleme İzni */
            $handle->allowed = array('image/*');
            /* Resmi İşle */
            $handle->Process("upload/logo/");
            if ( $handle->processed ){
                $result = $this->model->editSave($data);
                if ($result=='0') {
                    $this->view->render('error');
                }else{
                    $this->view->render('success');
                }
            } else {
                $this->view->render('error');
            }
            $handle-> Clean();
        } else {
            echo $handle->error;
        }
    }

    public function delete($settings_id) {
        $this->model->delete($settings_id);
        header('location: ' . URL . 'settings/getlist');
    }
}
?>
