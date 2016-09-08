<?php 
/**
* Slider İşlemleri 
*/
class Slider_Model extends Model {
	
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM slider WHERE slidername = '."'".$data['slidername']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('slider', array(
                'slider'     => $data['slider'],
                'slidername' => $data['slidername'],
                'adddate'    => date('Y-m-d H:i:s'),
                'userid'     => $_SESSION['userid']
            ));
        }
    }
    public function SliderList(){
        return $this->db->select('SELECT * FROM slider WHERE userid = :userid', 
                array('userid' => $_SESSION['userid']));
    }
    public function sliderSingleList($slider_id) {
        return $this->db->select('SELECT * FROM slider WHERE userid = :userid AND slider_id = :slider_id', 
            array('userid' => $_SESSION['userid'], 'slider_id' => $slider_id));
    }
    public function editSave($data) {
        $sql = 'SELECT * FROM slider WHERE slidername = '."'".$data['slidername']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'slider' => $data['slider'],
                'slidername' => $data['slidername'],
                'adddate' => date('Y-m-d H:i:s'),
                'userid' => $_SESSION['userid']
            );
            $this->db->update('slider', $postData, "`slider_id` = '{$data['slider_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $dfm = $this->db->select('SELECT * FROM slider WHERE userid = :userid and slider_id = :slider_id', array('userid'    => $_SESSION['userid'], 'slider_id' => $data ));
        $_SESSION['deletefilename'] = DIRECTORY.'/'.$dfm[0]['slider'];
        $this->db->delete('slider', "`slider_id` = '{$data}' AND userid = '{$_SESSION['userid']}'");
        unlink($_SESSION['deletefilename']);
    }
}
?>