<?php 
/**
* Haber İşlemleri 
*/
class News_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function CategoryList() {
        return $this->db->select('SELECT * FROM category WHERE userid = :userid', array('userid' => $_SESSION['userid']));
    }    
    public function create($data) {
        $this->db->insert('news', array(
            'category_id'   => $data['category'],
            'type'          => $data['type'],
            'source'        => $data['source'],
            'news'          => $data['news'],
            'order'         => $data['order'],
            'image'         => $data['image'],
            'description'   => $data['description'],
            'status'        => $data['status'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        ));
    }
    public function NewsList() {
        return $this->db->select('SELECT * FROM news n LEFT JOIN define d ON n.type=d.define_id WHERE userid = :userid', array('userid' => $_SESSION['userid']) );
    }
    public function NewsTypeList() {
        return $this->db->select('SELECT d.define_id,d.define FROM define d WHERE define_code=5');
    }
    public function SourceList() {
        return $this->db->select('SELECT d.define_id,d.define FROM define d WHERE define_code=6');
    }
    public function newsSingleList($news_id) {
        return $this->db->select('SELECT * FROM news WHERE userid = :userid AND news_id = :news_id', 
            array('userid' => $_SESSION['userid'], 'news_id' => $news_id));
    }
    public function editSave($data) {
        $postData = array(
            'category_id'   => $data['category'],
            'type'          => $data['type'],
            'source'        => $data['source'],
            'news'          => $data['news'],
            'order'         => $data['order'],
            'image'         => $data['image'],
            'description'   => $data['description'],
            'status'        => $data['status'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        $this->db->update('news', $postData, "`news_id` = '{$data['news_id']}' AND userid = '{$_SESSION['userid']}'");
    }
    public function delete($data) {
        $this->db->delete('news', "`news_id` = {$data['news_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>