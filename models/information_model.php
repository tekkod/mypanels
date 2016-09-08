<?php 
/**
* Bilgi Sayfaları İşlemleri 
*/
class Information_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM information WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('information', array(
                'name' => $data['name'],
                'detay' => $data['detay'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            ));
        }
    }
    public function InformationList() {
        return $this->db->select('SELECT * FROM information WHERE userid = :userid', array('userid' => $_SESSION['userid']) );
    }
    public function informationSingleList($information_id) {
        return $this->db->select('SELECT * FROM information WHERE userid = :userid AND information_id = :information_id', 
            array('userid' => $_SESSION['userid'], 'information_id' => $information_id));
    }

    public function editSave($data) {

        $sql = 'SELECT * FROM information WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'name' => $data['name'],
                'detay' => $data['detay'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            );
            $this->db->update('information', $postData, "`information_id` = '{$data['information_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $this->db->delete('information', "`information_id` = {$data['information_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>