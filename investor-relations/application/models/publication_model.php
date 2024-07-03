<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Publication_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_tb_annual_report() {
        $query = "SELECT * FROM tb_annual_report ORDER BY year DESC LIMIT 1";
        return $this->db->query($query)->result();
    }

    public function get_tb_annual_report_all() {
        $query = "SELECT * FROM tb_annual_report WHERE Year NOT IN (SELECT max(Year) FROM `tb_annual_report`) ORDER BY year desc";
        return $this->db->query($query)->result();
    }

    public function get_tb_analyst_coverage() {
        $query = "SELECT * FROM tb_analyst_coverage ORDER BY id asc";
        return $this->db->query($query)->result();
    }

    public function get_tb_company_factsheet() {
        $query = "SELECT * FROM tb_company_factsheet ORDER BY id desc";
        return $this->db->query($query)->result();
    }

    public function get_tb_pre_webcast() {
        $query = "SELECT * FROM tb_presentation_webcast ORDER BY year desc,order_no asc";
        return $this->db->query($query)->result();
    }

    public function get_tb_pre_byid($id) {
        $query = "SELECT * FROM tb_presentation_webcast WHERE year = $id ORDER BY order_no asc";
        return $this->db->query($query)->result();
    }
    
    public function get_tb_pre_year() {
        $query = "SELECT year FROM tb_presentation_webcast GROUP BY year ORDER BY year desc";
        return $this->db->query($query)->result();
    }
   
}