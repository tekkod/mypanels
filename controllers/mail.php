<?php 
/**
* Mail Gönderme İşlemleri
*/
class Mail extends Controller {
	function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index() {
        $this->view->title = 'E-Mail İşlemleri';
        $this->view->personslist = $this->model->personscontrol();
        $this->view->render('header');
        $this->view->render('mail/index');
        $this->view->render('footer');
    }
    public function send(){
        $mail = new PHPMailer();
        $data = array(
            'alici'           => $_POST['txtalici'],
            'konu'            => $_POST['txtkonu'],
            'cc'              => $_POST['txtcc'],
            'bcc'             => $_POST['txtbcc'],
            'addattachment'   => $_FILES['txtaddattachment'],
            'icerik'          => $_POST['txticerik'],
        );
        if (!empty($data['addattachment'])){
            $resimler = array();
            foreach ($_FILES['txtaddattachment'] as $k => $l) {
                foreach ($l as $i => $v) {
                    if (!array_key_exists($i, $resimler))
                        $resimler[$i] = array();
                    $resimler[$i][$k] = $v;
                }
            }
            foreach ($resimler as $resim){
                $handle = new Upload($resim);
                if ($handle->uploaded) {
                    /* Resmi İşle */
                    $handle->Process("temp/");
                    if ( $handle->processed ){
                        $mail->AddAttachment("temp/".$resim['name']);
                    } else {
                        $this->view->render('error');
                    }
                    $handle-> Clean();
                } else {
                    echo $handle->error;
                }
            }
        }
        $mailsettings = $this->model->getMailSettings();

        $mail->CharSet = "UTF-8";
        $mail->SMTPSecure = 'tls';
        $mail->Username = mb_convert_encoding( $mailsettings[0]['siteemail'],"utf-8","auto");
        $mail->Password = $mailsettings[0]['siteemailpassword'];
        $mail->AddAddress($data['alici']);
        if (!empty($data['cc'])){$mail->addCC($data['cc']);}
        if (!empty($data['bcc'])){$mail->addBCC($data['bcc']);}
        $mail->FromName = $mailsettings[0]['title'];
        $mail->Subject = $data['konu'];
        $mail->Body = $data['icerik'];
        $mail->Host = $mailsettings[0]['siteemailhost'];
        $mail->Port = $mailsettings[0]['siteemailport'];
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->From = $mail->Username;

        if ($mail->Send()){
            $this->view->render('success');
        }else{
            $this->view->render('error');
        }
    }
}
?>