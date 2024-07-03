<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $result = 0;

        $this->db->where('username', $username);
        $this->db->where('password', $password);  // $this->db->where('password', $this->encrypt($password));
        
        // $query = $this->db->get('cms_users');

        $row = $query->row_array();
        if(isset($row)){
            $result = $row;
        }

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
   
}