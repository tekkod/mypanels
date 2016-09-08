<?php 
/**
* Etkinlikler İşlemleri 
*/
class Activities_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM activities WHERE title = '."'".$data['title']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('activities', array(
                'title'       => $data['title'],
                'location'    => $data['location'],
                'category'    => $data['category'],
                'start'       => $data['start'],
                'description' => $data['description'],
                'adddate'     => date('Y-m-d H:i:s'),
                'userid'      => $_SESSION['userid']
            ));
        }

    }
    public function activitiesList() {
        return $this->db->select('SELECT *,c.name as categoryname FROM activities a LEFT JOIN category c on a.category = c.category_id WHERE c.status=1 and a.userid = :userid', 
                array('userid' => $_SESSION['userid']));
    }
    public function CategoryList() {
        return $this->db->select('SELECT * FROM category WHERE status=1 and userid = :userid', array('userid' => $_SESSION['userid']));
    }
    public function activitiesSingleList($activities_id) {
        return $this->db->select('SELECT * FROM activities WHERE userid = :userid AND activities_id = :activities_id', 
            array('userid' => $_SESSION['userid'], 'activities_id' => $activities_id));
    }
    public function editSave($data) {
        $sql = 'SELECT * FROM activities WHERE title = '."'".$data['title']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'title'       => $data['title'],
                'location'    => $data['location'],
                'category'    => $data['category'],
                'start'       => $data['start'],
                'description' => $data['description'],
                'adddate'     => date('Y-m-d H:i:s'),
                'userid'      => $_SESSION['userid']
            );
            $this->db->update('activities', $postData, "`activities_id` = '{$data['activities_id']}' AND userid = '{$_SESSION['userid']}'");
        }

    }
    public function delete($data) {
        $this->db->delete('activities', "`activities_id` = {$data['activities_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>