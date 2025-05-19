<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

    public $user;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data         = array();
        $this->user         = $this->authen->permission();
        $this->data['user'] = $this->user;
    }

    public function index() {
        $this->docs_list();
    }

    public function docs_list() {
        $this->data['docs'] = $this->apps->get_all();

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('apps/docs_list', $this->data);
        $this->load->view('apps/footer', $this->data);
    }


    public function documents($category_id = '0') {

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);

        switch ($this->user['permission']) {
            case 1:
                $category_id = 3;
                break;
            case 2: // BOD
                $category_id = 2;
                break;
            case 3: // AC
                $category_id = 1;
                break;
            case 4:
                $category_id = 3;
                break;
            case 5:
                $category_id = 3;
                break;
            default:
                //code block
        }

      
        $this->data['result'] = $this->apps->get_active_documents_by_category($category_id);

        $this->load->view('apps/documentation/index', $this->data);

        $this->load->view('apps/footer', $this->data);
    }

    public function docs($id) {
        $this->data['docs']        = $this->apps->get_row($id);
        $this->data['url']         = $this->data['docs']->url;
        $this->data['name']        = $this->data['docs']->name;
        $this->data['description'] = $this->data['docs']->description;

        $this->load->view('apps/docs_view', $this->data);
    }

    public function docs_form() {
        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('apps/docs_form', $this->data);
        $this->load->view('apps/footer', $this->data);
    }

    public function docs_edit($id) {
        $this->data['docs']        = $this->apps->get_row($id);
        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('apps/documents/form', $this->data);
        $this->load->view('apps/footer', $this->data);
    }

    public function insert() {

        $data = array(
            'name' => $this->input->post('name'),
            'source'  => $this->input->post('source'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('date'),
            'sort' => $this->input->post('sort'),
            'actived' => $this->input->post('actived'),
            'modified_date' => date("Y-m-d H:i:s"),
            'modified_by' => $this->session->id
        );

        $id = $this->apps->insert('cm_documents', $data);

        if($this->db->affected_rows() > 0){

            $this->data['docs'] = $this->apps->get_all();

            $this->data['swal'] = $this->swal->insert_success();
            $this->load->view('apps/header', $this->data);
            $this->load->view('swal', $this->data);
            $this->load->view('apps/menu', $this->data);
            $this->load->view('apps/docs_list', $this->data);
            $this->load->view('apps/footer', $this->data);

        }else{

            $this->data['docs'] = $this->apps->get_all();

            $this->data['swal'] = $this->swal->insert_fail();
            $this->load->view('apps/header', $this->data);
            $this->load->view('swal', $this->data);
            $this->load->view('apps/menu', $this->data);
            $this->load->view('apps/docs_form', $this->data);
            $this->load->view('apps/footer', $this->data);

        }



        
    }

    public function edit($id) {

        $data = array(
            'name' => $this->input->post('name'),
            'source'  => $this->input->post('source'),
            'description' => $this->input->post('description'),
            'sort' => $this->input->post('sort'),
            'actived' => $this->input->post('actived'),
            'modified_date' => date("Y-m-d H:i:s"),
            'modified_by' => $this->session->id
        );

        // echo '<pre>';
        // var_dump($data);

        // exit;

        $this->apps->update('cm_documents', $data, $id);

        if($this->db->affected_rows() > 0){
            $this->data['swal'] = $this->swal->edit_success();

        }else{
            $this->data['swal'] = $this->swal->edit_fail();

        }

        $this->data['docs']        = $this->apps->get_row($id);
        $this->load->view('apps/header', $this->data);
        $this->load->view('swal', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('apps/documents/form', $this->data);
        $this->load->view('apps/footer', $this->data);
       
    }


    public function preview($id = '0') {
        $this->data['url']        = $this->apps->get_row($id)->source;
        $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/preview', $this->data);
    }

}
