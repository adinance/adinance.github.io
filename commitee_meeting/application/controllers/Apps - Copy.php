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

    public function thumbnail($pic) {
        $arr = explode('|', $pic);
        return $arr;
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

    public function docs_form() {
        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('apps/docs_form', $this->data);
        $this->load->view('apps/footer', $this->data);
    }

    public function docs_insert() {

        $this->utility->preprint($this->input->post());

        // $files = NULL;
        // $filesArray = $this->input->post('files');
        // $num = sizeof($filesArray);

        // for($i=0; $i<$num; $i++){
        //     $this->do_upload($filesArray[$i]);
        //     if($num-$i==1){
        //         $files = $files . $filesArray[$i];
        //     }else{
        //         $files = $files . $filesArray[$i] . '|';
        //     }

        // }

        // $data = array(
        //         'name' => $this->input->post('name'),
        //         'files' => $files,
        //         'priority' => $this->input->post('priority')
        // );

        // $this->db->insert('cm_documents', $data);

        $this->do_upload('files[]');

        // $config['upload_path']          = 'assets/uploads/files';
        // $config['allowed_types']        = 'gif|jpg|png';
        // // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // // $config['max_height']           = 768;

        // $this->load->library('upload', $config);

        // if ( ! $this->upload->do_upload('files')){
        //         $error = array('error' => $this->upload->display_errors());

        //         // $this->load->view('upload_form', $error);
        //         echo $error;
        // }else{
        //         $data = array('upload_data' => $this->upload->data());

        //         // $this->load->view('upload_success', $data);
        //         echo success;
        // }

        //str_replace('|', '<br>', $this->data['docs']->files);
        // $this->data['docs'] = $this->apps->get_all();
        // $this->load->view('apps/header', $this->data);
        // $this->load->view('apps/menu', $this->data);
        // $this->load->view('apps/docs_list', $this->data);
        // $this->load->view('apps/footer', $this->data);
    }

    public function uploadImage() {

        $data = [];

        $count = count($_FILES['files']['name']);

        for ($i = 0; $i < $count; $i++) {

            if (!empty($_FILES['files']['name'][$i])) {

                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                $config['upload_path']   = 'assets/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
                //  $config['max_size']      = '5000';
                $config['file_name'] = 'img_' . $i;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $filename   = $uploadData['file_name'];

                    $data['totalFiles'][] = $filename;
                }
            }

        }

        $this->load->view('imageUploadForm', $data);
    }

    public function do_upload() {
        $config['upload_path']   = 'assets/uploads/files';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']             = 100;
        $config['max_width'] = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('files[]')) {
            $error = array('error' => $this->upload->display_errors());

            // $this->load->view('upload_form', $error);
            var_dump($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            // $this->load->view('upload_success', $data);
            echo 'success';
        }
    }

    public function docs($id) {

        $this->data['docs'] = $this->apps->get_row($id);
        $this->data['src']  = $this->thumbnail($this->data['docs']->files);

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/docs_view', $this->data);
        // $this->load->view('apps/footer', $this->data);
    }

    // public function image() {

    //     $data = array();

    //     $this->load->view('apps/sample_image', $data);
    // }

    // public function pdf() {

    //     $data = array();

    //     $this->load->view('apps/sample_pdf', $data);
    // }

    public function sample($id) {

        $data = array();
        if ($id == 1) {
            $this->load->view('apps/sample_1', $data);
        }

        if ($id == 2) {
            $this->load->view('apps/sample_2', $data);
        }

        if ($id == 3) {
            $this->load->view('apps/sample_3', $data);
        }

        if ($id == 4) {
            $this->load->view('apps/sample_4', $data);
        }

    }

    public function debug() {
        $data = array();
        $this->load->view('apps/default', $data);
    }

}
