<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apps_model extends CI_Model {

    public function __construct() {
        parent::__construct();

		// table name
        $this->docs = 'cm_documents';
		$this->user = 'cm_users';
    }

    public function get_documents() {

        $result = $this->db->query('
			SELECT
				cm_documents.id,
				-- cm_documents.actived,
				cm_documents.name as documents,
				cm_documents.source,
				cm_categories.category,
				-- cm_documents.description,
				cm_documents.sort,
				cm_documents.date,
				cm_documents.actived,
			-- 	cm_documents.modified_by,
				cm_documents.modified_date,
			-- 	cm_users.id,
				cm_users.name AS modified_by -- ,
				-- cm_permissions.permission 
			FROM
				cm_documents
				INNER JOIN cm_categories ON cm_categories.id = cm_documents.category_id
				INNER JOIN cm_users ON cm_documents.modified_by = cm_users.id
				INNER JOIN cm_permissions ON cm_users.permission = cm_permissions.id
				
				
			order by cm_documents.sort asc
	

        ');
      
        return $result->result();

    }

	public function get_documents_by_date() {

        $result = $this->db->query('
			SELECT
				cm_documents.id,
				-- cm_documents.actived,
				cm_documents.name as documents,
				cm_documents.source,
				cm_categories.category,
				-- cm_documents.description,
				-- cm_documents.sort,
				cm_documents.date,
			-- 	cm_documents.modified_by,
				cm_documents.modified_date,
			-- 	cm_users.id,
				cm_users.name AS modified_by -- ,
				-- cm_permissions.permission 
			FROM
				cm_documents
				INNER JOIN cm_categories ON cm_categories.id = cm_documents.category_id
				INNER JOIN cm_users ON cm_documents.modified_by = cm_users.id
				INNER JOIN cm_permissions ON cm_users.permission = cm_permissions.id
				
				WHERE cm_documents.actived = 1

				order by cm_documents.sort asc
	

        ');
      
        return $result->result();

    }


	public function get_active_documents_by_category($category_id = 0) {

		$where = '';
		if($category_id == 1 || $category_id == 2) {
			$where = ' and (cm_documents.category_id = ' . $category_id . ' or cm_documents.category_id = 3)'; 
		}

		if($category_id == 3) {
			$where = '';
		}


        $result = $this->db->query('
		SELECT
			cm_documents.id,
			-- cm_documents.actived,
			cm_documents.name as documents,
			cm_documents.source
		--	cm_categories.category
			-- cm_documents.description,
			-- cm_documents.sort,
		--	cm_documents.date,
		-- 	cm_documents.modified_by,
		--	cm_documents.modified_date,
		-- 	cm_users.id,
		--	cm_users.name AS modified_by -- ,
			-- cm_permissions.permission 
		FROM
			cm_documents
			INNER JOIN cm_categories ON cm_categories.id = cm_documents.category_id
			INNER JOIN cm_users ON cm_documents.modified_by = cm_users.id
			INNER JOIN cm_permissions ON cm_users.permission = cm_permissions.id
			
			WHERE cm_documents.actived = 1

			' . $where . '
	
			order by cm_documents.sort asc

        ');
      
        return $result->result();

    }


    public function get_all() {
        
		$this->db->select('*');
        $this->db->from($this->docs);
        if($this->session->id == 2){
            $this->db->where('actived', '1');
        }else{
            $value = array('1', '0');
            $this->db->where_in('actived', $value);
        }
		$this->db->order_by('sort', 'asc');
		// $this->db->order_by('id', 'desc');
		$result = $this->db->get();
        return $result->result();

    }

    public function get_row($id) {

		$this->db->select('*');
        $this->db->from($this->docs);
        $this->db->where('id', $id);
		$result = $this->db->get();
		return $result->row();

    }

    public function insert($table, $data){
		$result = $this->db->insert($table, $data);
		return $result;
	}

    public function update($table, $data, $id){
        $result = $this->db->where('id', $id)->update($table, $data);
        return $result;
    }

	public function set_last_modified($table, $id){
        $datetime = date("Y-m-d H:i:s");
        $data = array(
            'last_modified' => $datetime
        );
        $result = $this->db->where('id', $id)->update($this->table, $data);
        return $result;
    }

	// public function delete($table, $id)
	// {
	// 	$result = $this->db->delete($table, ['id' => $id]);
	// 	return $result;
	// }

	// public function get_records($table)
	// {
	// 	$result = $this->db->get($table)->result();
	// 	return $result;
	// }


}