<?php 
/**
* Animasyonlu Kayan Menü İşlemleri 
*/
class Parallax_Model extends Model {
	
    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM parallax WHERE parallaxname = '."'".$data['parallaxname']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('parallax', array(
                'parallaxname'       => $data['parallaxname'],
                'initialleft'        => $data['initialleft'],
                'initialtop'         => $data['initialtop'],
                'finalleft'          => $data['finalleft'],
                'finaltop'           => $data['finaltop'],
                'duration'           => $data['duration'],
                'fadestart'          => $data['fadestart'],
                'continuousleft'     => $data['continuousleft'],
                'continuoustop'      => $data['continuoustop'],
                'continuousduration' => $data['continuousduration'],
                'continuouseasing'   => $data['continuouseasing'],
                'backgroundimage'    => $data['backgroundimage'],
                'width'              => $data['width'],
                'height'             => $data['height'],
                'rotate'             => $data['rotate'],
                'durationrotate'     => $data['durationrotate'],
                'delay'              => $data['delay'],
                'exitleft'           => $data['exitleft'],
                'exittop'            => $data['exittop'],
                'exitduration'       => $data['exitduration'],
                'exitdelay'          => $data['exitdelay'],
                'adddate'            => date('Y-m-d H:i:s'),
                'userid'             => $_SESSION['userid']
            ));
        }

    }
    public function parallaxList(){
        return $this->db->select('SELECT * FROM parallax WHERE userid = :userid', array('userid' => $_SESSION['userid']));
    }
    public function parallaxSingleList($parallax_id) {
        return $this->db->select('SELECT * FROM parallax WHERE userid = :userid AND parallax_id = :parallax_id', array('userid' => $_SESSION['userid'], 'parallax_id' => $parallax_id));
    }
    public function editSave($data) {
        $sql = 'SELECT * FROM parallax WHERE parallaxname = '."'".$data['parallaxname']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'parallaxname'       => $data['parallaxname'],
                'initialleft'        => $data['initialleft'],
                'initialtop'         => $data['initialtop'],
                'finalleft'          => $data['finalleft'],
                'finaltop'           => $data['finaltop'],
                'duration'           => $data['duration'],
                'fadestart'          => $data['fadestart'],
                'continuousleft'     => $data['continuousleft'],
                'continuoustop'      => $data['continuoustop'],
                'continuousduration' => $data['continuousduration'],
                'continuouseasing'   => $data['continuouseasing'],
                'backgroundimage'    => $data['backgroundimage'],
                'width'              => $data['width'],
                'height'             => $data['height'],
                'rotate'             => $data['rotate'],
                'durationrotate'     => $data['durationrotate'],
                'delay'              => $data['delay'],
                'exitleft'           => $data['exitleft'],
                'exittop'            => $data['exittop'],
                'exitduration'       => $data['exitduration'],
                'exitdelay'          => $data['exitdelay'],
                'adddate'            => date('Y-m-d H:i:s'),
                'userid'             => $_SESSION['userid']
            );
            $this->db->update('parallax', $postData, "`parallax_id` = '{$data['parallax_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $dfm = $this->db->select('SELECT * FROM parallax WHERE userid = :userid and parallax_id = :parallax_id', array('userid'    => $_SESSION['userid'], 'parallax_id' => $data ));
        $_SESSION['deletefilename'] = $dfm[0]['backgroundimage'];
        $this->db->delete('parallax', "`parallax_id` = '{$data}' AND userid = '{$_SESSION['userid']}'");
        unlink($_SESSION['deletefilename']);
    }
}
?>