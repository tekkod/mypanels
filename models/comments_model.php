<?php
/**
* Yorumlar İşlemleri
*/
class Comments_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM comments WHERE name = '."'".$data['comments']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('comments', array(
                'comments'      => $data['comments'],
                'name'          => $data['name'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            ));
        }

    }
    public function CommentsList() {
        return $this->db->select('SELECT * FROM comments WHERE userid = :userid', array('userid' => $_SESSION['userid']) );
    }
    public function commentsSingleList($comments_id) {
        return $this->db->select('SELECT * FROM comments WHERE userid = :userid AND comments_id = :comments_id',
            array('userid' => $_SESSION['userid'], 'comments_id' => $comments_id));
    }

    public function editSave($data) {
        $sql = 'SELECT * FROM comments WHERE announcement = '."'".$data['comments']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'comments'      => $data['comments'],
                'name'          => $data['name'],
                'confirm'       => $data['confirm'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            );
            $this->db->update('comments', $postData, "`comments_id` = '{$data['comments_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $this->db->delete('comments', "`comments_id` = {$data['comments_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>
