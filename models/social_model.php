<?php 
/**
* Sosyal Medya İşlemleri 
*/
class Social_Model extends Model
{
	
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM social WHERE facebook = '."'".$data['facebook']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('social', array(
                'facebook'      => $data['facebook'],
                'twitter'       => $data['twitter'],
                'googleplus'    => $data['googleplus'],
                'youtube'       => $data['youtube'],
                'linkedin'      => $data['linkedin'],
                'instagram'     => $data['instagram'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            ));
        }

    }
    public function SocialMediaList() {
        return $this->db->select('SELECT * FROM social WHERE userid = :userid', array('userid' => $_SESSION['userid']));
    }
    public function socialSingleList($social_id){
        return $this->db->select('SELECT * FROM social WHERE userid = :userid AND social_id = :social_id',array('userid' => $_SESSION['userid'], 'social_id' => $social_id));
    }
    public function editSave($data){
        $sql = 'SELECT * FROM social WHERE facebook = '."'".$data['facebook']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'facebook'      => $data['facebook'],
                'twitter'       => $data['twitter'],
                'googleplus'    => $data['googleplus'],
                'youtube'       => $data['youtube'],
                'linkedin'      => $data['linkedin'],
                'instagram'     => $data['instagram'],
                'adddate'       => date('Y-m-d H:i:s'),
                'userid'        => $_SESSION['userid']
            );
            $this->db->update('social', $postData, "`social_id` = '{$data['social_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data){
        $this->db->delete('social', "`social_id` = {$data['social_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>