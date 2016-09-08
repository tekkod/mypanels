<?php
/**
* Fotoğraf İşlemleri
*/
class Picture_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /*
    public function create($data)
    {
        foreach ($data['images'] as $value) {
            $value = $value.',';
            $value  = substr($value, 0,-1);
            $sonuc = $value;
            $this->db->insert('picture', array(
                //'category_id' => $data['category'],
                'picture' => $sonuc,
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            ));
        }

    }
    public function setcategory($data){
        $postData = array(
            'category_id'   => $data['category_id'],
            'picture'       => $data['images'],
            'adddate'       => date('Y-m-d H:i:s'),
            'userid'        => $_SESSION['userid']
        );
        $this->db->update('picture', $postData, "`picture_id` = '{$data['category_id']}' AND userid = '{$_SESSION['userid']}'");       
    }
    public function CategoryList() {
        
        return $this->db->select('SELECT * FROM category WHERE status=1 AND userid = :userid', array('userid' => $_SESSION['userid']));
    }
    */
}
?>