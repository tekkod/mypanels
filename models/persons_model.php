<?php 
/**
* Kişiler İşlemleri 
*/
class Persons_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM persons WHERE email = '."'".$data['email']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('persons', array(
                'fullname'   => $data['fullname'],
                'company'    => $data['company'],
                'email'      => $data['email'],
                'phone'      => $data['phone'],
                'adress'     => $data['adress'],
                'other'      => $data['other'],
                'adddate'    => date('Y-m-d H:i:s'),
                'userid'     => $_SESSION['userid']
            ));
        }
    }
    public function personsList() {
        return $this->db->select('SELECT * FROM persons WHERE userid = :userid', 
                array('userid' => $_SESSION['userid']));
    }
    public function personsSingleList($persons_id) {
        return $this->db->select('SELECT * FROM persons WHERE userid = :userid AND persons_id = :persons_id', 
            array('userid' => $_SESSION['userid'], 'persons_id' => $persons_id));
    }
    public function editSave($data) {
        $sql = 'SELECT * FROM persons WHERE email = '."'".$data['email']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'fullname'   => $data['fullname'],
                'company'    => $data['company'],
                'email'      => $data['email'],
                'phone'      => $data['phone'],
                'adress'     => $data['adress'],
                'other'      => $data['other'],
                'adddate'    => date('Y-m-d H:i:s'),
                'userid'     => $_SESSION['userid']
            );
            $this->db->update('persons', $postData, "`persons_id` = '{$data['persons_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $this->db->delete('persons', "`persons_id` = {$data['persons_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>