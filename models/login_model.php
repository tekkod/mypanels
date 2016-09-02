<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT *,u.name as name,u.surname as surname,up.name as permissionname,u.profilimage as profilimage  FROM users u left join users_permission up on u.users_permission_id = up.users_permission_id where u.users = :login and u.password = :password");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        $data = $sth->fetch();
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('loggedIn', true);
            Session::set('userid', $data['users_id']);
            Session::set('login', $data['name'].' '.$data['surname']);
            Session::set('permissionname',$data['permissionname']);
            Session::set('profilimage', $data['profilimage']);
            $writelogdata = $_SERVER["HTTP_USER_AGENT"]." - ".$_SESSION['userid']." - ". $_SESSION['login'] . ' - ' . date("Y-m-d H:i:s") . ' - ' . $this->GetIP() . ' Sisteme Giriş Yaptı.'.PHP_EOL;
            $dosya_adi = "logdata.txt";
            touch ($dosya_adi) or die ("Dosya Yaratılamadı!");
            $dosya = fopen ($dosya_adi , 'a+') or die ("Dosya açılamadı!");
            fwrite ( $dosya , $writelogdata);
            fclose ($dosya);
            header('location: ../');
        } else {
            //return '0';
            header('location: ../login');
        }
    }
    public function GetIP(){
        if(getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            if (strstr($ip, ',')) {
                $tmp = explode (',', $ip);
                $ip = trim($tmp[0]);
            }
        } else {
        $ip = getenv("REMOTE_ADDR");
        }
        return $ip;
    }
}