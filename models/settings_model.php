<?php
/**
* Site Ayarları
*/
class Settings_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    public function create($data) {
        $sql = 'SELECT * FROM settings WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $this->db->insert('settings', array(
                'title'             => $data['title'],
                'description'       => $data['description'],
                'keyword'           => $data['keyword'],
                'googleanalytics'   => $data['googleanalytics'],
                'googlemaps'        => $data['googlemaps'],
                'logo'              => $data['logo'],
                'name'              => $data['name'],
                'phone'             => $data['phone'],
                'fax'               => $data['fax'],
                'email'             => $data['email'],
                'adress'            => $data['adress'],
                'siteemail'         => $data['siteemail'],
                'siteemailpassword' => $data['siteemailpassword'],
                'siteemailhost'     => $data['siteemailhost'],
                'siteemailport'     => $data['siteemailport'],
                'yandexmetrica'     => $data['yandexmetrica'],
                'adddate'           => date('Y-m-d H:i:s'),
                'userid'            => $_SESSION['userid']
            ));
        }
    }
    public function SettingsList() {
        return $this->db->select('SELECT * FROM settings WHERE userid = :userid', array('userid' => $_SESSION['userid']));
    }
    public function GetDefineTheme() {
        $result = $this->db->select('select lcase(define) as define from define where define_code = 4 limit 1');
        foreach($result as $key => $value) {
            $result = $value['define'];
        }
        return $result;
    }
    public function settingsSingleList($settings_id) {
        return $this->db->select('SELECT * FROM settings WHERE userid = :userid AND settings_id = :settings_id',
            array('userid' => $_SESSION['userid'], 'settings_id' => $settings_id));
    }
    public function editSave($data) {
        $sql = 'SELECT * FROM settings WHERE name = '."'".$data['name']."'";
        $res = $this->db->query($sql);
        if ($res->fetchColumn() > 0) {
            return "0";
        }else{
            $postData = array(
                'title'             => $data['title'],
                'description'       => $data['description'],
                'keyword'           => $data['keyword'],
                'googleanalytics'   => $data['googleanalytics'],
                'googlemaps'        => $data['googlemaps'],
                'logo'              => $data['logo'],
                'name'              => $data['name'],
                'phone'             => $data['phone'],
                'fax'               => $data['fax'],
                'email'             => $data['email'],
                'adress'            => $data['adress'],
                'siteemail'         => $data['siteemail'],
                'siteemailpassword' => $data['siteemailpassword'],
                'siteemailhost'     => $data['siteemailhost'],
                'siteemailport'     => $data['siteemailport'],
                'yandexmetrica'     => $data['yandexmetrica'],
                'adddate'           => date('Y-m-d H:i:s'),
                'userid'            => $_SESSION['userid']
            );
            $this->db->update('settings', $postData, "`settings_id` = '{$data['settings_id']}' AND userid = '{$_SESSION['userid']}'");
        }
    }
    public function delete($data) {
        $this->db->delete('settings', "`settings_id` = {$data['settings_id']} AND userid = '{$_SESSION['userid']}'");
    }
}
?>
