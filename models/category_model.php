<?php 
/**
* Kategori İşlemleri 
*/
class Category_Model extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function create($data){
        $sql = 'SELECT * FROM category WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('category', array(
                'name' => $data['name'],
                'status' => $data['status'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            ));
        }
    }
    public function CategoryList(){
        return $this->db->select('SELECT * FROM category WHERE userid = :userid',array('userid' => $_SESSION['userid']));
    }
    public function categorySingleList($category_id){
        return $this->db->select('SELECT * FROM category WHERE userid = :userid AND category_id = :category_id', 
            array('userid' => $_SESSION['userid'], 'category_id' => $category_id));
    }
    public function editSave($data){
        $sql = 'SELECT * FROM category WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'name' => $data['name'],
                'status' => $data['status'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            );
            $this->db->update('category', $postData, "`category_id` = '{$data['category_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data){
        $this->db->delete('category', "`category_id` = {$data} AND userid = '{$_SESSION['userid']}'");
    }
}
?>