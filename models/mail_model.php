<?php 
/**
* Mail Gönderme İşlemleri 
*/
class Mail_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function getMailSettings(){
    	return $this->db->select('SELECT * FROM settings WHERE userid = :userid', array('userid' => $_SESSION['userid']) ); 
    }
    public function personscontrol(){
        return $this->db->select("SELECT * FROM persons");
    }
}
?>