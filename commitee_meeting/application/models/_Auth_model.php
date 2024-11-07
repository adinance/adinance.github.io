<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public $table;

    public function __construct() {
        parent::__construct();
        $this->table = 'cm_users'; 
        $this->logs = 'cm_logs'; 
    }

    public function login($username, $password) {
        $result = 0;

        $this->db->where('username', $username);
        $this->db->where('password', $this->encrypt($password));
        $this->db->where('actived', 1);
        
        $query = $this->db->get('cm_users');

        $row = $query->row_array();
        if(isset($row)){
            $result = $row;
        }

        return $result;
    }

    public function set_last_login($id){
        $datetime = date("Y-m-d H:i:s");
        $data = array(
            'last_login' => $datetime
        );
        $result = $this->db->where('id', $id)->update($this->table, $data);
        return $result;
    }

    public function set_last_logout($id){
        $datetime = date("Y-m-d H:i:s");
        $data = array(
            'last_logout' => $datetime
        );
        $result = $this->db->where('id', $id)->update($this->table, $data);
        return $result;
    }


    public function encrypt($password) {
        return md5($password);
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('cms_users');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function insert_access_logs($logs){

        // $data = array(
        //         'source_ip' => $source,
        //         'destination_ip' => $desc,
        //         'username' => $user,
        //         'user_agent' => $ua,
        //         'action' => $action
        // );
    
    $this->db->insert($this->logs, $logs);

    }

   
}