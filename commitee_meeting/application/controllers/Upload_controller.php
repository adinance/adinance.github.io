<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Upload_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function custom_view() {
        $this->load->view('custom_view', array('msg' => ' '));
    }
    public function do_upload() {
        $config = array(
            'upload_path'   => "assets/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite'     => TRUE,
            // 'max_size'      => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            // 'max_height'    => "768",
            // 'max_width'     => "1024",
        );
        $this->load->library('upload', $config);

        echo '<pre>';
        var_dump($this->input->post());

        exit;

        if ( !$this->upload->do_upload('userfile')) {
            $data = array('msg' => $this->upload->display_errors()); 
            $this->load->view('custom_view', $data); 
        }else { 
            $data = $this->upload->data();
            // $data = array('msg' => $this->upload->data()); 

            echo '<pre>';
            var_dump($data);

            // array(14) {
            //     ["file_name"]=>
            //     string(53) "274707267_10160339571874298_5699557155789884071_n.jpg"
            //     ["file_type"]=>
            //     string(10) "image/jpeg"
            //     ["file_path"]=>
            //     string(40) "C:/xampp/htdocs/commitee_meeting/assets/"
            //     ["full_path"]=>
            //     string(93) "C:/xampp/htdocs/commitee_meeting/assets/274707267_10160339571874298_5699557155789884071_n.jpg"
            //     ["raw_name"]=>
            //     string(49) "274707267_10160339571874298_5699557155789884071_n"
            //     ["orig_name"]=>
            //     string(53) "274707267_10160339571874298_5699557155789884071_n.jpg"
            //     ["client_name"]=>
            //     string(53) "274707267_10160339571874298_5699557155789884071_n.jpg"
            //     ["file_ext"]=>
            //     string(4) ".jpg"
            //     ["file_size"]=>
            //     float(33.6)
            //     ["is_image"]=>
            //     bool(true)
            //     ["image_width"]=>
            //     int(1000)
            //     ["image_height"]=>
            //     int(1000)
            //     ["image_type"]=>
            //     string(4) "jpeg"
            //     ["image_size_str"]=>
            //     string(26) "width="1000" height="1000""
            //   }
            // $this->load->view('custom_view', $data); 
            // $this->load->view('upload_success', $data); 
        } 
        
        // if ($this->upload->do_upload()) {
        //     $data = array('upload_data' => $this->upload->data());
        //     $this->load->view('upload_success', $data);
        // } else {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('custom_view', $error);
        // }

        //fieldname is the form field name
        // foreach ($_FILES as $fieldname => $fileObject)  
        // {
        //     if (!empty($fileObject['userfile'])){
        //         $this->upload->initialize($config);
        //         if (!$this->upload->do_upload($fieldname)){
        //             $errors = $this->upload->display_errors();
        //             flashMsg($errors);
        //         }else{
        //             $data = array('upload_data' => $this->upload->data());
        //             // Code After Files Upload Success GOES HERE
        //             echo 'upload';
        //         }
        //     }
        // }
    }
}
?>
