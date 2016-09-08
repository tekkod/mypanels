<?php 
/**
* Duyuru İşlemleri 
*/
class Announcement_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM announcement WHERE announcement = '."'".$data['announcement']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('announcement', array(
                'announcement'  => $data['announcement'],
                'order'         => $data['order'],
                'image'         => $data['image'],
                'description'   => $data['description'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            ));
        }
    }
    public function announcementList() {
        return $this->db->select('SELECT * FROM announcement WHERE userid = :userid', array('userid' => $_SESSION['userid']) );
    }
    public function announcementSingleList($announcement_id) {
        return $this->db->select('SELECT * FROM announcement WHERE userid = :userid AND announcement_id = :announcement_id', 
            array('userid' => $_SESSION['userid'], 'announcement_id' => $announcement_id));
    }

    public function editSave($data) {
        $sql = 'SELECT * FROM announcement WHERE announcement = '."'".$data['announcement']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'announcement'  => $data['announcement'],
                'order'         => $data['order'],
                'image'         => $data['image'],
                'description'   => $data['description'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            );
            $this->db->update('announcement', $postData, "`announcement_id` = '{$data['announcement_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $this->db->delete('announcement', "`announcement_id` = {$data['announcement_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>