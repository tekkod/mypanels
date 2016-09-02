<?php 
/**
* Alt Kategori İşlemleri 
*/
class SubCategory_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    public function CategoryList(){
        return $this->db->select('SELECT * FROM category');
    }
    public function create($data) {
        $sql = 'SELECT * FROM subcategory WHERE category_id='."'".$data['category_id']."'".' and name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('subcategory', array(
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'status' => $data['status'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            ));
        }
    }
    public function SubCategoryList(){
        return $this->db->select('SELECT c.name as cname ,sc.name as scname ,c.category_id,sc.subcategory_id,sc.status FROM category c LEFT JOIN subcategory sc ON sc.category_id=c.category_id WHERE sc.userid = :userid', array('userid' => $_SESSION['userid']));
    }
    public function subcategorySingleList($subcategory_id){
        return $this->db->select('SELECT * FROM subcategory WHERE userid = :userid AND subcategory_id = :subcategory_id', 
            array('userid' => $_SESSION['userid'], 'subcategory_id' => $subcategory_id));
    }
    public function editSave($data){
        $sql = 'SELECT * FROM subcategory WHERE category_id='."'".$data['category_id']."'".' and name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'status' => $data['status'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            );
            $this->db->update('subcategory', $postData, "`subcategory_id` = '{$data['subcategory_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data){
        $this->db->delete('subcategory', "`subcategory_id` = {$data['subcategory_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>