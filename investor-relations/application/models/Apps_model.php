<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apps_model extends CI_Model {

    public function __construct() {
        parent::__construct();

		// table name
        $this->docs = 'ir_document';
    }

    public function get_file_by_configuration_id($id) {
        
		$this->db->select('*');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_annual_report_top_by_configuration_id($id) {

		$this->db->select('*');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
		$this->db->order_by('id', 'desc');
        $this->db->limit(1);
		$result = $this->db->get();
        return $result->result();

    }

    public function get_annual_report_list_by_configuration_id($id) {

        $year = date("Y");
        $previous_year = date("Y") - 1;
        
		$this->db->select('*');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
        $this->db->where('year >', '2013');
        $this->db->where_not_in('year', $year);
        $this->db->where_not_in('year', $previous_year);
		$this->db->order_by('year', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_news_rooms_by_configuration_id($id) {
        
		$this->db->select('*');
        $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
		$this->db->order_by('create_date', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_set_annnoucement_by_configuration_id($id) {
        
		$this->db->select('*');
        $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
        
		$this->db->order_by('create_date', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_year_by_configuration_id($id) {
        
		$this->db->select('year');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('configuration_id', $id);
        $this->db->group_by('year'); 
		$this->db->order_by('year', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_file_by_year_configuration_id($year, $id) {
        
		$this->db->select('*');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('year', $year);
        $this->db->where('configuration_id', $id);
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_file_by_year_quater_configuration_id($year, $quater, $id) {
        
		$this->db->select('*');
        // $this->db->select('DATE_FORMAT(create_date, "%d %M %Y") as date');
        $this->db->from($this->docs);
        $this->db->where('year >', '2013');
        $this->db->where('status', '1');
        $this->db->where('year', $year);
        $this->db->where('type', $quater);
        $this->db->where('configuration_id', $id);
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();
        return $result->row();

    }


    // public function get_row($id) {

	// 	$this->db->select('*');
    //     $this->db->from($this->docs);
    //     $this->db->where('id', $id);
	// 	$result = $this->db->get();
	// 	return $result->row();

    // }

    // public function insert($table, $data){
	// 	$result = $this->db->insert($table, $data);
	// 	return $result;
	// }

    // public function update($table, $data, $id){
    //     $result = $this->db->where('id', $id)->update($table, $data);
    //     return $result;
    // }

	// public function set_last_modified($table, $id){
    //     $datetime = date("Y-m-d H:i:s");
    //     $data = array(
    //         'last_modified' => $datetime
    //     );
    //     $result = $this->db->where('id', $id)->update($this->table, $data);
    //     return $result;
    // }

	// public function delete($table, $id)
	// {
	// 	$result = $this->db->delete($table, ['id' => $id]);
	// 	return $result;
	// }


}