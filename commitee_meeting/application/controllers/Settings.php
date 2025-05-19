<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public $user;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data         = array();
        $this->user         = $this->authen->permission();
        $this->data['user'] = $this->user;
    }

    public function index() {
        $this->document();
    }

      public function document($category_id = '0') {

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        
        $this->data['result'] = $this->apps->get_documents();
        $this->load->view('settings/document/index', $this->data);
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
        $this->load->view('apps/preview', $this->data);
    }




    public function d($pass) {
       echo '
       
       <script src="//localhost/commitee_meeting/assets/js/core.js"></script>
    <script src="//localhost/commitee_meeting/assets/js/md5.js"></script>

  <script>
    var md5Hash = CryptoJS.MD5("User#24");

    console.log(md5Hash.toString());

    // var md5Text = CryptoJS.AES.decrypt(openSSLEncrypted, md5Hash.toString());

    // console.log(md5Text.toString());

    var encrypted = CryptoJS.DES.encrypt("Message", "Secret Passphrase");
​
    var decrypted = CryptoJS.DES.decrypt(encrypted, "Secret Passphrase");
  </script>
       
       
       ';
    }


    public function dev(){
        $from_email = "email@example.com";
        $to_email = "adinance@gmail.com";//$this->input->post('email');
        //Load email library

        // $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = '';
        $config['smtp_pass'] = '';
        $config['smtp_port'] = 587;
        $config['smtp_timeout'] = "";
        $config['mailtype']     = "html";
        $config['charset']      = "iso-8859-1";
        $config['newline']      = "\r\n";
        $config['wordwrap']     = TRUE;
        $config['validate']     = FALSE;
        // $this->email->initialize($config);
        // $this->email->set_newline("\r\n");



   
    $this->load->library('email', $config); // intializing email library, whitch is defiend in system

    $this->email->set_newline("\r\n"); // comuplsory line attechment because codeIgniter interacts with the SMTP server with regards to line break

        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        // $this->load->view('contact_email_form');

        echo $this->email->print_debugger();
    } 

}
