<?php defined('BASEPATH') OR exit('No direct script access allowed');

class shareholder_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_tb_major_shareholder() {
        $query = "SELECT * FROM tb_major_shareholder WHERE id <= 5 ORDER BY order_no asc";
        return $this->db->query($query)->result();
    }

    public function get_tb_major_shareholder_all() {
        $query = "SELECT * FROM tb_major_shareholder ORDER BY order_no asc";
        return $this->db->query($query)->result();
    }

    public function get_tb_financial_statement () {
        $query = "SELECT main.year,(select sub.file_name FROM tb_financial_statement sub WHERE sub.`year` = main.`year` AND sub.quarter = 1) AS q1
        ,(SELECT sub.file_name FROM tb_financial_statement sub WHERE sub.`year` = main.`year` AND sub.quarter = 2) AS q2
        ,(SELECT sub.file_name FROM tb_financial_statement sub WHERE sub.`year` = main.`year` AND sub.quarter = 3) AS q3
        ,(SELECT sub.file_name FROM tb_financial_statement sub WHERE sub.`year` = main.`year` AND sub.quarter = 4) AS q4
        FROM tb_financial_statement main
        GROUP BY main.year
        ORDER BY main.year desc";
        return $this->db->query($query)->result();
    }

    public function get_tb_dividen_policy () {
        $query = "SELECT * FROM tb_dividen_policy";
        return $this->db->query($query)->result();
    }

    public function get_tb_invitation () {
        $query = "SELECT main.year,(select sub.file_name FROM tb_invitation sub WHERE sub.`year` = main.`year` AND sub.quarter = 1) AS q1
        ,(SELECT sub.file_name FROM tb_invitation sub WHERE sub.`year` = main.`year` AND sub.quarter = 2) AS q2
        ,(SELECT sub.file_name FROM tb_invitation sub WHERE sub.`year` = main.`year` AND sub.quarter = 3) AS q3
        ,(SELECT sub.file_name FROM tb_invitation sub WHERE sub.`year` = main.`year` AND sub.quarter = 4) AS q4
        FROM tb_invitation main
        GROUP BY main.year
        ORDER BY main.year desc";
        return $this->db->query($query)->result();
    }

    public function get_tb_resolutions () {
        $query = "SELECT main.year,(select sub.file_name FROM tb_resolutions sub WHERE sub.`year` = main.`year` AND sub.quarter = 1) AS q1
        ,(SELECT sub.file_name FROM tb_resolutions sub WHERE sub.`year` = main.`year` AND sub.quarter = 2) AS q2
        ,(SELECT sub.file_name FROM tb_resolutions sub WHERE sub.`year` = main.`year` AND sub.quarter = 3) AS q3
        ,(SELECT sub.file_name FROM tb_resolutions sub WHERE sub.`year` = main.`year` AND sub.quarter = 4) AS q4
        FROM tb_resolutions main
        GROUP BY main.year
        ORDER BY main.year desc";
        return $this->db->query($query)->result();
    }

    public function get_tb_minute_annaul_general () {
        $query = "SELECT main.year,(select sub.file_name FROM tb_minute_annaul_general sub WHERE sub.`year` = main.`year` AND sub.quarter = 1) AS q1
        ,(SELECT sub.file_name FROM tb_minute_annaul_general sub WHERE sub.`year` = main.`year` AND sub.quarter = 2) AS q2
        ,(SELECT sub.file_name FROM tb_minute_annaul_general sub WHERE sub.`year` = main.`year` AND sub.quarter = 3) AS q3
        ,(SELECT sub.file_name FROM tb_minute_annaul_general sub WHERE sub.`year` = main.`year` AND sub.quarter = 4) AS q4
        FROM tb_minute_annaul_general main
        GROUP BY main.year
        ORDER BY main.year desc";
        return $this->db->query($query)->result();
    }

   
}