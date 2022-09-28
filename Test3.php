<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Test extends CI_Controller {

    private $DBWP;
    private $arr_day_th = array(
        "Sun" => "อาทิตย์",
        "Sat" => "เสาร์",
        "Mon" => "จันทร์",
        "Tue" => "อังคาร",
        "Wed" => "พุธ",
        "Thu" => "พฤหัสบดี",
        "Fri" => "ศุกร์",
    );

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('app_frm_model');
        $this->load->model('personality_model');
    }

    public function index() {

    }

    public function clrss() {
        if ($this->session->has_userdata('user_ss')) {
            echo "has_userdata user_ss";
            $this->session->unset_userdata('user_ss');
            $this->session->sess_destroy();
        } else {
            echo "no has_userdata user_ss";
        }
    }

    public function send_mail() {

        $this->load->library('email');

        $this->email->from('sermchon.y@cmo-group.com', 'Sermchon Yanayarat');
        $this->email->to('insidexiii@gmail.com');
        $this->email->cc('insidexiii@gmail.com,sermchon.y@cmo-group.com');
        $this->email->bcc('insidexiii@gmail.com,sermchon.y@cmo-group.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
        echo "<hr/>";

        echo $this->email->print_debugger();
    }

    public function dashboard_mail() {

    }

    public function send_email2() {
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sermchon.y@cmo-group.com',
            'smtp_pass' => 'aonaonAAA03s.',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1',
        );

        $this->load->library('email', $config);

        $this->email->from('sermchon.y@cmo-group.com', 'Ysermchon.y');
        $this->email->to('insidexiii@gmail.com');

        $this->email->cc('insidexiii@gmail.com,sermchon.y@cmo-group.com');
        $this->email->bcc('insidexiii@gmail.com,sermchon.y@cmo-group.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
        echo $this->email->print_debugger();
    }

    public function set_ss() {

    }

    public function get_ss() {

    }

    public function cls_ss() {

    }

    public function realdb() {

        $DBWP      = $this->load->database('db_wp_real', TRUE);
        $query     = $DBWP->query('select * from wp_users ');
        $resultArr = $query->result_array();
        for ($cnt = 0; $cnt < count($resultArr); $cnt++) {
            /*
            if ($resultArr[$cnt]["user_login"] == "HR1") {
            echo "ID = " . $resultArr[$cnt]["ID"];
            echo " , ";
            echo "user_login = " . $resultArr[$cnt]["user_login"];
            echo " , ";
            echo "user_pass = " . $resultArr[$cnt]["user_pass"];
            echo "<hr/>";
            }
             */
            /*
        echo "ID = " . $resultArr[$cnt]["ID"];
        echo " , ";
        echo "user_login = " . $resultArr[$cnt]["user_login"];
        echo " , ";
        //echo "user_pass = " . $resultArr[$cnt]["user_pass"];
        echo "<hr/>";
         */
        }

        echo "<hr/>";
        echo $this->get_jobs();
    }

    private function get_jobs() {

        $str = "SELECT ";
        $str .= " wp_p.*  ";
        $str .= " ,wp_pm.meta_value ";
        $str .= " ,wp_us.display_name ";
        $str .= " FROM wp_posts as wp_p ";
        $str .= " left join wp_postmeta as wp_pm on wp_pm.post_id = wp_p.id ";
        $str .= " left join wp_users as wp_us on wp_us.id = wp_p.post_author ";
        $str .= " WHERE 1=1  ";
        $str .= " and wp_p.post_type = 'jobs'         ";
        $str .= " and wp_p.post_status = 'publish'  ";
        $str .= " and wp_pm.meta_key = 'cs_job_status'  ";
        $str .= " and wp_pm.meta_value = 'active' ";
        $str .= " ORDER BY wp_p.post_author ASC ; ";
        $DBWP      = $this->load->database('db_wp_real', TRUE);
        $query     = $DBWP->query($str);
        $resultArr = $query->result_array();

        for ($cnt = 0; $cnt < count($resultArr); $cnt++) {
            echo "ID = " . $resultArr[$cnt]["ID"];
            echo " , ";
            echo "post_author = " . $resultArr[$cnt]["post_author"];
            echo " , ";
            echo "post_title = " . $resultArr[$cnt]["post_title"];
            //echo " , ";
            //echo "post_status = " . $resultArr[$cnt]["post_status"];
            echo "<hr/>";
        }
    }

    public function personality(){
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(75, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบบุคลิกภาพ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        $pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 55);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_personality_question();

        $duplicate = $this->personality_model->check_duplicate($set_id);
        $answer = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_personality_answer($set_id);
        }

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0">';
        foreach ($question as $r) { 

            
            $q = "q" . $r->topic ;
            $a = NULL;
            $check_a = 'o';
            $check_b = 'o';
            if(isset($answer) && ($answer != NULL)){
                $a = $answer[$q];
            }

            if($a==$r->a_value){
                $check_a = '3';
            }

            if($a==$r->b_value){
                $check_b = '3';
            }

            $html .='<tr>
                        <td width="5%">' . $r->topic. '.)</td>
                        <td width="95%" colspan="2"><b> ' . $r->question . ' </b></td>
                    </tr>';
            $html .='<tr>
                        <td width="5%"></td>
                        <td width="5%"><span class="check-mark">' . $check_a . '</span></td>
                        <td width="90%">ก. ' . $r->a. '</td>
                    </tr>';
            $html .='<tr>
                        <td width="5%"></td>
                        <td width="5%"><span class="check-mark">' . $check_b . '</span></td>
                        <td width="90%">ข. ' . $r->b. '<br></td>
                    </tr>';
        }
       
        $html .='</table>';
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function personality_empty(){
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }
        //var_dump($this->session->userdata('user_ss'));
        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        $baseurl = "https://career.cmo-group.com";
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment

        if ($data_resp["seg2"] == "pdf_empty") {
            $set_id = $data_resp["seg3"];
        }
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $full_name = '';

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = '';
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = '';
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(75, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบบุคลิกภาพ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        $pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 55);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_personality_question();

        $duplicate = $this->personality_model->check_duplicate($set_id);
        $answer = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_personality_answer($set_id);
        }

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0">';
        foreach ($question as $r) { 

            
            $q = "q" . $r->topic ;
            $a = NULL;
            $check_a = 'o';
            $check_b = 'o';
            

            $html .='<tr>
                        <td width="5%">' . $r->topic. '.)</td>
                        <td width="95%" colspan="2"><b> ' . $r->question . ' </b></td>
                    </tr>';
            $html .='<tr>
                        <td width="5%"></td>
                        <td width="5%"><span class="check-mark">' . $check_a . '</span></td>
                        <td width="90%">ก. ' . $r->a. '</td>
                    </tr>';
            $html .='<tr>
                        <td width="5%"></td>
                        <td width="5%"><span class="check-mark">' . $check_b . '</span></td>
                        <td width="90%">ข. ' . $r->b. '<br></td>
                    </tr>';
        }
       
        $html .='</table>';
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }


    public function personality_result(){
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        // result
        $this->data_cn["job_apply_id"] = $this->uri->segment(3);

        $duplicate = $this->personality_model->check_duplicate($this->data_cn["job_apply_id"]);
        $result = NULL;
        $i = 0;
        $e = 0;
        $s = 0;
        $n = 0;
        $t = 0;
        $f = 0;
        $j = 0;
        $p = 0;
        $group = NULL;
        $type_1 = NULL;
        $type_2 = NULL;
        $type_3 = NULL;
        $type_4 = NULL;
        $label_1 = NULL;
        $label_2 = NULL;
        $label_3 = NULL;
        $label_4 = NULL;
        $label = NULL;
        $description = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_personality_answer($this->data_cn["job_apply_id"]);
            foreach ($answer as $r) {
                $result .= $r;
                if($r=='I') $i++;
                if($r=='E') $e++;
                if($r=='S') $s++;
                if($r=='N') $n++;
                if($r=='T') $t++;
                if($r=='F') $f++;
                if($r=='J') $j++;
                if($r=='P') $p++;
            }

            if($i==$e){
                $q = $this->personality_model->get_personality_answer_by_question('q11', $this->data_cn["job_apply_id"]);
                foreach ($q as $value) {
                    if($value=='I') $i = $i - 1;
                    if($value=='E') $e = $e - 1;
                }
            }

            if($s==$n){
                $q = $this->personality_model->get_personality_answer_by_question('q16', $this->data_cn["job_apply_id"]);
                foreach ($q as $value) {
                    if($value=='S') $s = $s - 1;
                    if($value=='N') $n = $n - 1;
                }
            }

            if($t==$f){
                $q = $this->personality_model->get_personality_answer_by_question('q24', $this->data_cn["job_apply_id"]);
                foreach ($q as $value) {
                    if($value=='T') $t = $t - 1;
                    if($value=='F') $f = $f - 1;
                }
            }

            if($j==$p){
                $q = $this->personality_model->get_personality_answer_by_question('q23', $this->data_cn["job_apply_id"]);
                foreach ($q as $value) {
                    if($value=='J') $j = $j - 1;
                    if($value=='P') $p = $p - 1;
                }
            }

            if($i>$e){
                $group .= 'I';
            }else{
                $group .= 'E';
            }

            if($s>$n){
                $group .= 'S';
            }else{
                $group .= 'N';
            }

            if($t>$f){
                $group .= 'T';
            }else{
                $group .= 'F';
            }

            if($j>$p){
                $group .= 'J';
            }else{
                $group .= 'P';
            }

            $type_1 = substr($group,0,1);
            $type_2 = substr($group,1,1);
            $type_3 = substr($group,2,1);
            $type_4 = substr($group,3);

            $rs_group = $this->personality_model->get_personality_group($group);
            foreach ($rs_group as $value) {
                $label = $value->label;
                $description = $value->description;
            }

            $rs = $this->personality_model->get_personality_type($type_1);
            foreach ($rs as $value) {
                $label_1 = $value->label;
            }

            $rs = $this->personality_model->get_personality_type($type_2);
            foreach ($rs as $value) {
                $label_2 = $value->label;
            }

            $rs = $this->personality_model->get_personality_type($type_3);
            foreach ($rs as $value) {
                $label_3 = $value->label;
            }

            $rs = $this->personality_model->get_personality_type($type_4);
            foreach ($rs as $value) {
                $label_4 = $value->label;
            }

        }

        // end result
        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test Result : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(75, 39);
        $pdf->Cell(30, 0, 'ผลการทดสอบบุคลิกภาพ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(15, 55);
        $pdf->Cell(30, 0, $group, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(20, 67);
        $pdf->Cell(30, 0, '- ' . $label_1 . '  (' . $type_1. ')', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(20, 74);
        $pdf->Cell(30, 0, '- ' . $label_2 . '  (' . $type_2. ')', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(20, 81);
        $pdf->Cell(30, 0, '- ' . $label_3. '  (' . $type_3. ')', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(20, 88); 
        $pdf->Cell(30, 0, '- ' . $label_4. '  (' . $type_4. ')', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(15, 100);
        $pdf->Cell(30, 0, 'คุณลักษณะบุคลิกภาพ : ' . $label, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '14');
        $pdf->SetXY(15, 106);


        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_personality_question();

        $duplicate = $this->personality_model->check_duplicate($set_id);
        $answer = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_personality_answer($set_id);
        }

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="15" border="0">';

        // $html .='<tr>
        //             <td width="100%" style="text-align:justify;">' . trim($description) . '</td>
        //         </tr>';
       
        $html .='<tr>
                <td width="100%" style="text-align:left; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . trim($description) . '</td>
            </tr>';
        $html .='</table>';
       // $html = trim($description);
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function subjective_english(){
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(80, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบอัตนัย', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        /*$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');*/
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 45);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_subjective_english_question();

        $duplicate = $this->personality_model->check_duplicate_subjective($set_id);
        $answer = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_subjective_english_answer($set_id);
        }

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0" display:block;>';
        foreach ($question as $r) 
            {  $q = "q" . $r->topic ;
              $a = NULL ;  
              if(isset($answer) && ($answer != NULL)){
                $a = $answer[$q];
            }else{
                // $a = "no answer";
            }  

            if  ($r->topic != '5')  
                {
                    $html .='<tr>
                    <td width="100%"><b>' . $r->topic. '.) '. $r->question .'</b><br></td>
                    </tr>';
                    $html .='<tr>
                    <!--<td width="5%"></td>-->
                    <td width="90%" height ="105px" rowspan="1" ><b>Answer : </b>' . $a. ' <br><br></td>
                    </tr>';
                }
                else 
                {
                    $html .='<tr>
                    <td width="100%"><b>' . $r->topic. '.) '. $r->question .'</b><br></td>
                    </tr>';
                    $html .='<tr>
                    <!--<td width="5%"></td>-->
                    <td width="90%" height ="105px" rowspan="1"><b>Answer : </b>' . $a. ' <br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                    </tr>';
                }        

    }
       
        $html .='</table>';
     
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function subjective_empty(){
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $full_name = '';

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(80, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบอัตนัย', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        /*$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');*/
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 45);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_subjective_english_question();

        $duplicate = $this->personality_model->check_duplicate_subjective($set_id);
        $answer = NULL;
        if($duplicate == TRUE){
            $answer = $this->personality_model->get_subjective_english_answer($set_id);
        }

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0" display:block;>';
        foreach ($question as $r) 
            {  $q = "q" . $r->topic ;
              $a = NULL ;  
              if(isset($answer) && ($answer != NULL)){
                $a = '';
            }else{
                // $a = "no answer";
            }  

            if  ($r->topic != '5')  
                {
                    $html .='<tr>
                    <td width="100%"><b>' . $r->topic. '.) '. $r->question .'</b><br></td>
                    </tr>';
                    $html .='<tr>
                    <!--<td width="5%"></td>-->
                    <td width="90%" height ="105px" rowspan="1" ><b>Answer : </b>' . $a. ' <br><br></td>
                    </tr>';
                }
                else 
                {
                    $html .='<tr>
                    <td width="100%"><b>' . $r->topic. '.) '. $r->question .'</b><br></td>
                    </tr>';
                    $html .='<tr>
                    <!--<td width="5%"></td>-->
                    <td width="90%" height ="105px" rowspan="1"><b>Answer : </b>' . $a. ' <br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                    </tr>';
                }        

    }
       
        $html .='</table>';
     
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function engObjective(){ //ดึงหน้า PDF แบบทดสอบภาษาอังกฤษ 
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);  //ดึงข้อมูลประวัติของผู้เข้าทดสอบ
        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);
       
        //ดึงข้อมูลคะแนนของผู้ทดสอบ
        $pointArray = $this->personality_model->get_eng_point_for_PDF($set_id);
        $point = $pointArray["point"];



        //ดึงข้อมูลโจทย์
        //$examArray = $this->personality_model->get_eng_objective_question();
        //$exam = $examArray["exam"];
        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(130, 9);
        $pdf->Cell(30, 0, 'คะแนนรวม', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(150, 9);
        $pdf->Cell(30, 0, $point . ' / 40', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(130, 15);
        $pdf->Cell(30, 0, 'เกรด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        if ($point >= 0 && $point <= 19) {
          $G = 'Poor';
        }
        else if ($point >= 20 && $point <= 29)  {
          $G = 'Fair';
        }
        else if ($point >= 30 && $point <= 34)  {
          $G = 'Good'; 
        }
        else if ($point >= 35 && $point <= 40)  {
          $G = 'Very Good';
        }

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(150, 15);
        $pdf->Cell(30, 0, $G , 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(70, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบปรนัย Grammar', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        /*$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');*/
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 45);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_eng_objective_question_PDF();

        $answer = NULL;
        $answer = $this->personality_model->get_eng_success($set_id);
        

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0">';
        foreach ($question as $r) { 

            foreach ($answer as $an) { 
                                                                
                $q = "q" . $r->topic ;
                $a = NULL;
                if(isset($an) && ($an != '')){
                }else{
                    $a = 'E';
                }
            }
            
            $q = "q" . $r->topic ;
            $a = NULL;
            $check_a = 'o';
            $check_b = 'o';
            $check_c = 'o';
            $check_d = 'o';
            

            if(isset($an) && ($an != NULL)){
            }

            if($an -> $q == 'A'){
                $check_a = '3';
            }

            if($an -> $q == 'B'){
                $check_b = '3';
            }
            if($an -> $q == 'C'){
                $check_c = '3';
            }

            if($an -> $q == 'D'){
                $check_d = '3';
            }

                $html .='<tr>
                            <!--<td width="5%">' . $r->topic. '.)</td>-->
                            <td width="95%" colspan="2"><b> ' . $r->question . ' <br></b></td>
                    </tr>';
                if  ($r->topic != '')  
                {
                            $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_a . '</span></td>
                            <td width="90%">A. ' . $r->A. '</td>
                        </tr>';
                $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_b . '</span></td>
                            <td width="90%">B. ' . $r->B. '</td>
                        </tr>';
                        $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_c . '</span></td>
                            <td width="90%">C. ' . $r->C. '</td>
                        </tr>';
                $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_d . '</span></td>
                            <td width="90%">D. ' . $r->D. '<br><br></td>
                        </tr>';
                }
                else 
                {
                    
        }
        }
       
        $html .='</table>';
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function engObjective_empty(){ //ดึงหน้า PDF แบบทดสอบภาษาอังกฤษ 
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        // $baseurl = "https://career.cmo-group.com";    
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment
       
        $set_id = $data_resp["seg3"];
        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);  //ดึงข้อมูลประวัติของผู้เข้าทดสอบ
        $full_name = '';

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = '';
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        
        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = '';
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        // $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);
        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);
       
        //ดึงข้อมูลคะแนนของผู้ทดสอบ
        $pointArray = $this->personality_model->get_eng_point_for_PDF($set_id);
        $point = $pointArray["point"];



        //ดึงข้อมูลโจทย์
        //$examArray = $this->personality_model->get_eng_objective_question();
        //$exam = $examArray["exam"];
        
        // echo '<pre>';
        // echo $full_name;
        // echo '<br>';
        // echo $app_no;
        // echo '<br>';
        // echo $set_posi_re;
        // echo '</pre>';

        // exit;

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 15, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '8');
        $pdf->SetXY(173, 9);
        $pdf->Cell(30, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        
        // frame title

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(60, 4, 145, 20, 1, '1111');
        $pdf->SetXY(65, 9);
        $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 9);
        $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 15);
        $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 15);
        $pdf->Cell(30, 0,'', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(65, 21);
        $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(93, 21);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(130, 9);
        $pdf->Cell(30, 0, 'คะแนนรวม', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(150, 9);
        $pdf->Cell(30, 0, '', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(130, 15);
        $pdf->Cell(30, 0, 'เกรด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        if ($point >= 0 && $point <= 19) {
          $G = 'Poor';
        }
        else if ($point >= 20 && $point <= 29)  {
          $G = 'Fair';
        }
        else if ($point >= 30 && $point <= 34)  {
          $G = 'Good'; 
        }
        else if ($point >= 35 && $point <= 40)  {
          $G = 'Very Good';
        }

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(150, 15);
        $pdf->Cell(30, 0, '' , 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '18');
        $pdf->SetXY(70, 35);
        $pdf->Cell(30, 0, 'แบบทดสอบปรนัย Grammar', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       

        /*$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetXY(15, 45);
        $pdf->Cell(30, 0, 'ในแต่ละข้อให้เลือกเพียงตัวเลือก “ก” หรือ “ข” เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetXY(15, 50);
        $pdf->Cell(30, 0, '(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');*/
       
        $pdf->SetFont('freeserif', '', '11');
        $pdf->SetXY(15, 45);

        $set_arr_marital_status  = array(1 => '3', 2 => 'o');

        $question = $this->personality_model->get_eng_objective_question_PDF();

        $answer = NULL;
        $answer = $this->personality_model->get_eng_success($set_id);
        

        // var_dump($answer);
        // exit;

        $html = $this->load->view('component/styleReport', '', true);
        $html .='<table width="100%" cellspacing="0" border="0">';
        foreach ($question as $r) { 

            foreach ($answer as $an) { 
                                                                
                $q = "q" . $r->topic ;
                $a = NULL;
                if(isset($an) && ($an != '')){
                }else{
                    $a = 'E';
                }
            }
            
            $q = "q" . $r->topic ;
            $a = NULL;
            $check_a = 'o';
            $check_b = 'o';
            $check_c = 'o';
            $check_d = 'o';
            


                $html .='<tr>
                            <!--<td width="5%">' . $r->topic. '.)</td>-->
                            <td width="95%" colspan="2"><b> ' . $r->question . ' <br></b></td>
                    </tr>';
                if  ($r->topic != '')  
                {
                            $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_a . '</span></td>
                            <td width="90%">A. ' . $r->A. '</td>
                        </tr>';
                $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_b . '</span></td>
                            <td width="90%">B. ' . $r->B. '</td>
                        </tr>';
                        $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_c . '</span></td>
                            <td width="90%">C. ' . $r->C. '</td>
                        </tr>';
                $html .='<tr>
                            <td width="5%"></td>
                            <td width="5%"><span class="check-mark">' . $check_d . '</span></td>
                            <td width="90%">D. ' . $r->D. '<br><br></td>
                        </tr>';
                }
                else 
                {
                    
        }
        }
       
        $html .='</table>';
        
        // var_dump($html);
        // exit;

        // $pdf->RoundedRect(75, 4, 130, 20, 1, '1111');
        // $pdf->SetXY(77, 9);
        // $pdf->Cell(30, 0, 'ชื่อ-นามสกุล', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 9);
        // $pdf->Cell(30, 0, $full_name, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 15);
        // $pdf->Cell(30, 0, 'ตำแหน่งที่สมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 15);
        // $pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // $pdf->SetFont('freeserif', 'B', '10');
        // $pdf->SetXY(77, 21);
        // $pdf->Cell(30, 0, 'วันที่ทำรายการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
       
        // $pdf->SetFont('freeserif', '', '9');
        // $pdf->SetXY(101, 21);
        // $pdf->Cell(30, 0, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        



        // $html = "<b>aaa</b>";
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

    }

    public function pdf() {
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }
        //var_dump($this->session->userdata('user_ss'));
        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        $baseurl = "https://career.cmo-group.com";
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment

        if ($data_resp["seg2"] == "pdf") {
            $set_id = $data_resp["seg3"];
        }
        //var_dump($data_resp);

        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);

        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        /*
        $get_strlen = strlen((string)$this->data_resp["get_job_apply_id"]);
        if($get_strlen < 4) {
        if($get_strlen == 1) {
        $set_digit = "000";
        }
        if($get_strlen == 2) {
        $set_digit = "00";
        }
        if($get_strlen == 3) {
        $set_digit = "0";
        }
        if($get_strlen == 4) {
        $set_digit = "";
        }
        }
        $set_job_code = "" . $data_yy1 . "-" . $set_digit . $this->data_resp["get_job_apply_id"];
         */

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Application for Employee : ' . $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(2);
        $pdf->setFooterMargin(15);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 5, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(118, 10);
        $pdf->Cell(30, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        // for HR

        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(50, 5, 100, 28, 4, '1111');
        $pdf->SetXY(52, 12);
        $pdf->Cell(30, 0, 'สำหรับเจ้าหน้าที่', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(52, 20);
        $pdf->SetFont('freeserif', 'B', '11');
        $pdf->Cell(30, 0, 'รับผู้สมัครเข้าทํางาน สําหรับ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(52, 27);
        $pdf->Cell(30, 100, 'บริษัท', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(65, 27);

        $pdf->SetFont('freeserif', '', '11');

        $company_list = $this->utility->get_company_arr();
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = trim($company_list[$result["apply_comp_id"]]["en"]);
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        //$pdf->Cell(30, 100, '?บริษัท?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        // Photo
        /**/
        /*
        // --- Method (A) ------------------------------------------
        // the Image() method recognizes the alpha channel embedded on the image:
        //$img_file = "aon.jpg";
        $pdf->Image('assets/uploads/applys/pic_tmp/' . $img_file, 157, 5, 40, '', '', '', '', false, 300);
         */

//        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        //        //$img_file = "aon.jpg";
        //        $img_file = $result["file_pic"];
        //        $this->check_file_exit($img_file);
        //        $filename = 'assets/uploads/applys/pic_tmp/' . $img_file;
        //$img_file = '';
        $img_file = (isset($result["file_pic"]) ? $result["file_pic"] : 'nopic.png');
        if (isset($result["file_pic"]) && $result["file_pic"] == "20170711_152607.jpeg") {
            $img_file = 'nopic.png';
        }
        $filename = 'assets/uploads/applys/pic_tmp/' . $img_file;
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetFont('freeserif', 'B', '11');
        if ($img_file != '') {

            $pdf->Image($filename, 159, 7, 36, 45, '', '', '', false, 300);
            $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
            $pdf->RoundedRect(155, 5, 45, 50, 0, '');
            $pdf->SetXY(162, 28);
            $pdf->SetXY(162, 34);
            $pdf->SetXY(162, 40);
            //$pdf->Cell(30, 0, '2"', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        } else {

            $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
            $pdf->RoundedRect(155, 5, 45, 50, 0, '');
            $pdf->SetXY(162, 28);
            $pdf->Cell(30, 0, 'รูปถ่าย', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
            $pdf->SetXY(162, 34);
            $pdf->Cell(30, 0, 'Photo', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
            $pdf->SetXY(162, 40);
            $pdf->SetFont('freeserif', 'B', '8');
            $pdf->Cell(30, 0, '2"', 0, 1, 'C', 0, '', 0, false, 'L', 'B');

        }
        // Age Weight Height
        // Set param [Age weight height]

        $set_age = $this->get_age($result["date_birth"]);
        //$set_age    = $result["age"];
        $set_weight = (int) $result["weight"];
        $set_height = (int) $result["height"];
        //$set_age_1;

        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(155, 55, 15, 18, 0, '');
        $pdf->SetXY(148, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'อายุ', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(148, 65);
        $pdf->Cell(30, 100, 'Age', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(148, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_age, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(170, 55, 15, 18, 0, '');
        $pdf->SetXY(163, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'น้ำหนัก', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(163, 65);
        $pdf->Cell(30, 100, 'Weight', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(163, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_weight, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(185, 55, 15, 18, 0, '');
        $pdf->SetXY(178, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'ส่วนสูง', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(178, 65);
        $pdf->Cell(30, 100, 'Height', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(178, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_height, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        // Header
        $pdf->SetFont('freeserif', 'B', '13');
        $pdf->SetXY(80, 40);
        $pdf->Cell(30, 0, 'ใบสมัครงาน', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(80, 47);
        $pdf->Cell(30, 100, 'Application for Employment', 0, 1, 'C', 0, '', 0, false, 'L', 'B');

        // Subheader

        $set_date_apply     = $this->date_format($result["apply_datetime"]);
        $set_date_available = $this->date_format($result["apply_available_date"]);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(15, 55);
        $pdf->Cell(30, 0, 'วันที่', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(15, 60);
        $pdf->Cell(30, 100, 'Date', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(25, 60);
        $pdf->SetFont('freeserif', '', '9');
        //$pdf->Cell(30, 100, '?Date?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(95, 55);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'สามารถเริ่มงานภายใน', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(95, 60);
        $pdf->Cell(30, 100, 'Available Date', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(120, 60);
        $pdf->SetFont('freeserif', '', '9');
        //$pdf->Cell(30, 100, '?Available Date?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->Cell(30, 100, $set_date_available, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetLineStyle(array('width' => 0.6, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->line(15, 63, 151, 63, '');

        $pdf->SetXY(15, 68);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'ตำแหน่งที่ต้องการสมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(15, 73);
        $pdf->Cell(30, 100, 'Apply for the Position', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        // $pdf->SetXY(48, 67);
        $pdf->SetFont('freeserif', '', '8');

        $apply_position_name = $this->utility->get_posi_name($result["apply_position_id"]);

        $set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        $pdf->MultiCell(47, 10, $set_posi_re, 0, 'L', 0, 1, 48, 65.5, true, 0, false, true, 0, 'B');
        $pdf->SetXY(95, 68);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'เงินเดือนที่ต้องการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(95, 73);
        $pdf->Cell(30, 100, 'Expected Salary', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(120, 73);
        $pdf->SetFont('freeserif', '', '9');

        //echo $result["apply_saraly_req"];
        //exit;
        $set_apply_saraly_req = $this->set_curr_display($result["apply_saraly_req"]);
        //$pdf->Cell(30, 100, '?Expected Salary?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_apply_saraly_req, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // Page #1
        // Rectangle Frame
        $pdf->SetLineStyle(array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        // $pdf->RoundedRect(10, 76, 190, 214, 0, '');
        // $pdf->RoundedRect(10, 76, 190, 135.5, 0, '');
        $pdf->RoundedRect(10, 76, 190, 136.5, 0, '');
        $pdf->SetXY(9, 78);
        $pdf->SetFont('freeserif', 'B', '8');

        $set_arr_title = array(
            "1"  => "นาย",
            "2"  => "นางสาว",
            "3"  => "นาง",
            "4"  => "ดร.",
            "99" => "อื่นๆ",
        );
        $set_arr_title_en = array(
            "1"  => "Mr.",
            "2"  => "Miss",
            "3"  => "Mrs.",
            "4"  => "Dr.",
            "99" => "Others",
        );

        $job_apply_id = $result["Id"];
        $set_title_id = $result["title_id"];
        //echo $set_title_id;
        //exit;
        $set_str_title    = '';
        $set_str_title_en = '';

        if ($set_title_id == '') {
            $title_list = '';
            $set_str_title .= '<span style="" >' . $set_arr_title["1"] . '</span>/';
            $set_str_title .= '<span style="" >' . $set_arr_title["2"] . '</span>/';
            $set_str_title .= '<span style="" >' . $set_arr_title["3"] . '</span>/';
            $set_str_title_en .= '<span style="" >' . $set_arr_title_en["1"] . '</span>/';
            $set_str_title_en .= '<span style="" >' . $set_arr_title_en["2"] . '</span>/';
            $set_str_title_en .= '<span style="" >' . $set_arr_title_en["3"] . '</span>/';
        } else {
            $result_title_list = $this->utility->get_title_list($set_title_id);
            if ($result_title_list != null) {
                $set_title_name = $result_title_list->title_name_th;
                $title_list     = $this->utility->get_title_list();
            } else {
                $set_title_name = '';
            }

            //var_dump($result_title_list->title_name_th);

            for ($cnt = 1; $cnt < 4; $cnt++) {
                if ($set_title_id == $cnt) {
                    $set_str_title .= '<span style="text-decoration: underline;" >' . $set_arr_title[$cnt] . '</span>/';
                } else {
                    $set_str_title .= '<span style="" >' . $set_arr_title[$cnt] . '</span>/';
                }
            }
            for ($cnt = 1; $cnt < 4; $cnt++) {
                if ($set_title_id == $cnt) {
                    $set_str_title_en .= '<span style="text-decoration: underline;" >' . $set_arr_title_en[$cnt] . '</span>/';
                } else {
                    $set_str_title_en .= '<span style="" >' . $set_arr_title_en[$cnt] . '</span>/';
                }
            }

        }

        //var_dump($set_str_title);
        $set_title_name    = substr($set_str_title, 0, (strlen($set_str_title) - 1));
        $set_title_name_en = substr($set_str_title_en, 0, (strlen($set_str_title_en) - 1));
        //exit;

        $set_first_name_th = $result["first_name_th"];
        $set_last_name_th  = $result["last_name_th"];
        $set_full_name_th  = $set_first_name_th . ' ' . $set_last_name_th;
        $set_nick_name_th  = $result["nick_name_th"];
        $set_first_name_en = $result["first_name_en"];
        $set_last_name_en  = $result["last_name_en"];
        $set_full_name_en  = $set_first_name_en . ' ' . $set_last_name_en;
        $set_nick_name_en  = $result["nick_name_en"];

        //echo $result["date_birth"];
        //exit;
        if ($result["date_birth"] == '0000-00-00 00:00:00') {

            $set_day           = '';
            $arr_date_birth[0] = '-';
            $arr_date_birth[1] = '-';
            $arr_date_birth[2] = '-';
        } else {

            $set_set_date_birth  = $result["date_birth"];
            $arr_date_time_birth = explode(" ", $set_set_date_birth);
            $arr_date_birth      = explode("-", $arr_date_time_birth[0]);

            //$set_yesr_th  = intval($arr_date_birth[0]) - intval(543);
            $set_yesr_th = intval($arr_date_birth[0]);
            $string      = (string) $set_yesr_th . "-" . $arr_date_birth[1] . "-" . $arr_date_birth[2];
            //$string  = $arr_date_birth[0] . "-" . $arr_date_birth[1] . "-" . $arr_date_birth[2];

            $date = DateTime::createFromFormat("Y-m-d", $string);
            //echo $string;
            //echo "<br/>";
            //echo $date->format("D");

            $set_day = $this->arr_day_th[$date->format("D")];
        }
        //$set_day = "recheck;";

        $set_province_birth_id = $result["province_birth_id"];
        $set_nationality_id    = $result["nationality_id"];
        $set_nationality_name  = $result["nationality_name"];

        $set_nationality_id   = $result["nationality_id"];
        $set_nationality_name = $result["nationality_name"];

        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        // $html = '';
        // $html .=
        // '<h3>ข้อมูลส่วนตัว</h3>
        // <table width="99%" cellspacing="0" border="0">
        //     <tr>
        //         <td width="15%">ชื่อ-นามสกุล:</td>
        //         <td width="20%" class="text-normal">' . $set_title_name . '</td>
        //         <td width="30%" class="text-normal">' . $set_full_name_th . '</td>
        //         <td width="10%">ชื่อเล่น</td>
        //         <td width="20%" class="text-normal">' . $set_nick_name_th . '</td>
        //     </tr>
        //     <tr>
        //         <td width="15%">Name-Surname:</td>
        //         <td width="20%" class="text-normal">' . $set_title_name_en . '</td>
        //         <td width="30%" class="text-normal">' . $set_full_name_en . '</td>
        //         <td width="10%">Nickname</td>
        //         <td width="20%" class="text-normal">' . $set_nick_name_en . '</td>
        //     </tr>
        //     <tr>
        //         <td width="18%">เกิดวัน</td>
        //         <td width="10%">วันที่</td>
        //         <td width="20%">เดือน</td>
        //         <td width="12%">ปี</td>
        //         <td width="22%">เกิดจังหวัด</td>
        //         <td width="18%">สัญชาติ</td>
        //     </tr>
        //     <tr>
        //         <td width="10%">Birth of day
        //         </td>
        //         <td width="8%" class="text-normal">' . $set_day . '
        //         </td>
        //         <td width="6%">Date
        //         </td>
        //         <td width="4%" class="text-normal">' . $arr_date_birth[2] . '
        //         </td>
        //         <td width="8%">Month
        //         </td>
        //         <td width="12%" class="text-normal">' . $arr_date_birth[1] . '
        //         </td>
        //         <td width="6%">Year
        //         </td>
        //         <td width="6%" class="text-normal">' . $arr_date_birth[0] . '
        //         </td>
        //         <td width="9%">Province
        //         </td>
        //         <td width="13%" class="text-normal">' . $this->utility->get_data_province_name_by_id($set_province_birth_id) . '
        //         </td>
        //         <td width="10%">Nationality
        //         </td>
        //         <td width="8%" class="text-normal">' . $set_nationality_name . '
        //         </td>
        //     </tr>';


            $html .=
        '
        <p style="color:red;">       ***โปรดให้ข้อมูลตามความเป็นจริง เพื่อประโยชน์ในการพิจารณาคุณสมบัติในการสมัครงาน และการทำงานร่วมกันในอนาคต ข้อมูลนี้จะเก็บเป็นความลับ ตามพรบ. <br>     คุ้มครองข้อมูลส่วนบุคคล***</p>
        <h3>ข้อมูลส่วนตัว</h3>
        <table width="99%" cellspacing="0" border="0">
            <tr>
                <td width="15%">ชื่อ-นามสกุล:</td>
                <td width="20%" class="text-normal">' . $set_title_name . '</td>
                <td width="30%" class="text-normal">' . $set_full_name_th . '</td>
                <td width="10%">ชื่อเล่น</td>
                <td width="20%" class="text-normal">' . $set_nick_name_th . '</td>
            </tr>
            <tr>
                <td width="15%">Name-Surname:</td>
                <td width="20%" class="text-normal">' . $set_title_name_en . '</td>
                <td width="30%" class="text-normal">' . $set_full_name_en . '</td>
                <td width="10%">Nickname</td>
                <td width="20%" class="text-normal">' . $set_nick_name_en . '</td>
            </tr>
            <tr>
                <td width="18%">เกิดวัน</td>
                <td width="10%">วันที่</td>
                <td width="20%">เดือน</td>
                <td width="32%">ปี</td>
                <td width="10%">สัญชาติ</td><td></td>
            </tr>
            <tr>
                <td width="10%">Birth of day
                </td>
                <td width="8%" class="text-normal">' . $set_day . '
                </td>
                <td width="6%">Date
                </td>
                <td width="4%" class="text-normal">' . $arr_date_birth[2] . '
                </td>
                <td width="8%">Month
                </td>
                <td width="12%" class="text-normal">' . $arr_date_birth[1] . '
                </td>
                <td width="6%">Year
                </td>
                <td width="26%" class="text-normal">' . $arr_date_birth[0] . '
                </td>
                <td width="10%">Nationality
                </td>
                <td width="8%" class="text-normal">' . $set_nationality_name . '
                </td>
            </tr>';

        $set_race_id       = $result["race_id"];
        $set_race_name     = $result["race_name"];
        $set_religion_id   = $result["religion_id"];
        $set_religion_name = $result["religion_name"];

        $set_id_card_passport     = $result["id_card_passport"];
        $set_id_card_issued_date  = $result["id_card_issued_date"];
        $set_id_card_expired_date = $result["id_card_expired_date"];

        $set_arr_issued_datetime = explode(' ', $set_id_card_issued_date);
        $set_arr_issued_date     = explode('-', $set_arr_issued_datetime[0]);
        $set_data_issued_date    = $set_arr_issued_date[2] . "/" . $set_arr_issued_date[2] . "/" . $set_arr_issued_date[0];

        $set_arr_expired_datetime = explode(' ', $set_id_card_expired_date);
        $set_arr_expired_date     = explode('-', $set_arr_expired_datetime[0]);
        $set_data_expired_date    = $set_arr_expired_date[2] . "/" . $set_arr_expired_date[2] . "/" . $set_arr_expired_date[0];

        $html .= '<tr>
                <td width="29%">ศาสนา
                </td>
                <td width="32%">เลขที่บัตรประชาชน /เลขที่หนังสือเดินทาง
                </td>
                <td width="19%">วันที่ออก
                </td>
                <td width="20%">วันหมดอายุ
                </td>
            </tr>
            <tr>
                <td width="8%">Religion
                </td>
                <td width="21%" class="text-normal">' . $set_religion_name . '
                </td>
                <td width="18%">ID Card no./Passport no.
                </td>
                <td width="14%" class="text-normal">' . $set_id_card_passport . '
                </td>
                <td width="10%">Issued Date
                </td>
                <td width="9%" class="text-normal">' . $set_data_issued_date . '
                </td>
                <td width="11%">Expired Date
                </td>
                <td width="9%" class="text-normal">' . $set_data_expired_date . '
                </td>
            </tr>';


        //     $html .= '<tr>
        //     <td width="29%">ศาสนา
        //     </td>
        //     <td width="32%">เลขที่บัตรประชาชน /เลขที่หนังสือเดินทาง
        //     </td>
        //     <td width="19%">วันที่ออก
        //     </td>
        //     <td width="20%">วันหมดอายุ
        //     </td>
        // </tr>
        // <tr>
        //     <td width="6%">Religion
        //     </td>
        //     <td width="23%" class="text-normal">' . $set_race_name . '
        //     </td>
        //     <td width="8%">Religion
        //     </td>
        //     <td width="7%" class="text-normal">' . $set_religion_name . '
        //     </td>
        //     <td width="18%">ID Card no./Passport no.
        //     </td>
        //     <td width="14%" class="text-normal">' . $set_id_card_passport . '
        //     </td>
        //     <td width="10%">Issued Date
        //     </td>
        //     <td width="9%" class="text-normal">' . $set_data_issued_date . '
        //     </td>
        //     <td width="11%">Expired Date
        //     </td>
        //     <td width="9%" class="text-normal">' . $set_data_expired_date . '
        //     </td>
        // </tr>';

        $set_arr_marital_status  = array(1 => 'o', 2 => 'o', 3 => 'o', 4 => 'o');
        $set_arr_military_status = array(1 => 'o', 2 => 'o', 3 => 'o');

        $set_marital_status = $result["marital_status"];

        $set_arr_marital_status[$set_marital_status] = "3";

        $set_military_status = $result["military_status"];
        //echo $set_military_status;
        //exit;

        if ($set_military_status == '') {
            //$set_arr_military_status[0] = "o";
        } else {

            $set_arr_military_status[$set_military_status] = "3";
        }

        //echo $set_arr_military_status[$set_military_status];
        //exit;

        $set_military_status_2_txt = $result["military_status_2_txt"];
        $set_military_status_3_txt = $result["military_status_3_txt"];

        $html .= '<tr>
                <td width="19%">สถานภาพการสมรส
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_marital_status[1] . '</span>
                </td>
                <td width="15%">โสด
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_marital_status[2] . '</span>
                </td>
                <td width="15%">แต่งงาน
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_marital_status[3] . '</span>
                </td>
                <td width="15%">หม้าย
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_marital_status[4] . '</span>
                </td>
                <td width="15%">หย่า
                </td>
            </tr>
            <tr>
                <td width="22%">Marital Status
                </td>
                <td width="18%">Single
                </td>
                <td width="18%">Married
                </td>
                <td width="18%">Widowed
                </td>
                <td width="18%">Divorced
                </td>
            </tr>
            <tr>
                <td width="14%">สถานภาพทางทหาร
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="12%">เกณฑ์ทหารแล้ว
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[2] . '</span>
                </td>
                <td width="11%">ยังไม่ได้เกณฑ์
                </td>
                <td width="20%">ถ้ายังถึงกำหนดเมื่อ
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[3] . '</span>
                </td>
                <td width="24%">ได้รับการยกเว้นเพราะ
                </td>
            </tr>
            <tr>
                <td width="17%">Military Status
                </td>
                <td width="15%">Yes
                </td>
                <td width="11%">No
                </td>
                <td width="14%">If  no, specify when
                </td>
                <td width="9%" class="text-normal">' . $set_military_status_2_txt . '
                </td>
                <td width="20%">If exempted specify reason?
                </td>
                <td width="14%" class="text-normal">' . $set_military_status_3_txt . '
                </td>
            </tr>';

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
            "address_type" => '2',
        );

        $result_paddr = $this->app_frm_model->get_addr_by_job_apply_id($set_arr);
        //var_dump($result_paddr);
        //exit;
        if ($result_paddr) {

            //echo $result_paddr["district_id"];

            if ($result_paddr["district_id"] == 0 || $result_paddr["district_id"] == 9999) {
                $set_district = '';
            } else {
                $set_district = $this->utility->get_data_amphur_name_by_id($result_paddr["district_id"]);
            }

            if ($result_paddr["province_id"] == 0) {
                $set_province = '';
            } else {
                $set_province = $this->utility->get_data_province_name_by_id($result_paddr["province_id"]);
            }

            $set_paddr_no           = $result_paddr["intro_number"];
            $set_paddr_road         = $result_paddr["intro_street"];
            $set_paddr_sub_district = $result_paddr["sub_district"];
            $set_paddr_district     = $set_district;
            $set_paddr_province     = $set_province;
            $set_paddr_postal_code  = $result_paddr["postal_code"];
            //$set_paddr_postal_code = '';
        } else {

            $set_paddr_no           = '-';
            $set_paddr_road         = '-';
            $set_paddr_sub_district = '-';
            $set_paddr_district     = '-';
            $set_paddr_province     = '-';
            $set_paddr_postal_code  = '-';
        }

        $set_tel    = $result["paddr_telephone"];
        $set_mobile = $result["paddr_mobile"];
        $set_email  = $result["email"];

        // $html .= '
        //     <tr>
        //         <td width="13%">ที่อยู่ปัจจุบัน
        //         </td>
        //         <td width="8%" >บ้านเลขที่
        //         </td>
        //         <td width="20%" >
        //         </td>
        //         <td width="8%">ถนน/ซอย
        //         </td>
        //         <td width="10%" >
        //         </td>
        //         <td width="10%">ตำบล/แขวง
        //         </td>
        //         <td width="10%" >
        //         </td>
        //         <td width="10%">อำเภอ/เขต
        //         </td>
        //         <td width="10%" >
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="13%">Present Add.
        //         </td>
        //         <td width="8%">Address
        //         </td>
        //         <td width="20%" class="text-normal" align="left" valign="top">' . $set_paddr_no . '
        //         </td>
        //         <td width="8%">Street/Soi
        //         </td>
        //         <td width="10%" class="text-normal" >' . $set_paddr_road . '
        //         </td>
        //         <td width="10%">Sub-District
        //         </td>
        //         <td width="10%" class="text-normal">' . $set_paddr_sub_district . '
        //         </td>
        //         <td width="10%">District
        //         </td>
        //         <td width="10%" class="text-normal">' . $set_paddr_district . '
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="8%">จังหวัด<br>&nbsp;Province
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_paddr_province . '
        //         </td>
        //         <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_paddr_postal_code . '
        //         </td>
        //         <td width="8%">โทรศัพท์<br>&nbsp;Tel.
        //         </td>
        //         <td width="32%" class="text-normal">' . $set_tel . '
        //         </td>
        //         <td width="7%">มือถือ<br>&nbsp;Mobile
        //         </td>
        //         <td width="12%" class="text-normal">' . $set_mobile . '
        //         </td>
        //     </tr>
        //    ';

           
        $html .= '
        <tr style="vertical-align:top">
            <td width="13%">ที่อยู่ปัจจุบัน<br>&nbsp;Present Add.
            </td>
            <td width="11%" class="text-normal">' . $set_paddr_no . '
            </td>
            <td width="10%">ถนน<br>&nbsp;Street
            </td>
            <td width="25%" class="text-normal">' . $set_paddr_road . '
            </td>
            <td width="10%">ตำบล/แขวง<br>&nbsp;Sub District
            </td>
            <td width="10%" class="text-normal">' . $set_paddr_sub_district . '
            </td>
            <td width="10%">อำเภอ/เขต<br>&nbsp;District
            </td>
            <td width="10%" class="text-normal">' . $set_paddr_district . '
            </td>
        </tr>';

        $html .= '
            <tr>
                <td width="8%">จังหวัด<br>&nbsp;Province
                </td>
                <td width="16%" class="text-normal">' . $set_paddr_province . '
                </td>
                <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
                </td>
                <td width="25%" class="text-normal">' . $set_paddr_postal_code . '
                </td>
                <td width="10%">โทรศัพท์<br>&nbsp;Tel.
                </td>
                <td width="10%" class="text-normal">' . $set_tel . '
                </td>
                <td width="10%">มือถือ<br>&nbsp;Mobile
                </td>
                <td width="10%" class="text-normal">' . $set_mobile . '
                </td>
            </tr>
        
        ';


 
     
        // email.
        $html .= '
            <tr>
                <td width="8%">อีเมล<br>&nbsp;Email
                </td>
                <td width="92%" class="text-normal">' . $set_email . '
                </td>
            </tr>
           ';

       

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
            "address_type" => '2',
        );

        $result_haddr = $this->app_frm_model->get_addr_by_job_apply_id($set_arr);
        //var_dump($result_paddr);
        //exit;
        if ($result_haddr) {
            //var_dump($result_addr);
            //exit;
            /*
            ["Id"]=> string(1) "1" ["intro_number"]=> string(2) "86"
             * ["intro_street"]=> string(29) "ลาดพร้าว 101 "
             * ["province_id"]=> string(1) "1"
             * ["district_id"]=> string(1) "1"
             * ["sub_district"]=> string(24) "คลองจั่น"
             * ["postal_code"]=> string(5) "10240"
             * ["address_type"]=> string(1) "2"
             * ["job_apply_id"]=> string(1) "1"
             * ["user_id"]=> string(2) "99" ["employee_id"]=> string(2) "99" ["family_id"]=> string(2) "99" }
             */
            if ($result_paddr["district_id"] == 0 || $result_paddr["district_id"] == 9999) {
                $set_district = '';
            } else {
                $set_district = $this->utility->get_data_amphur_name_by_id($result_paddr["district_id"]);
            }
            if ($result_paddr["province_id"] == 0) {
                $set_province = '';
            } else {
                $set_province = $this->utility->get_data_province_name_by_id($result_paddr["province_id"]);
            }
            $set_haddr_no           = $result_haddr["intro_number"];
            $set_haddr_road         = $result_haddr["intro_street"];
            $set_haddr_sub_district = $result_haddr["sub_district"];
            $set_haddr_district     = $set_district;
            $set_haddr_province     = $set_province;
            $set_haddr_postal_code  = $result_haddr["postal_code"];
            //$set_paddr_postal_code = '';
        } else {

            $set_haddr_no           = '-';
            $set_haddr_road         = '-';
            $set_haddr_sub_district = '-';
            $set_haddr_district     = '-';
            $set_haddr_province     = '-';
            $set_haddr_postal_code  = '-';
        }

        $html .= '
        <tr style="vertical-align:top">
            <td width="13%">ที่อยู่ทะเบียนบ้าน<br>&nbsp;Register Add.
            </td>
            <td width="11%" class="text-normal">' . $set_haddr_no . '
            </td>
            <td width="10%">ถนน<br>&nbsp;Street
            </td>
            <td width="25%" class="text-normal">' . $set_haddr_road . '
            </td>
            <td width="10%">ตำบล/แขวง<br>&nbsp;Sub District
            </td>
            <td width="10%" class="text-normal">' . $set_haddr_sub_district . '
            </td>
            <td width="10%">อำเภอ/เขต<br>&nbsp;District
            </td>
            <td width="10%" class="text-normal">' . $set_haddr_district . '
            </td>
        </tr>';


        

        $html .= '
            <tr>
                <td width="8%">จังหวัด<br>&nbsp;Province
                </td>
                <td width="16%" class="text-normal">' . $set_haddr_province . '
                </td>
                <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
                </td>
                <td width="10%" class="text-normal">' . $set_haddr_postal_code . '
                </td>
            </tr>
        
        </table>';

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
        );

        $result_emc = $this->app_frm_model->get_emc_by_job_apply_id($set_arr);
        //var_dump($result_emc);
        //exit;
        //echo gettype($result_emc);
        //exit;
        if ($result_emc) {

            //var_dump($result_emc);
            //echo $result_emc[0]->Id;
            //exit;

            if ($result_paddr["district_id"] == 0) {
                $set_emc_district = '';
            } else {
                $set_emc_district = $this->utility->get_data_amphur_name_by_id($result_emc[0]->emc_district);
            }
            if ($result_paddr["province_id"] == 0) {
                $set_emc_province = '';
            } else {
                $set_emc_province = $this->utility->get_data_province_name_by_id($result_emc[0]->emc_province);
            }
            $html .= '
            <h3>ในกรณีฉุกเฉินติดต่อ/Emergency Contact</h3>
            <table width="100%" cellspacing="0">
                <tr>
                    <td width="8%">ชื่อ-สกุล<br>&nbsp;Name
                    </td>
                    <td width="16%" class="text-normal">' . $result_emc[0]->emc_first_name . ' ' . $result_emc[0]->emc_last_name . '
                    </td>
                    <td width="10%">ความสัมพันธ์<br>&nbsp;Relationship
                    </td>
                    <td width="7%" class="text-normal">' . $result_emc[0]->emc_relation . '
                    </td>
                    <td width="8%" >ที่อยู่<br>&nbsp;Address
                    </td>
                    <td width="32%" class="text-normal" >' . $result_emc[0]->emc_address . ' ' . $result_emc[0]->emc_sub_district . ' ' . $set_emc_district . ' ' . $set_emc_province . ' ' . $result_emc[0]->emc_postal_code . '
                    </td>
                    <td width="7%">โทรศัพท์<br>&nbsp;Tel.
                    </td>
                    <td width="12%" class="text-normal">' . $result_emc[0]->emc_telephone . '
                    </td>
                </tr>
              
            </table>';

        } else {

            $html .= '
            <h3>ในกรณีฉุกเฉินติดต่อ/Emergency Contact</h3>
            <table width="99%" cellspacing="0">
            <tr>
                <td width="8%">ชื่อ-สกุล<br>&nbsp;Name
                </td>
                <td width="16%" class="text-normal">
                </td>
                <td width="10%">ความสัมพันธ์<br>&nbsp;Relationship
                </td>
                <td width="7%" class="text-normal">
                </td>
                <td width="8%" >ที่อยู่<br>&nbsp;Address
                </td>
                <td width="32%" class="text-normal" >
                </td>
                <td width="7%">โทรศัพท์<br>&nbsp;Tel.
                </td>
                <td width="12%" class="text-normal">
                </td>
            </tr>
            </table>';
        }
        $set_arr = array(
            "job_apply_id" => $job_apply_id,
        );

        $result_fi = $this->app_frm_model->get_fi_by_job_apply_id($set_arr);
        //echo gettype ($result_fi);
        //-//var_dump($result_fi);
        //-//echo "<br/><hr/><br/>";
        //-//echo "<br/><hr/><br/>";

        //exit;
        $set_fi = array(
            // self
            "1" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // ft father
            "2" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // mt mother
            "3" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // bs barther or sister
            "4" => array(
                "1" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "2" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "3" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "4" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "5" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
            ),
            // sp Spouse
            "5" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
        );
        if (gettype($result_fi) == "array") {
            $cnt = 0;
            //-//echo "arr cnt = " . count($result_fi);
            //-//echo "<br/>";
            //echo "<br/><hr/><br/>";
            $cnt_bs = 1;
            foreach ($result_fi as $key => $val) {
                //-//echo "loop no = " . $cnt . "<hr/>";
                //echo $key . " > " . gettype($val) . "<br/>";

                //echo var_dump($result_fi[$key]);

                //echo "<br/><hr/><br/>";

                $cnt_row = 0;
                foreach ($result_fi[$key] as $key2 => $val2) {

                    if ($key2 == "fi_family_type") {

                        switch ($val2) {
                        case "1":
                            //-//echo "self";
                            break;
                        case "2":
                            //$set_fi[2]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[2]["fi_age"]                 = $result_fi[$key]->fi_age;
                            if (isset($set_fi["fi_title_name"]) && $set_fi["fi_title_name"] != "") {
                                $set_fi[2]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            }
                            else {
                                $set_fi[2]["fi_title_name"]  = '';
                            }
                            $set_fi[2]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            $set_fi[2]["fi_full_name"]           = $result_fi[$key]->fi_full_name;
                            $set_fi[2]["fi_occupation_position"] = $result_fi[$key]->fi_occupation_position;
                            $set_fi[2]["fi_company"]             = $result_fi[$key]->fi_company;
                            $set_fi[2]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[2]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            break;
                        case "3":
                            //$set_fi[3]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[3]["fi_age"]                 = $result_fi[$key]->fi_age;
                            if (isset($set_fi["fi_title_name"]) && $set_fi["fi_title_name"] != "") {
                                $set_fi[3]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            }
                            else {
                                $set_fi[3]["fi_title_name"]  = '';
                            }
                            $set_fi[3]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            $set_fi[3]["fi_full_name"]           = $result_fi[$key]->fi_full_name;
                            $set_fi[3]["fi_occupation_position"] = $result_fi[$key]->fi_occupation_position;
                            $set_fi[3]["fi_company"]             = $result_fi[$key]->fi_company;
                            $set_fi[3]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[3]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            break;
                        case "4":
                            //echo $cnt_bs . $result_fi[$key]->fi_full_name;
                            //echo "<hr/>";
                            //$set_fi[4][$cnt_bs]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[4][$cnt_bs]["fi_age"]                 = $result_fi[$key]->fi_age;
                            if (isset($set_fi["fi_title_name"]) && $set_fi["fi_title_name"] != "") {
                                $set_fi[4]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            }
                            else {
                                $set_fi[4]["fi_title_name"]  = '';
                            }
                            $set_fi[4][$cnt_bs]["fi_full_name"]           = $result_fi[$key]->fi_full_name;
                            $set_fi[4][$cnt_bs]["fi_occupation_position"] = $result_fi[$key]->fi_occupation_position;
                            $set_fi[4][$cnt_bs]["fi_company"]             = $result_fi[$key]->fi_company;
                            $set_fi[4][$cnt_bs]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[4][$cnt_bs]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            $cnt_bs++;
                            break;
                        case "5":

                            //$set_fi[5]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[5]["fi_age"]                 = $result_fi[$key]->fi_age;
                            if (isset($set_fi["fi_title_name"]) && $set_fi["fi_title_name"] != "") {
                                $set_fi[5]["fi_title_name"]          = $result_fi[$key]->fi_title_name;
                            }
                            else {
                                $set_fi[5]["fi_title_name"]  = '';
                            }
                            $set_fi[5]["fi_full_name"]           = $result_fi[$key]->fi_full_name;
                            $set_fi[5]["fi_occupation_position"] = $result_fi[$key]->fi_occupation_position;
                            $set_fi[5]["fi_company"]             = $result_fi[$key]->fi_company;
                            $set_fi[5]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[5]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            break;
                        }
                        //echo $cnt_row . ". " . $key2 . " > " . $val2 . "<br/>";
                        //-//echo "<hr/>";
                    }
                    $cnt_row++;
                }
                /*
                //switch()
                job_apply_id
                user_id
                employee_id
                fi_full_name
                fi_age
                fi_contact_no
                fi_occupation_position
                fi_company
                fi_family_type
                 */
                //$set_arr_fi
                //echo $key . " > " . $val . "<br/>";
                $cnt++;
            }
        } else {

        }
        //-//exit;
        
        $html .= '
        <br><br><br><h3>ข้อมูลทางครอบครัว/Family information</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="18%" align="center">รายละเอียดทางครอบครัว<br>Family Details
                </td>
                <td width="23%" align="center">ชื่อ – นามสกุล<br>Name – Last Name
                </td>
                <td width="7%" align="center">อายุ<br>Age
                </td>
                <td width="18%" align="center">อาชีพ / ตำแหน่ง<br>Occupation / Position
                </td>
                <td width="18%" align="center">บริษัท<br>Company
                </td>
                <td width="16%" align="center">เบอร์ติดต่อ<br>Contact No.
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">คู่สมรส/Spouse
                </td>
                <td width="23%" class="text-normal">';
        $html .= $this->data_format($set_fi[5]["fi_full_name"], '-');
        $html .= '
                </td>
                <td width="7%" class="text-normal">';
        $html .= $this->data_format($set_fi[5]["fi_age"], '0');
        $html .= '
                </td>
                <td width="18%" class="text-normal">' . $this->data_format($set_fi[5]["fi_occupation_position"], '-') . '
                </td>
                <td width="18%" class="text-normal">' . $this->data_format($set_fi[5]["fi_company"], '-') . '
                </td>
                <td width="16%" class="text-normal">' . $this->data_format($set_fi[5]["fi_contact_no"], '-') . '
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">บิดา/Father
                </td>
                <td width="23%" class="text-normal">' . $set_fi[2]["fi_full_name"] . '
                </td>
                <td width="7%" class="text-normal">' . $set_fi[2]["fi_age"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[2]["fi_occupation_position"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[2]["fi_company"] . '
                </td>
                <td width="16%" class="text-normal">' . $set_fi[2]["fi_contact_no"] . '
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">มารดา/Mother
                </td>
                <td width="23%" class="text-normal">' . $set_fi[3]["fi_full_name"] . '
                </td>
                <td width="7%" class="text-normal">' . $set_fi[3]["fi_age"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[3]["fi_occupation_position"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[3]["fi_company"] . '
                </td>
                <td width="16%" class="text-normal">' . $set_fi[3]["fi_contact_no"] . '
                </td>
            </tr>';
        // if ($set_fi[4][1]["fi_full_name"] == '') {
        //     $set_fi1 = '';
        // } else {
        //     $set_fi1 = '1. ' . $set_fi[4][1]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="18%" rowspan="5" align="center">พี่น้อง/Brothers<br>Sisters
        //         </td>
        //         <td width="23%" class="text-normal">' . $set_fi1 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][1]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][1]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][1]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][1]["fi_contact_no"] . '
        //         </td>
        //     </tr>';

        // if ($set_fi[4][2]["fi_full_name"] == '') {
        //     $set_fi2 = '';
        // } else {
        //     $set_fi2 = '2. ' . $set_fi[4][2]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi2 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][2]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][2]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][2]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][2]["fi_contact_no"] . '
        //         </td>
        //     </tr>';

        // if ($set_fi[4][3]["fi_full_name"] == '') {
        //     $set_fi3 = '';
        // } else {
        //     $set_fi3 = '3. ' . $set_fi[4][3]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi3 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][3]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][3]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][3]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][3]["fi_contact_no"] . '
        //         </td>
        //     </tr>';
        // if ($set_fi[4][4]["fi_full_name"] == '') {
        //     $set_fi4 = '';
        // } else {
        //     $set_fi4 = '4. ' . $set_fi[4][4]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi4 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][4]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][4]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][4]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][4]["fi_contact_no"] . '
        //         </td>
        //     </tr>';
        // if ($set_fi[4][5]["fi_full_name"] == '') {
        //     $set_fi5 = '';
        // } else {
        //     $set_fi5 = '5. ' . $set_fi[4][5]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi5 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][5]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][5]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][5]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][5]["fi_contact_no"] . '
        //         </td>
        //     </tr>
        // ';
        $html .= '</table>';

        // $fi_num_child = $result["fi_num_child"];
        // $fi_num_son   = $result["fi_num_son"];
        // $fi_num_dou   = $result["fi_num_dou"];
        // $fi_num_study = $result["fi_num_study"];

        // $html .= '
        // <table width="100%" cellpadding="3">
        //     <tr>
        //         <td width="27%">จำนวนบุตรทั้งหมด (คน)
        //         </td>
        //         <td width="25%">จำนวนบุตรชาย (คน)
        //         </td>
        //         <td width="27%">จำนวนบุตรหญิง (คน)
        //         </td>
        //         <td width="21%">กำลังศึกษา (คน)
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="17%">Number of Children
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_child . '
        //         </td>
        //         <td width="15%">Number of Son
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_son . '
        //         </td>
        //         <td width="17%">Number of Daughter
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_dou . '
        //         </td>
        //         <td width="11%">Under study
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_study . '
        //         </td>
        //     </tr>
        // </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #2
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page #2
        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        $set_arr_edu = array(
            "job_apply_id" => $job_apply_id,
        );
        $set_order = "edu_degree ASC, Id DESC";
        $set_sort  = "ASC";

        $result_edu  = $this->app_frm_model->get_edu_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        $result_eduf = $this->app_frm_model->get_edu_fix_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        $result_edud = $this->app_frm_model->get_edu_add_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        //var_dump($result_eduf);

        //exit;
        /*
        if (gettype($result_edu) == "array") {
        $cnt_edu = 0;
        foreach($result_edu as $key => $val) {
        //var_dump($val);
        //echo $key . " > " . $result_edu[$cnt_edu]->fix_fag . "<br/>";
        //echo $result_edu[$cnt_edu] . " > " . $result_edu[$key] . "<br/>";
        $set_edu[$cnt_edu]["edu_degree"]    = $result_edu[$cnt_edu]->edu_degree;
        $set_edu[$cnt_edu]["edu_year_from"] = $this->date_format($result_edu[$cnt_edu]->edu_year_from);
        $set_edu[$cnt_edu]["edu_year_to"]   = $this->date_format($result_edu[$cnt_edu]->edu_year_to);
        $set_edu[$cnt_edu]["edu_gpa"]       = $result_edu[$cnt_edu]->edu_gpa;
        $set_edu[$cnt_edu]["edu_institute"] = $result_edu[$cnt_edu]->edu_institute;
        $set_edu[$cnt_edu]["edu_faculty"]   = $result_edu[$cnt_edu]->edu_faculty;
        $set_edu[$cnt_edu]["edu_major"]     = $result_edu[$cnt_edu]->edu_major;
        $set_edu[$cnt_edu]["fix_fag"]       = $result_edu[$cnt_edu]->fix_fag;
        $cnt_edu++;
        }
        }
         */
        $html .=
            '<h3>ประวัติการศึกษา/Education</h3>
        <table width="100%" cellpadding="5" border="0.7">
            <tr>
                <td width="20%" rowspan="2" align="center">ระดับการศึกษา<br>Degree
                </td>
                <td width="18%" align="center">ระยะเวลา (พ.ศ.)<br>Period
                </td>
                <td width="22%" rowspan="2" align="center">สถานการศึกษา<br>Institute
                </td>
                <td width="15%" rowspan="2" align="center">คณะ<br>Faculty
                </td>
                <td width="16%" rowspan="2" align="center">สาขา<br>Major
                </td>
                <td width="9%" rowspan="2" align="center">เกรดเฉลี่ย<br>GPA
                </td>
            </tr>
            <tr>
                <td width="9%" align="center">ตั้งแต่<br>From
                </td>
                <td width="9%" align="center">ถึง<br>To
                </td>
            </tr>';
        $cnt         = 0;
        $degree_list = $this->utility->get_degree_arr();
        /*
        <td width="20%"  style="text-align:center" class="text-normal">' . $set_degree . '
        </td>
        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]->edu_year_from) . '
        </td>
        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]->edu_year_to) . '
        </td>
        <td width="22%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_institute . '
        </td>
        <td width="15%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_faculty . '
        </td>
        <td width="16%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_major . '
        </td>
        <td width="9%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_gpa
         */
        //edu_institute edu_faculty edu_major edu_gpa set_degree

        $set_tmp_data = array(

        );
        $set_arr_eduf = array(
            "0" => array(
                "edu_degree"    => '1',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "1" => array(
                "edu_degree"    => '1',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "2" => array(
                "edu_degree"    => '3',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "3" => array(
                "edu_degree"    => '4',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
        );
        $set_arr_edud = array();
        $cnt_eduf     = count($result_eduf);
        //exit;
        $cnt_edud   = count($set_arr_edud);
        $limit_edud = 3;
        /*
        foreach($result_eduf as $key => $val ) {
        $result_eduf[$key]->degree
        }
         */
        //echo gettype ($result_eduf);
        //exit;
        for ($cnt = 0; $cnt < 7; $cnt++) {

            if ($cnt < 4) {
                $set_degree = $cnt + 1;
                if (isset($result_eduf) && $result_eduf != false) {
                    foreach ($result_eduf as $key => $obj) {
                        if ($result_eduf[$key]->edu_degree == $set_degree) {
                            //$set_arr_eduf[$cnt] = $obj;
                            //var_dump($obj);
                            foreach ($obj as $obj_key => $val) {
                                $set_arr_eduf[$cnt][$obj_key] = $val;
                            }
                        }
                    }
                }
            }
            /*
            if (isset($result_eduf[$cnt]) ) {
            foreach($result_eduf as $key => $val ) {
            if ($result_eduf[$key]->edu_degree == ($cnt + 1)) {
            //var_dump($val);
            $set_arr_eduf[$cnt] = $val;
            }
            }
            }
             */
            if ($cnt > 3) {
                if (isset($result_edud)) {
                }
            }
        }
        /**/
        //var_dump($set_arr_eduf);
        //exit;
        $set_limit_edud = 0;
        for ($cnt_row = 0; $cnt_row < 7; $cnt_row++) {
            $cnt_edu = 0;
            if ($cnt_row < 4) {
                if (isset($set_arr_eduf[$cnt_row])) {

                    $set_degree = $degree_list[$set_arr_eduf[$cnt_row]["edu_degree"]]["th"];

                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center" class="text-normal">' . $set_degree . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]["edu_year_from"]) . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]["edu_year_to"]) . '
                        </td>
                        <td width="22%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]["edu_institute"] . '
                        </td>
                        <td width="15%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]["edu_faculty"] . '
                        </td>
                        <td width="16%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]["edu_major"] . '
                        </td>
                        <td width="9%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]["edu_gpa"] . '
                        </td>
                    </tr>';
                } else {
                    $set_degree = $degree_list[($cnt_row + 1)]["th"];

                    $html .= '
                    <tr>
                        <td width="20%">' . $set_degree . '
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="22%"  style="text-align:center">
                        </td>
                        <td width="15%"  style="text-align:center">
                        </td>
                        <td width="16%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                    </tr>';
                }

            }

            if ($cnt_row > 3) {

                if (isset($result_edud[$set_limit_edud]) && $set_limit_edud < 3) {

                    $set_degree = $degree_list[$result_edud[$set_limit_edud]->edu_degree]["th"];

                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center" class="text-normal">' . $set_degree . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($result_edud[$set_limit_edud]->edu_year_from) . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($result_edud[$set_limit_edud]->edu_year_to) . '
                        </td>
                        <td width="22%"  style="text-align:center" class="text-normal">' . $result_edud[$set_limit_edud]->edu_institute . '
                        </td>
                        <td width="15%"  style="text-align:center" class="text-normal">' . $result_edud[$set_limit_edud]->edu_faculty . '
                        </td>
                        <td width="16%"  style="text-align:center" class="text-normal">' . $result_edud[$set_limit_edud]->edu_major . '
                        </td>
                        <td width="9%"  style="text-align:center" class="text-normal">' . $result_edud[$set_limit_edud]->edu_gpa . '
                        </td>
                    </tr>';
                    $set_limit_edud++;
                    /**/
                } else {
                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center">-
                        </td>
                        <td width="9%"  style="text-align:center">-
                        </td>
                        <td width="9%"  style="text-align:center">-
                        </td>
                        <td width="22%"  style="text-align:center">-
                        </td>
                        <td width="15%"  style="text-align:center">-
                        </td>
                        <td width="16%"  style="text-align:center">-
                        </td>
                        <td width="9%"  style="text-align:center">-
                        </td>
                    </tr>';
                }
            }
        }
        $html .= '
        </table>
        <br>
        <h3>ประวัติการฝึกอบรม-สัมมนา/Training-Seminar</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="40%" align="center">หลักสูตร<br>Courses
                </td>
                <td width="30%" align="center">สถาบัน<br>Institute
                </td>
                <td width="13%" align="center">วุฒิบัตร<br>Certificate
                </td>
                <td width="17%" align="center">ระยะเวลา<br>Period
                </td>
            </tr>';

        $set_arr_ts = array(
            "job_apply_id" => $job_apply_id,
        );
        $set_edu = array(
            "1" => array(),
            "2" => array(),
            "3" => array(),
            "4" => array(),
        );
        $cnt_result_ts = 0;
        $result_ts     = $this->app_frm_model->get_ts_by_job_apply_id($set_arr_ts);
        //echo $result_ts;
        //var_dump($result_ts);
        for ($cnt = 0; $cnt < 4; $cnt++) {

            if (gettype($result_ts) == "array") {

                $cnt_result_ts = count($result_ts);

                if ($cnt < $cnt_result_ts) {

                    $html .= '
                    <tr>
                        <td width="40%" class="text-normal">' . $result_ts[$cnt]->ts_courses . '
                        </td>
                        <td width="30%" class="text-normal">' . $result_ts[$cnt]->ts_institute . '
                        </td>
                        <td width="13%" class="text-normal">' . $result_ts[$cnt]->ts_certificate . '
                        </td>
                        <td width="17%" class="text-normal">' . $result_ts[$cnt]->ts_period . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                    <tr>
                        <td width="40%">
                        </td>
                        <td width="30%">
                        </td>
                        <td width="13%">
                        </td>
                        <td width="17%">
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                <tr>
                    <td width="40%">
                    </td>
                    <td width="30%">
                    </td>
                    <td width="13%">
                    </td>
                    <td width="17%">
                    </td>
                </tr>';
            }
        }

        $html .= '
        </table>
        <br>
        <h3>ทักษะความชำนาญ/Skill</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="20%" rowspan="2" align="center">ความสามารถทางภาษา<br>Language Proficiency
                </td>
                <td width="80%" colspan="4" align="center">ระบุ Specify:  พอใช้ Fair / ดี Good / ดีมาก Excellent
                </td>
            </tr>
            <tr>
                <td width="20%" align="center">พูด  Speaking
                </td>
                <td width="20%" align="center">อ่าน  Reading
                </td>
                <td width="20%" align="center">เขียน  Writing
                </td>
                <td width="20%" align="center">ฟัง  Listening
                </td>
            </tr>';
/*
lg_language
lg_speaking
lg_reading
lg_writing
lg_listening
job_apply_id
user_id
employee_id
 */
        $set_arr_lg = array(
            "job_apply_id" => $job_apply_id,
        );
        $cnt_result_lg = 0;
        $result_lg     = $this->app_frm_model->get_lg_by_job_apply_id($set_arr_lg);

        for ($cnt = 0; $cnt < 4; $cnt++) {

            if (gettype($result_lg) == "array") {

                $cnt_result_lg = count($result_lg);

                if ($cnt < $cnt_result_lg) {

                    switch ($result_lg[$cnt]->lg_speaking) {
                    case 1:$lg_speaking = "พอใช้";
                        break;
                    case 2:$lg_speaking = "ดี";
                        break;
                    case 3:$lg_speaking = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_reading) {
                    case 1:$lg_reading = "พอใช้";
                        break;
                    case 2:$lg_reading = "ดี";
                        break;
                    case 3:$lg_reading = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_writing) {
                    case 1:$lg_writing = "พอใช้";
                        break;
                    case 2:$lg_writing = "ดี";
                        break;
                    case 3:$lg_writing = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_reading) {
                    case 1:$lg_listening = "พอใช้";
                        break;
                    case 2:$lg_listening = "ดี";
                        break;
                    case 3:$lg_listening = "ดีมาก";
                        break;
                    }

                    $html .= '
                    <tr>
                        <td width="20%" align="center" class="text-normal">' . $result_lg[$cnt]->lg_language . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . $lg_speaking . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . $lg_reading . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . $lg_writing . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . $lg_listening . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                     <tr>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                 <tr>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                </tr>';
            }
        }

        $lg_toeic_point         = $result["lg_toeic_point"];
        $lg_toefl_point         = $result["lg_toefl_point"];
        $lg_others_lang_name_1  = $result["lg_others_lang_name_1"];
        $lg_others_lang_point_1 = $result["lg_others_lang_point_1"];

        $html .= '
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td>คะแนนทดสอบความสามารถด้านภาษาฯ</td>
            </tr>
            <tr>
                <td width="10%">TOEIC
                </td>
                <td width="8%" class="text-normal">' . $lg_toeic_point . '
                </td>
                <td width="12%">คะแนน/Score
                </td>
                <td width="10%">TOEFL
                </td>
                <td width="8%" class="text-normal">' . $lg_toefl_point . '
                </td>
                <td width="12%">คะแนน/Score
                </td>
                <td width="10%">อื่นๆ / Other
                </td>
                <td width="10%" class="text-normal">' . $lg_others_lang_name_1 . '
                </td>
                <td width="8%" class="text-normal">' . $lg_others_lang_point_1 . '
                </td>
                <td width="12%"> คะแนน/Score
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="100%">ทักษะทางด้านคอมพิวเตอร์/Computer literate
                </td>
            </tr>';
        $set_arr_sk_com = array(
            "job_apply_id" => $job_apply_id,
        );
        $cnt_result_sk_com = 0;
        $result_sk_com     = $this->app_frm_model->get_sk_com_by_job_apply_id($set_arr_sk_com);

        for ($cnt = 0; $cnt < 3; $cnt++) {

            if (gettype($result_sk_com) == "array") {

                $cnt_result_sk_com = count($result_sk_com);

                if ($cnt < $cnt_result_sk_com) {

                    switch ($result_sk_com[$cnt]->cs_level) {
                    case 1:$cs_level = "พอใช้";
                        break;
                    case 2:$cs_level = "ดี";
                        break;
                    case 3:$cs_level = "ดีมาก";
                        break;
                    }

                    $html .= '
                    <tr>
                        <td width="80%" class="text-normal">' . $result_sk_com[$cnt]->cs_computer . '
                        </td>
                        <td width="20%" class="text-normal">' . $cs_level . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                    <tr>
                        <td width="80%" class="text-normal">-
                        </td>
                        <td width="20%" class="text-normal">-
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                    <tr>
                        <td width="80%" class="text-normal">-
                        </td>
                        <td width="20%" class="text-normal">-
                        </td>
                    </tr>';
            }
        }

        $sk_others  = $result["sk_others"];
        $sk_hobbies = $result["sk_hobbies"];
        $html .= '
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="100%">ความสามารถพิเศษอื่นๆ
                </td>
            </tr>
            <tr>
                <td width="12%">Other Skills
                </td>
                <td width="87%" class="text-normal">' . $sk_others . '
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="100%">กีฬา - งานอดิเรก
                </td>
            </tr>
            <tr>
                <td width="14%">Sports – Hobbies
                </td>
                <td width="86%" class="text-normal">' . $sk_hobbies . '
                </td>
            </tr>
        </table>';

        $vh_car_have    = $result["vh_car_have"];
        $vh_car_license = $result["vh_car_license"];
        $vh_mtc_have    = $result["vh_mtc_have"];
        $vh_mtc_license = $result["vh_mtc_license"];
        $vh_pub_license    = $result["vh_pub_license"];
        $vh_dri_license = $result["vh_dri_license"];

        $set_vh_car_have = array("0" => "o", "1" => "o");
        $set_vh_mtc_have = array("0" => "o", "1" => "o");

        if ($vh_car_have) {
            $set_vh_car_have["1"] = "3";
        } else {
            $set_vh_car_have["0"] = "3";
        }

        if ($vh_mtc_have) {
            $set_vh_mtc_have["1"] = "3";
        } else {
            $set_vh_mtc_have["0"] = "3";
        }

        if ($vh_car_license == "") {
            $vh_car_license = "-";
        }
        if ($vh_mtc_license == "") {
            $vh_mtc_license = "-";
        }

        $html .= '
        <table width="100%" cellspacing="0" cellpadding="3" class="box">
            <tr>
                <td width="100%">ท่านมีรถยนต์ / จักรยานยนต์ส่วนตัวที่สามารถนำมาใช้ในงานของบริษัทหรือไม่?
                </td>
            </tr>
            <tr>
                <td width="50%">Do you have own car / motorcycle available for company business?
                </td>
                <td width="20%">รถยนต์ / Car
                </td>
                <td width="4%"><span class="check-mark">' . $set_vh_car_have["1"] . '</span>
                </td>
                <td width="10%">มี / Yes
                </td>
                <td width="4%"><span class="check-mark">' . $set_vh_car_have["0"] . '</span>
                </td>
                <td width="22%">ไม่มี / No
                </td>
            </tr>
           
            <tr>
                <td width="50%">
                </td>
                <td width="20%">จักรยานยนต์ / Motorcycle
                </td>
                <td width="4%"><span class="check-mark">' . $set_vh_mtc_have["1"] . '</span>
                </td>
                <td width="10%">มี / Yes
                </td>
                <td width="4%"><span class="check-mark">' . $set_vh_mtc_have["0"] . '</span>
                </td>
                <td width="22%">ไม่มี / No
                </td>
            </tr>
            
            <tr>
                <td width="24%">เลขที่ใบอนุญาตขับขี่/License No.
                </td>
                <td width="11%">รถยนต์/Car
                </td>
                <td width="20%" class="text-normal">' . $vh_car_license . '
                </td>
                <td width="19%">มอเตอร์ไซค์/Motorcycle
                </td>
                <td width="22%" class="text-normal">' . $vh_mtc_license . '
                </td>
            </tr>
            <tr>
                <td width="24%">เลขที่ใบขับขี่สาธารณะ/Public No.
                </td>
                <td width="11%">
                </td>
                <td width="20%" class="text-normal">' . $vh_pub_license . '
                </td>
                <td width="22%">เลขที่ใบขับขี่บุคคล/Driver’s No.
                </td>
                <td width="5%">
                </td>
                <td width="22%" class="text-normal">' . $vh_dri_license . '
                </td>
            </tr>
        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #3
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page #3
        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        // job experice

        $set_arr_expw = array(
            "job_apply_id" => $job_apply_id,
            "expw_order"   => '1',
        );

        $result_expw = $this->app_frm_model->get_expw_by_job_apply_id($set_arr_expw);
        if (gettype($result_expw) == "array") {

            $set_to_date = '';
            if ($result_expw[0]->expw_topre == "1") {
                $set_to_date = 'present';
            } else {
                $set_to_date = $this->date_format($result_expw[0]->expw_to);
            }
            $html .=
            '<h3>ประวัติการทำงาน/Work Experiences</h3>
            <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                <tr height="100px">
                    <td width="50%" rowspan="8" class="text-normal">
                        <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก </span> ' . $this->date_format($result_expw[0]->expw_from) . ' <span style="font-weight: bold; ">ถึง </span> ' . $set_to_date . ' <br>
                        <span style="font-weight: bold; ">บริษัท/Company</span> ' . $result_expw[0]->expw_comp . ' <br>
                        <span style="font-weight: bold; ">ที่อยู่/Address</span> ' . $result_expw[0]->expw_addr . ' <br>
                        <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> ' . $result_expw[0]->expw_biz . ' <br>
                        <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> ' . $result_expw[0]->expw_uboss . ' <br>
                        <span style="font-weight: bold; ">เบอร์ติดต่อ</span> ' . $result_expw[0]->expw_tel . '<br>
                        <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> ' . $result_expw[0]->expw_realea . ' <br>
                    </td>
                    <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span><br><br><br>' . $result_expw[0]->expw_position . '
                    </td>
                    <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span><br><br><br>' . $this->set_curr_display($result_expw[0]->expw_salary) . '
                    </td>
                    <td width="15%" align="center" class="text-normal" ><span style="font-weight: bold;">ค่าเดินทาง Travelling Expense</span><br><br>' . $result_expw[0]->expw_expense . '
                    </td>
                </tr>
                <tr>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>' . $result_expw[0]->expw_ot . '
                    </td>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>' . $result_expw[0]->expw_incentive . '
                    </td>
                    <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>' . $result_expw[0]->expw_bonus . '
                    </td>
                    <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>' . $result_expw[0]->expw_others . '
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="50%" height="90px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span> ' . $result_expw[0]->expw_desc . '
                    </td>
                </tr>
            </table>';
        } else {

            $html .=
                '<h3>ประวัติการทำงาน/Work Experiences</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr height="100px">
                <td width="50%" rowspan="8" class="text-normal">
                    <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก (From)</span> <span style="font-weight: bold; ">ถึง (To)</span> <br>
                    <span style="font-weight: bold; ">บริษัท/Company</span> <br>
                    <span style="font-weight: bold; ">ที่อยู่/Address</span> <br>
                    <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> <br>
                    <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> <br>
                    <span style="font-weight: bold; ">เบอร์ติดต่อ</span> <br>
                    <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> <br>
                </td>
                <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br><br>
                </td>
                <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br><br>
                </td>
                <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าเดินทาง Travelling Expense</span><br><br>
                </td>
            </tr>
            <tr>
                <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>
                </td>
                <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>
                </td>
                <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>
                </td>
                <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>
                </td>
            </tr>
            <tr>
                <td width="50%" colspan="50%" height="70px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span>
                </td>
            </tr>
        </table>';
        }

        $set_arr_expw0 = array(
            "job_apply_id" => $job_apply_id,
            "expw_order >" => '1',
        );

        $result_expw0 = $this->app_frm_model->get_expw_by_job_apply_id($set_arr_expw0);

        //var_dump($result_expw0);

        for ($cnt = 0; $cnt < 2; $cnt++) {

            if (gettype($result_expw0) == "array") {

                $cnt_result_expw0 = count($result_expw0);

                if ($cnt < $cnt_result_expw0) {

                    $html .= '
                    <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                        <tr>
                            <td width="50%" rowspan="8" height="100px" class="text-normal">
                                <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก </span> ' . $this->date_format($result_expw0[$cnt]->expw_from) . ' <span style="font-weight: bold; ">ถึง </span> ' . $this->date_format($result_expw0[$cnt]->expw_to) . '<br>
                                <span style="font-weight: bold; ">บริษัท/Company</span> ' . $result_expw0[$cnt]->expw_comp . ' <br>
                                <span style="font-weight: bold; ">ที่อยู่/Address</span> ' . $result_expw0[$cnt]->expw_addr . ' <br>
                                <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> ' . $result_expw0[$cnt]->expw_biz . ' <br>
                                <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> ' . $result_expw0[$cnt]->expw_realea . ' <br>
                            </td>
                            <td width="30%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br>' . $result_expw0[$cnt]->expw_position . '<br>
                            </td>
                            <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br>' . $this->set_curr_display($result_expw0[$cnt]->expw_salary) . '<br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" colspan="50%" height="70px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span> ' . $result_expw0[$cnt]->expw_desc . '
                            </td>
                        </tr>
                    </table>';
                } else {
                    $html .= '
                    <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                        <tr>
                            <td width="50%" rowspan="8" height="100px" class="text-normal">
                                <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก (From)</span>  <span style="font-weight: bold; ">ถึง (To)</span>  <br>
                                <span style="font-weight: bold; ">บริษัท/Company</span> <br>
                                <span style="font-weight: bold; ">ที่อยู่/Address</span> <br>
                                <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> <br>
                                <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> <br>
                            </td>
                            <td width="30%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br><br>
                            </td>
                            <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" colspan="50%" height="70px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span>
                            </td>
                        </tr>
                    </table>';
                }
            } else {
                $html .= '
                <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                    <tr>
                        <td width="50%" rowspan="8" height="100px" class="text-normal">
                            <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก (From)</span>  <span style="font-weight: bold; ">ถึง (To)</span>  <br>
                                <span style="font-weight: bold; ">บริษัท/Company</span> <br>
                                <span style="font-weight: bold; ">ที่อยู่/Address</span> <br>
                                <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> <br>
                                <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> <br>
                            </td>
                            <td width="30%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br><br>
                            </td>
                            <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" colspan="50%" height="110px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span>
                            </td>
                    </tr>
                </table>';
            }
        }

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #4
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page additional_information

        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        $addi_ill            = $result["addi_ill"];
        $addi_ill_desc       = $result["addi_ill_desc"];
        $addi_arrested       = $result["addi_arrested"];
        $addi_discharged     = $result["addi_discharged"];
        $addi_employed       = $result["addi_employed"];
        $addi_employed_desc  = $result["addi_employed_desc"];
        $addi_relatives      = $result["addi_relatives"];
        $addi_relatives_desc = $result["addi_relatives_desc"];

        $arr_addi_ill        = array("0" => "o", "1" => "o");
        $arr_addi_arrested   = array("0" => "o", "1" => "o");
        $arr_addi_discharged = array("0" => "o", "1" => "o");
        $arr_addi_employed   = array("0" => "o", "1" => "o");
        $arr_addi_relatives  = array("0" => "o", "1" => "o");

        //echo $addi_ill;
        if ($addi_ill == '1') {
            //echo "addi == 1";
            $arr_addi_ill["1"] = "3";
        } else {
            //echo "addi == 0";
            $arr_addi_ill["0"] = "3";
        }
        //exit;
        if ($addi_arrested == '1') {
            $arr_addi_arrested["1"] = "3";
        } else {
            $arr_addi_arrested["0"] = "3";
        }

        if ($addi_discharged == '1') {
            $arr_addi_discharged["1"] = "3";
        } else {
            $arr_addi_discharged["0"] = "3";
        }

        if ($addi_employed == '1') {
            $arr_addi_employed["1"] = "3";
        } else {
            $arr_addi_employed["0"] = "3";
        }

        if ($addi_relatives == '1') {
            $arr_addi_relatives["1"] = "3";
        } else {
            $arr_addi_relatives["0"] = "3";
        }

        $html .=
            '<h3>ข้อมูลเพิ่มเติม/Additional Information</h3>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="56%">ท่านเคยป่วยหนักและเป็นโรคติดต่อร้ายแรงมาก่อนหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_ill["1"] . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_ill["0"] . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been seriously ill or contracted with contagious disease?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="30%">ถ้าเคยโปรดระบุชื่อโรค/If yes, please identify
                </td>
                <td width="70%" class="text-normal">' . $addi_ill_desc . '
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านเคยต้องโทษทางอาญาหรือจำคุกหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_arrested["1"] . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_arrested["0"] . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been arrested of convicted for any offense or crime?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านเคยถูกให้ออกจากงานหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_discharged["1"] . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_discharged["0"] . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been discharged from employment?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="43%">ท่านเคยเป็นพนักงานบริษัทในเครือ CMO Group มาก่อนหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_employed["1"] . '</span>
                </td>
                <td width="9%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_employed["0"] . '</span>
                </td>
                <td width="10%">ไม่เคย
                </td>
                <td width="30%">ถ้าเคย เมื่อไร?
                </td>
            </tr>
            <tr>
                <td width="47%">Have you ever been employed by CMO Group before?
                </td>
                <td width="13%">Yes
                </td>
                <td width="10%">No
                </td>
                <td width="11%">If yes, when?
                </td>
                <td width="19%" class="text-normal">' . $addi_employed_desc . '
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านมีคนรู้จักหรือญาติที่ทำงานในเครือบริษัทฯ นี้หรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_relatives["1"] . '</span>
                </td>
                <td width="10%">มี
                </td>
                <td width="4%"><span class="check-mark">' . $arr_addi_relatives["0"] . '</span>
                </td>
                <td width="28%">ไม่มี
                </td>
            </tr>
            <tr>
                <td width="60%">Do you have relatives and/or friends who have been working in CMO Group?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="25%">ถ้ามีโปรดระบุ/If yes, please identify
                </td>
                <td width="75%" class="text-normal">' . $addi_relatives_desc . '
                </td>
            </tr>
        </table>';

        $ref_name_1     = $result["ref_name_1"];
        $ref_comp_1     = $result["ref_comp_1"];
        $ref_position_1 = $result["ref_position_1"];
        $ref_contact_1  = $result["ref_contact_1"];
        $ref_name_2     = $result["ref_name_2"];
        $ref_comp_2     = $result["ref_comp_2"];
        $ref_position_2 = $result["ref_position_2"];
        $ref_contact_2  = $result["ref_contact_2"];
        $info_yourself  = $result["info_yourself"];

        $addi_relatives_desc = $result["addi_relatives_desc"];
        $html .= '
        <h3>บุคคลอ้างอิง/Reference (ไม่ใช่บุคคลในครอบครัวหรือญาติ)</h3>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="25%">ชื่อ – นามสกุล /Name – Last Name
                </td>
                <td width="25%" class="text-normal">' . $ref_name_1 . '
                </td>
                <td width="15%">บริษัท/ Company
                </td>
                <td width="35%" class="text-normal">' . $ref_comp_1 . '
                </td>
            </tr>
            <tr>
                <td width="15%">ตำแหน่ง/Position
                </td>
                <td width="35%" class="text-normal">' . $ref_position_1 . '
                </td>
                <td width="20%">เบอร์ติดต่อ/Contact No
                </td>
                <td width="30%" class="text-normal">' . $ref_contact_1 . '
                </td>
            </tr>
            <tr>
                <td width="25%">ชื่อ – นามสกุล /Name – Last Name
                </td>
                <td width="25%" class="text-normal">' . $ref_name_2 . '
                </td>
                <td width="15%">บริษัท/ Company
                </td>
                <td width="35%" class="text-normal">' . $ref_comp_2 . '
                </td>
            </tr>
            <tr>
                <td width="15%">ตำแหน่ง/Position
                </td>
                <td width="35%" class="text-normal">' . $ref_position_2 . '
                </td>
                <td width="20%">เบอร์ติดต่อ/Contact No
                </td>
                <td width="30%" class="text-normal">' . $ref_contact_2 . '
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td>
                    <h4>แนะนำตัวท่านเองเพื่อให้บริษัทฯ รู้จักท่านมากขึ้น</h4>
                </td>
            </tr>
            <tr>
                <td class="text-normal"> Please provide any further information about yourself which will allow our company to know you better
                </td>
            </tr>
            <tr>
                <td width="100%" height="210px" class="text-normal">' . $info_yourself . '
                </td>
            </tr>
            <tr>
                <td width="100%"><div style="text-align: justify; text-indent: 30px;">ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้ เป็นความจริงถูกต้องและสมบูรณ์ทุกประการ หลังจากบริษัทฯ จ้างเข้าทำงานแล้ว ปรากฎว่า ข้อความใน ใบสมัครงาน เอกสารที่นำมาแสดงหรือรายละเอียดที่ให้ไว้ไม่เป็นความจริง บริษัทฯ มีสิทธิที่จะเลิกจ้างข้าพเจ้าได้ โดยไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใด ๆ ทั้งสิ้น</div>
                </td>
            </tr>
            <tr>
                <td width="100%" height="80px" class="text-normal"><div style="text-align: justify; text-indent: 30px;">I certify that all statement given in this application form is true. If any is found to be untrue after engagement, the company has the right to terminate my employment without any compensation or severance pay whatsoever.</div>
                </td>
            </tr>
            <tr>
                <td width="60%">
                </td>
                <td width="30%" align="center">...........................................................................
                </td>
            </tr>
            <tr>
                <td width="60%">
                </td>
                <td width="30%" align="center">ลายมือชื่อผู้สมัคร  Applicant’s Signature
                </td>
            </tr>
        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #5
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, $app_no, 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Logo
        $pdf->Image('assets/img/logo.png', 10, 9, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

        // Page #5
        $pdf->SetXY(11, 28);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        
        $refc_candidate_name    = $result["refc_candidate_name"];
        $refc_company_name      = $result["refc_company_name"];
        $refc_last_position     = $result["refc_last_position"];
        $refc_last_salary       = $result["refc_last_salary"];
        $refc_last_fixed_income = $result["refc_last_fixed_income"];
        $refc_highest_degree    = $result["refc_highest_degree"];
        $refc_major             = $result["refc_major"];
        $refc_institute_name    = $result["refc_institute_name"];
        //echo $set_title_id;
        //echo gettype($set_title_id);
        //exit;
        $result_title_list = $this->utility->get_title_list($set_title_id);
        //echo gettype($result_title_list);
        //var_dump($result_title_list);
        //echo count($result_title_list);
        //exit;

        //echo $set_title_id;
        //echo gettype($set_title_id);
        //exit;
        if ($set_title_id != null && $set_title_id != '0') {

            $set_title_name = $result_title_list->title_name_th;
            $title_list     = $this->utility->get_title_list();
        } else {
            $set_title_name = '';
        }

        $html .=
        '
        <table width="100%" cellspacing="0" cellpadding="5">
            <tr>
                <td width="100%" align="center">
                    <h2>รับทราบและยินยอมให้ตรวจสอบประวัติผู้สมัครงาน</h2>
                    <h2 style="text-decoration: underline">Reference Checked Acknowledge by Candidate</h2>
                </td>
            </tr>
            <tr>
                <td width="100%" class="text-normal" style="font-size: 13px;">
                    <div style="text-align: justify; text-indent: 20px;">
                    CMO Group ขอแจ้งให้ผู้สมัครงานทราบว่า บริษัทฯ จะทำการตรวจสอบ ประวัติการทำงานของท่านจากนายจ้างเดิม ประวัติอาชญากรรม ประวัติการศึกษา รวมถึง ตรวจสอบข้อความอื่นใดที่ท่านได้กรอกไว้ในเอกสารการสมัครงาน และเอกสารอื่นๆ ที่ใช้ในการสมัครงาน เพื่อเป็นข้อมูลประกอบการ พิจารณารับท่านเข้าทำงานกับบริษัทฯ
                    </div>
                    <div style="text-align: justify; text-indent: 45px;">อนึ่ง หากปรากฎว่า บริษัทฯ พบความไม่ถูกต้องตรงกันหรือเป็นเท็จจากการตรวจสอบดังกล่าว หรือท่านมีประวัติการทำงาน จากนายจ้างเดิมที่ไม่เหมาะสมและเป็นอุปสรรคต่อการทำงานในตำแหน่งงานนั้นๆ บริษัทฯ ขอสงวนสิทธิ์ที่จะไม่รับพิจารณาท่านเข้าทำงาน หรือหากตรวจสอบพบภายหลังจากบริษัทฯ ได้รับท่านเข้าทำงานแล้ว บริษัทฯ มีสิทธิ์ที่จะเลิกจ้างท่านโดยไม่จ่ายเงินชดเชยหรือค่าเสียหาย ใดๆ ทั้งสิ้น
                    </div>
                </td>
            </tr>
        </table>
        <h4>กรุณากรอกข้อมูลเบื้องต้นในการตรวจสอบประวัติของท่าน :</h4>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7" style="font-size: 11px;">
            <tr>
                <td width="45%">ชื่อผู้สมัครงาน / Candidate Name:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_candidate_name . '
                </td>
            </tr>
            <tr>
                <td width="45%">ชื่อบริษัทเดิม (ล่าสุด)  / Company Name:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_company_name . '
                </td>
            </tr>
            <tr>
                <td width="45%">ตำแหน่ง (ล่าสุด)   / Latest  Position:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_last_position . '
                </td>
            </tr>
            <tr>
                <td width="45%">อัตราเงินเดือน (ล่าสุด)   / Latest Salary: (บาท / เดือน)
                </td>
                <td width="55%" height="27px" class="text-normal">' . $this->set_curr_display($refc_last_salary) . '
                </td>
            </tr>
            <tr>
                <td width="45%">เงินได้ประจำอื่น (ล่าสุด) / Latest Fixed Income: (บาท/เดือน)
                </td>
                <td width="55%" height="27px" class="text-normal">' . $this->set_curr_display($refc_last_fixed_income) . '
                </td>
            </tr>
            <tr>
                <td width="45%">วุฒิการศึกษาระดับสูงสุด   / Highest Degree :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_highest_degree . '
                </td>
            </tr>
            <tr>
                <td width="45%">สาขาวิชาเอก  / Major :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_major . '
                </td>
            </tr>
            <tr>
                <td width="45%">สถาบันที่จบการศึกษา / Institute Name :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_institute_name . '
                </td>
            </tr>
        </table>
        <table cellpadding="1" style="font-size: 11px;">
            <tr>
                <td width="100%" height="50px" class="text-normal">ขอขอบคุณเป็นอย่างยิ่งที่ท่านได้ให้ความร่วมมือในกรอกข้อมูลเบื้องต้น  และการรับทราบข้อความดังกล่าวข้างต้น
                </td>
            </tr>
            <tr>
                <td width="30%">
                </td>
                <td width="70%" align="center">ลงชื่อรับทราบ.................................................................................ผู้สมัครงาน/ผู้ให้ความยินยอม
                </td>
            </tr>
            <tr>
                <td width="20%">
                </td>
                <td width="80%" align="center">( ' . $set_title_name . ' ' . $set_full_name_th . ' )</td>
            </tr>
            <tr>
                <td width="100%">
                </td>
            </tr>
            <tr>
                <td width="20%">
                </td>
                <td width="80%" align="center">วันที่.........................................................................
                </td>
            </tr>
        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        $pdf->Output('Application_Form_' . $job_apply_id . '.pdf', 'I');
    }

    public function pdf_empty() {
        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }
        //var_dump($this->session->userdata('user_ss'));
        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        //$baseurl = "http://warpevent.com";
        $baseurl = "https://career.cmo-group.com";
        // $baseurl = "http://localhost";
        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment

        if ($data_resp["seg2"] == "pdf_empty") {
            $set_id = $data_resp["seg3"];
        }
        //var_dump($data_resp);

        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);

        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];

        $current_year = date("Y");
        $data_yy1     = substr($current_year, -2);
        $app_no       = 'No. ' . $current_year . '-' . $set_id;
        $set_digit    = '';
        $get_strlen   = strlen((string) $set_id);
        if ($get_strlen < 4) {
            if ($get_strlen == 1) {
                $set_digit = "000";
            }
            if ($get_strlen == 2) {
                $set_digit = "00";

            }
            if ($get_strlen == 3) {
                $set_digit = "0";
            }
            if ($get_strlen == 4) {
                $set_digit = "";
            }
        }

        $app_no = $data_yy1 . "-" . $set_digit . $set_id;
        /*

        $get_strlen = strlen((string)$this->data_resp["get_job_apply_id"]);
        if($get_strlen < 4) {
        if($get_strlen == 1) {
        $set_digit = "000";
        }
        if($get_strlen == 2) {
        $set_digit = "00";

        }
        if($get_strlen == 3) {
        $set_digit = "0";
        }
        if($get_strlen == 4) {
        $set_digit = "";
        }
        }
        $set_job_code = "" . $data_yy1 . "-" . $set_digit . $this->data_resp["get_job_apply_id"];

         */

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Application for Employee : ' );
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(2);
        $pdf->setFooterMargin(15);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 5, 5, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(118, 10);
        $pdf->Cell(30, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        // for HR

        $pdf->SetFont('freeserif', 'BU', '11');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(50, 5, 100, 28, 4, '1111');
        $pdf->SetXY(52, 12);
        $pdf->Cell(30, 0, 'สำหรับเจ้าหน้าที่', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(52, 20);
        $pdf->SetFont('freeserif', 'B', '11');
        $pdf->Cell(30, 0, 'รับผู้สมัครเข้าทํางาน สําหรับ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(52, 27);
        $pdf->Cell(30, 100, 'บริษัท', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(65, 27);

        $pdf->SetFont('freeserif', '', '11');

        $company_list = '';
        //echo $result["apply_comp_id"];
        //var_dump($company_list[$result["apply_comp_id"]]);
        if (isset($company_list[$result["apply_comp_id"]]["en"])) {
            $set_company = '';
        } else {
            $set_company = '';
        }
        $set_apply_comp_id = $set_company;
        //$pdf->Cell(30, 100, '?บริษัท?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_apply_comp_id, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        // Photo
        /**/
        /*
        // --- Method (A) ------------------------------------------
        // the Image() method recognizes the alpha channel embedded on the image:
        //$img_file = "aon.jpg";

        $pdf->Image('assets/uploads/applys/pic_tmp/' . $img_file, 157, 5, 40, '', '', '', '', false, 300);
         */

//        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        //        //$img_file = "aon.jpg";
        //        $img_file = $result["file_pic"];
        //        $this->check_file_exit($img_file);
        //        $filename = 'assets/uploads/applys/pic_tmp/' . $img_file;
        //$img_file = '';
        $img_file = (isset($result["file_pic"]) ? $result["file_pic"] : 'nopic.png');
        if (isset($result["file_pic"]) && $result["file_pic"] == "20170711_152607.jpeg") {
            $img_file = 'nopic.png';
        }
        $filename = 'assets/uploads/applys/pic_tmp/' ;
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetFont('freeserif', 'B', '11');
        if ($img_file != '') {

            $pdf->Image($filename, 159, 7, 36, 45, '', '', '', false, 300);
            $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
            $pdf->RoundedRect(155, 5, 45, 50, 0, '');
            $pdf->SetXY(162, 28);
            $pdf->SetXY(162, 34);
            $pdf->SetXY(162, 40);
            //$pdf->Cell(30, 0, '2"', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        } else {

            $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
            $pdf->RoundedRect(155, 5, 45, 50, 0, '');
            $pdf->SetXY(162, 28);
            $pdf->Cell(30, 0, 'รูปถ่าย', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
            $pdf->SetXY(162, 34);
            $pdf->Cell(30, 0, 'Photo', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
            $pdf->SetXY(162, 40);
            $pdf->SetFont('freeserif', 'B', '8');
            $pdf->Cell(30, 0, '2"', 0, 1, 'C', 0, '', 0, false, 'L', 'B');

        }
        // Age Weight Height
        // Set param [Age weight height]

        $set_age = '';
        //$set_age    = $result["age"];
        $set_weight = '';
        $set_height = '';
        //$set_age_1;

        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(155, 55, 15, 18, 0, '');
        $pdf->SetXY(148, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'อายุ', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(148, 65);
        $pdf->Cell(30, 100, 'Age', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(148, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_age, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(170, 55, 15, 18, 0, '');
        $pdf->SetXY(163, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'น้ำหนัก', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(163, 65);
        $pdf->Cell(30, 100, 'Weight', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(163, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_weight, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetLineStyle(array('width' => 0.35, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->RoundedRect(185, 55, 15, 18, 0, '');
        $pdf->SetXY(178, 60);
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->Cell(30, 0, 'ส่วนสูง', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(178, 65);
        $pdf->Cell(30, 100, 'Height', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(178, 71);
        $pdf->SetFont('freeserif', '', '8');
        //$pdf->Cell(30, 100, '??', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_height, 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        // Header
        $pdf->SetFont('freeserif', 'B', '13');
        $pdf->SetXY(80, 40);
        $pdf->Cell(30, 0, 'ใบสมัครงาน', 0, 1, 'C', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(80, 47);
        $pdf->Cell(30, 100, 'Application for Employment', 0, 1, 'C', 0, '', 0, false, 'L', 'B');

        // Subheader

        $set_date_apply     = '';
        $set_date_available = '';
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(15, 55);
        $pdf->Cell(30, 0, 'วันที่', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(15, 60);
        $pdf->Cell(30, 100, 'Date', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(25, 60);
        $pdf->SetFont('freeserif', '', '9');
        //$pdf->Cell(30, 100, '?Date?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_date_apply, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(95, 55);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'สามารถเริ่มงานภายใน', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(95, 60);
        $pdf->Cell(30, 100, 'Available Date', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(120, 60);
        $pdf->SetFont('freeserif', '', '9');
        //$pdf->Cell(30, 100, '?Available Date?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->Cell(30, 100, $set_date_available, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetLineStyle(array('width' => 0.6, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->line(15, 63, 151, 63, '');

        $pdf->SetXY(15, 68);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'ตำแหน่งที่ต้องการสมัคร', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(15, 73);
        $pdf->Cell(30, 100, 'Apply for the Position', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        // $pdf->SetXY(48, 67);
        $pdf->SetFont('freeserif', '', '8');

        $apply_position_name = '';

        $set_posi_re = '';

        $pdf->MultiCell(47, 10, $set_posi_re, 0, 'L', 0, 1, 48, 65.5, true, 0, false, true, 0, 'B');
        $pdf->SetXY(95, 68);
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->Cell(30, 0, 'เงินเดือนที่ต้องการ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(95, 73);
        $pdf->Cell(30, 100, 'Expected Salary', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->SetXY(120, 73);
        $pdf->SetFont('freeserif', '', '9');

        //echo $result["apply_saraly_req"];
        //exit;
        $set_apply_saraly_req = '';
        //$pdf->Cell(30, 100, '?Expected Salary?', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->Cell(30, 100, $set_apply_saraly_req, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        // Page #1
        // Rectangle Frame
        $pdf->SetLineStyle(array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        // $pdf->RoundedRect(10, 76, 190, 214, 0, '');
        // $pdf->RoundedRect(10, 76, 190, 135.5, 0, '');
        $pdf->RoundedRect(10, 76, 190, 162, 0, '');
        $pdf->SetXY(9, 78);
        $pdf->SetFont('freeserif', 'B', '8');

        $set_arr_title = array(
            "1"  => "นาย",
            "2"  => "นางสาว",
            "3"  => "นาง",
            "4"  => "ดร.",
            "99" => "อื่นๆ",
        );
        $set_arr_title_en = array(
            "1"  => "Mr.",
            "2"  => "Miss",
            "3"  => "Mrs.",
            "4"  => "Dr.",
            "99" => "Others",
        );

        $job_apply_id = $result["Id"];
        $set_title_id = $result["title_id"];
        //echo $set_title_id;
        //exit;
        $set_str_title    = '';
        $set_str_title_en = '';

        if ($set_title_id == '') {
            $title_list = '';
            $set_str_title .= '<span style="" >' . '' . '</span>/';
            $set_str_title .= '<span style="" >' . '' . '</span>/';
            $set_str_title .= '<span style="" >' . '' . '</span>/';
            $set_str_title_en .= '<span style="" >' . '' . '</span>/';
            $set_str_title_en .= '<span style="" >' . '' . '</span>/';
            $set_str_title_en .= '<span style="" >' . '' . '</span>/';
        } else {
            $result_title_list = $this->utility->get_title_list($set_title_id);
            if ($result_title_list != null) {
                $set_title_name = '';
                $title_list     = '';
            } else {
                $set_title_name = '';
            }

            //var_dump($result_title_list->title_name_th);

            for ($cnt = 1; $cnt < 4; $cnt++) {
                if ($set_title_id == $cnt) {
                    $set_str_title .= '<span >' . $set_arr_title[$cnt] . '</span>/';
                } else {
                    $set_str_title .= '<span >' . $set_arr_title[$cnt] . '</span>/';
                }
            }
            for ($cnt = 1; $cnt < 4; $cnt++) {
                if ($set_title_id == $cnt) {
                    $set_str_title_en .= '<span>' . $set_arr_title_en[$cnt] . '</span>/';
                } else {
                    $set_str_title_en .= '<span>' . $set_arr_title_en[$cnt] . '</span>/';
                }
            }

        }

        //var_dump($set_str_title);
        $set_title_name    = substr($set_str_title, 0, (strlen($set_str_title) - 1));
        $set_title_name_en = substr($set_str_title_en, 0, (strlen($set_str_title_en) - 1));
        //exit;

        $set_first_name_th = '';
        $set_last_name_th  = '';
        $set_full_name_th  = '';
        $set_nick_name_th  = '';
        $set_first_name_en = '';
        $set_last_name_en  = '';
        $set_full_name_en  = '';
        $set_nick_name_en  = '';

        //echo $result["date_birth"];
        //exit;
        if ($result["date_birth"] == '0000-00-00 00:00:00') {

            $set_day           = '';
            $arr_date_birth[0] = '-';
            $arr_date_birth[1] = '-';
            $arr_date_birth[2] = '-';
        } else {

            $set_set_date_birth  = $result["date_birth"];
            $arr_date_time_birth = explode(" ", $set_set_date_birth);
            $arr_date_birth      = explode("-", $arr_date_time_birth[0]);

            //$set_yesr_th  = intval($arr_date_birth[0]) - intval(543);
            $set_yesr_th = intval($arr_date_birth[0]);
            $string      = (string) $set_yesr_th . "-" . $arr_date_birth[1] . "-" . $arr_date_birth[2];
            //$string  = $arr_date_birth[0] . "-" . $arr_date_birth[1] . "-" . $arr_date_birth[2];

            $date = DateTime::createFromFormat("Y-m-d", $string);
            //echo $string;
            //echo "<br/>";
            //echo $date->format("D");

            $set_day = $this->arr_day_th[$date->format("D")];
        }
        //$set_day = "recheck;";

        $set_province_birth_id = '';
        $set_nationality_id    = '';
        $set_nationality_name  = '';

        $set_nationality_id   = '';
        $set_nationality_name = '';

        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        // $html = '';
        // $html .=
        // '<h3>ข้อมูลส่วนตัว</h3>
        // <table width="99%" cellspacing="0" border="0">
        //     <tr>
        //         <td width="15%">ชื่อ-นามสกุล:</td>
        //         <td width="20%" class="text-normal">' . $set_title_name . '</td>
        //         <td width="30%" class="text-normal">' . $set_full_name_th . '</td>
        //         <td width="10%">ชื่อเล่น</td>
        //         <td width="20%" class="text-normal">' . $set_nick_name_th . '</td>
        //     </tr>
        //     <tr>
        //         <td width="15%">Name-Surname:</td>
        //         <td width="20%" class="text-normal">' . $set_title_name_en . '</td>
        //         <td width="30%" class="text-normal">' . $set_full_name_en . '</td>
        //         <td width="10%">Nickname</td>
        //         <td width="20%" class="text-normal">' . $set_nick_name_en . '</td>
        //     </tr>
        //     <tr>
        //         <td width="18%">เกิดวัน</td>
        //         <td width="10%">วันที่</td>
        //         <td width="20%">เดือน</td>
        //         <td width="12%">ปี</td>
        //         <td width="22%">เกิดจังหวัด</td>
        //         <td width="18%">สัญชาติ</td>
        //     </tr>
        //     <tr>
        //         <td width="10%">Birth of day
        //         </td>
        //         <td width="8%" class="text-normal">' . $set_day . '
        //         </td>
        //         <td width="6%">Date
        //         </td>
        //         <td width="4%" class="text-normal">' . $arr_date_birth[2] . '
        //         </td>
        //         <td width="8%">Month
        //         </td>
        //         <td width="12%" class="text-normal">' . $arr_date_birth[1] . '
        //         </td>
        //         <td width="6%">Year
        //         </td>
        //         <td width="6%" class="text-normal">' . $arr_date_birth[0] . '
        //         </td>
        //         <td width="9%">Province
        //         </td>
        //         <td width="13%" class="text-normal">' . $this->utility->get_data_province_name_by_id($set_province_birth_id) . '
        //         </td>
        //         <td width="10%">Nationality
        //         </td>
        //         <td width="8%" class="text-normal">' . $set_nationality_name . '
        //         </td>
        //     </tr>';


            $html .=
        '
        <p style="color:red;">       ***โปรดให้ข้อมูลตามความเป็นจริง เพื่อประโยชน์ในการพิจารณาคุณสมบัติในการสมัครงาน และการทำงานร่วมกันในอนาคต ข้อมูลนี้จะเก็บเป็นความลับ ตามพรบ. <br>     คุ้มครองข้อมูลส่วนบุคคล***</p>
        <h3>ข้อมูลส่วนตัว</h3>
        <table width="99%" cellspacing="5" border="0">
            <tr>
                <td width="15%">ชื่อ-นามสกุล:</td>
                <td width="20%" class="text-normal">' . $set_title_name . '</td>
                <td width="30%" class="text-normal">' . $set_full_name_th . '</td>
                <td width="10%">ชื่อเล่น</td>
                <td width="20%" class="text-normal">' . $set_nick_name_th . '</td>
            </tr>
            <tr>
                <td width="15%">Name-Surname:</td>
                <td width="20%" class="text-normal">' . $set_title_name_en . '</td>
                <td width="30%" class="text-normal">' . $set_full_name_en . '</td>
                <td width="10%">Nickname</td>
                <td width="20%" class="text-normal">' . $set_nick_name_en . '</td>
            </tr>
            <tr>
                <td width="18%">เกิดวัน</td>
                <td width="10%">วันที่</td>
                <td width="20%">เดือน</td>
                <td width="29%"> ปี</td>
                <td width="10%">สัญชาติ</td><td></td>
            </tr>
            <tr>
                <td width="18%">Birth of day
                </td>
                <td width="10%">Date
                </td>
                <td width="20%">Month
                </td>
                <td width="29%"> Year
                </td>
                <td width="10%">Nationality
                </td>
            </tr>';

        $set_race_id       = '';
        $set_race_name     = '';
        $set_religion_id   = '';
        $set_religion_name = '';

        $set_id_card_passport     = '';
        $set_id_card_issued_date  = $result["id_card_issued_date"];
        $set_id_card_expired_date = $result["id_card_expired_date"];

        $set_arr_issued_datetime = explode(' ', $set_id_card_issued_date);
        $set_arr_issued_date     = explode('-', $set_arr_issued_datetime[0]);
        $set_data_issued_date    = $set_arr_issued_date[2] . "/" . $set_arr_issued_date[2] . "/" . $set_arr_issued_date[0];

        $set_arr_expired_datetime = explode(' ', $set_id_card_expired_date);
        $set_arr_expired_date     = explode('-', $set_arr_expired_datetime[0]);
        $set_data_expired_date    = $set_arr_expired_date[2] . "/" . $set_arr_expired_date[2] . "/" . $set_arr_expired_date[0];

        $html .= '<tr>
                <td width="18%">ศาสนา
                </td>
                <td width="41%">เลขที่บัตรประชาชน /เลขที่หนังสือเดินทาง
                </td>
                <td width="19%">วันที่ออก
                </td>
                <td width="20%">วันหมดอายุ
                </td>
            </tr>
            <tr>
                <td width="18%">Religion
                </td>
                <td width="41%">ID Card no./Passport no.
                </td>
                <td width="19%">Issued Date
                </td>
                <td width="20%">Expired Date
                </td>
            </tr>';

        $set_arr_marital_status  = array(1 => 'o', 2 => 'o', 3 => 'o', 4 => 'o');
        $set_arr_military_status = array(1 => 'o', 2 => 'o', 3 => 'o');

        $set_marital_status = '';

        $set_arr_marital_status[$set_marital_status] = "3";

        $set_military_status = '';

        if ($set_military_status == '') {
            //$set_arr_military_status[0] = "o";
        } else {

            $set_arr_military_status[$set_military_status] = "3";
        }

        $set_military_status_2_txt = '';
        $set_military_status_3_txt = '';

        $html .= '<tr>
                <td width="14%">สถานภาพการสมรส
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="12%">โสด
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="15%">แต่งงาน
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="15%">หม้าย
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="15%">หย่า
                </td>
            </tr>
            <tr>
                <td width="18%">Marital Status
                </td>
                <td width="15%">Single
                </td>
                <td width="19%"> Married
                </td>
                <td width="19%">Widowed
                </td>
                <td width="15%">Divorced
                </td>
            </tr>
            <tr>
                <td width="14%">สถานภาพทางทหาร
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[1] . '</span>
                </td>
                <td width="12%">เกณฑ์ทหารแล้ว
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[2] . '</span>
                </td>
                <td width="11%">ยังไม่ได้เกณฑ์
                </td>
                <td width="23%">ถ้ายังถึงกำหนดเมื่อ
                </td>
                <td width="3%"><span class="check-mark">' . $set_arr_military_status[3] . '</span>
                </td>
                <td width="24%">ได้รับการยกเว้นเพราะ
                </td>
            </tr>
            <tr>
                <td width="18%">Military Status
                </td>
                <td width="15%">Yes
                </td>
                <td width="11%"> No
                </td>
                <td width="24%"> If  no, specify when
                </td>
                <td width="25%">If exempted specify reason?
                </td>
            </tr>';

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
            "address_type" => '2',
        );

        $result_paddr = $this->app_frm_model->get_addr_by_job_apply_id($set_arr);
        //var_dump($result_paddr);
        //exit;
        if ($result_paddr) {

            //echo $result_paddr["district_id"];

            if ($result_paddr["district_id"] == 0 || $result_paddr["district_id"] == 9999) {
                $set_district = '';
            } else {
                $set_district = $this->utility->get_data_amphur_name_by_id($result_paddr["district_id"]);
            }

            if ($result_paddr["province_id"] == 0) {
                $set_province = '';
            } else {
                $set_province = $this->utility->get_data_province_name_by_id($result_paddr["province_id"]);
            }

            $set_paddr_no           = '';
            $set_paddr_road         = '';
            $set_paddr_sub_district = '';
            $set_paddr_district     = '';
            $set_paddr_province     = '';
            $set_paddr_postal_code  = '';
            //$set_paddr_postal_code = '';
        } else {

            $set_paddr_no           = '-';
            $set_paddr_road         = '-';
            $set_paddr_sub_district = '-';
            $set_paddr_district     = '-';
            $set_paddr_province     = '-';
            $set_paddr_postal_code  = '-';
        }

        $set_tel    = '';
        $set_mobile = '';
        $set_email  = '';

        // $html .= '
        //     <tr>
        //         <td width="13%">ที่อยู่ปัจจุบัน
        //         </td>
        //         <td width="8%" >บ้านเลขที่
        //         </td>
        //         <td width="20%" >
        //         </td>
        //         <td width="8%">ถนน/ซอย
        //         </td>
        //         <td width="10%" >
        //         </td>
        //         <td width="10%">ตำบล/แขวง
        //         </td>
        //         <td width="10%" >
        //         </td>
        //         <td width="10%">อำเภอ/เขต
        //         </td>
        //         <td width="10%" >
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="13%">Present Add.
        //         </td>
        //         <td width="8%">Address
        //         </td>
        //         <td width="20%" class="text-normal" align="left" valign="top">' . $set_paddr_no . '
        //         </td>
        //         <td width="8%">Street/Soi
        //         </td>
        //         <td width="10%" class="text-normal" >' . $set_paddr_road . '
        //         </td>
        //         <td width="10%">Sub-District
        //         </td>
        //         <td width="10%" class="text-normal">' . $set_paddr_sub_district . '
        //         </td>
        //         <td width="10%">District
        //         </td>
        //         <td width="10%" class="text-normal">' . $set_paddr_district . '
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="8%">จังหวัด<br>&nbsp;Province
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_paddr_province . '
        //         </td>
        //         <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_paddr_postal_code . '
        //         </td>
        //         <td width="8%">โทรศัพท์<br>&nbsp;Tel.
        //         </td>
        //         <td width="32%" class="text-normal">' . $set_tel . '
        //         </td>
        //         <td width="7%">มือถือ<br>&nbsp;Mobile
        //         </td>
        //         <td width="12%" class="text-normal">' . $set_mobile . '
        //         </td>
        //     </tr>
        //    ';

           
        $html .= '
        <tr style="vertical-align:top">
            <td width="13%">ที่อยู่ปัจจุบัน<br>&nbsp;Present Add.
            </td>
            <td width="11%" class="text-normal">' . $set_paddr_no . '
            </td>
            <td width="10%">ถนน<br>&nbsp;Street
            </td>
            <td width="25%" class="text-normal">' . $set_paddr_road . '
            </td>
            <td width="10%">ตำบล/แขวง<br>&nbsp;Sub District
            </td>
            <td width="10%" class="text-normal">' . $set_paddr_sub_district . '
            </td>
            <td width="10%">อำเภอ/เขต<br>&nbsp;District
            </td>
            <td width="10%" class="text-normal">' . $set_paddr_district . '
            </td>
        </tr>';

        $html .= '
            <tr>
                <td width="8%">จังหวัด<br>&nbsp;Province
                </td>
                <td width="16%" class="text-normal">' . $set_paddr_province . '
                </td>
                <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
                </td>
                <td width="25%" class="text-normal">' . $set_paddr_postal_code . '
                </td>
                <td width="10%">โทรศัพท์<br>&nbsp;Tel.
                </td>
                <td width="10%" class="text-normal">' . $set_tel . '
                </td>
                <td width="10%">มือถือ<br>&nbsp;Mobile
                </td>
                <td width="10%" class="text-normal">' . $set_mobile . '
                </td>
            </tr>
        
        ';


 
     
        // email.
        $html .= '
            <tr>
                <td width="8%">อีเมล<br>&nbsp;Email
                </td>
                <td width="92%" class="text-normal">' . $set_email . '
                </td>
            </tr>
           ';

       

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
            "address_type" => '2',
        );

        $result_haddr = $this->app_frm_model->get_addr_by_job_apply_id($set_arr);
        //var_dump($result_paddr);
        //exit;
        if ($result_haddr) {
            //var_dump($result_addr);
            //exit;
            /*
            ["Id"]=> string(1) "1" ["intro_number"]=> string(2) "86"
             * ["intro_street"]=> string(29) "ลาดพร้าว 101 "
             * ["province_id"]=> string(1) "1"
             * ["district_id"]=> string(1) "1"
             * ["sub_district"]=> string(24) "คลองจั่น"
             * ["postal_code"]=> string(5) "10240"
             * ["address_type"]=> string(1) "2"
             * ["job_apply_id"]=> string(1) "1"
             * ["user_id"]=> string(2) "99" ["employee_id"]=> string(2) "99" ["family_id"]=> string(2) "99" }
             */
            if ($result_paddr["district_id"] == 0 || $result_paddr["district_id"] == 9999) {
                $set_district = '';
            } else {
                $set_district = $this->utility->get_data_amphur_name_by_id($result_paddr["district_id"]);
            }
            if ($result_paddr["province_id"] == 0) {
                $set_province = '';
            } else {
                $set_province = $this->utility->get_data_province_name_by_id($result_paddr["province_id"]);
            }
            $set_haddr_no           = '';
            $set_haddr_road         = '';
            $set_haddr_sub_district = '';
            $set_haddr_district     = '';
            $set_haddr_province     = '';
            $set_haddr_postal_code  = '';
            //$set_paddr_postal_code = '';
        } else {

            $set_haddr_no           = '-';
            $set_haddr_road         = '-';
            $set_haddr_sub_district = '-';
            $set_haddr_district     = '-';
            $set_haddr_province     = '-';
            $set_haddr_postal_code  = '-';
        }

        $html .= '
        <tr style="vertical-align:top">
            <td width="13%">ที่อยู่ทะเบียนบ้าน<br>&nbsp;Register Add.
            </td>
            <td width="11%" class="text-normal">' . $set_haddr_no . '
            </td>
            <td width="10%">ถนน<br>&nbsp;Street
            </td>
            <td width="25%" class="text-normal">' . $set_haddr_road . '
            </td>
            <td width="10%">ตำบล/แขวง<br>&nbsp;Sub District
            </td>
            <td width="10%" class="text-normal">' . $set_haddr_sub_district . '
            </td>
            <td width="10%">อำเภอ/เขต<br>&nbsp;District
            </td>
            <td width="10%" class="text-normal">' . $set_haddr_district . '
            </td>
        </tr>';


        

        $html .= '
            <tr>
                <td width="8%">จังหวัด<br>&nbsp;Province
                </td>
                <td width="16%" class="text-normal">' . $set_haddr_province . '
                </td>
                <td width="10%">รหัสไปรษณีย์<br>&nbsp;Postal Code
                </td>
                <td width="10%" class="text-normal">' . $set_haddr_postal_code . '
                </td>
            </tr>
        
        </table>';

        $set_arr = array(
            "job_apply_id" => $job_apply_id,
        );

        $result_emc = $this->app_frm_model->get_emc_by_job_apply_id($set_arr);
        //var_dump($result_emc);
        //exit;
        //echo gettype($result_emc);
        //exit;
        if ($result_emc) {

            //var_dump($result_emc);
            //echo $result_emc[0]->Id;
            //exit;

            if ($result_paddr["district_id"] == 0) {
                $set_emc_district = '';
            } else {
                $set_emc_district = '';
            }
            if ($result_paddr["province_id"] == 0) {
                $set_emc_province = '';
            } else {
                $set_emc_province = '';
            }
            $html .= '
            <h3>ในกรณีฉุกเฉินติดต่อ/Emergency Contact</h3>
            <table width="100%" cellspacing="0">
                <tr>
                    <td width="8%">ชื่อ-สกุล<br>&nbsp;Name
                    </td>
                    <td width="16%" class="text-normal">' . '' . ' ' . '' . '
                    </td>
                    <td width="24%">ความสัมพันธ์<br>&nbsp;Relationship
                    </td>
                    <td width="32%" >ที่อยู่<br>&nbsp;Address
                    </td>
                    <td width="7%">โทรศัพท์<br>&nbsp;Tel.
                    </td>
                    <td width="12%" class="text-normal">' . '' . '
                    </td>
                </tr>
              
            </table>';

        } else {

            $html .= '
            <h3>ในกรณีฉุกเฉินติดต่อ/Emergency Contact</h3>
            <table width="99%" cellspacing="0">
            <tr>
                <td width="8%">ชื่อ-สกุล<br>&nbsp;Name
                </td>
                <td width="16%" class="text-normal">
                </td>
                <td width="20%">ความสัมพันธ์<br>&nbsp;Relationship
                </td>
                <td width="8%" >ที่อยู่<br>&nbsp;Address
                </td>
                <td width="7%">โทรศัพท์<br>&nbsp;Tel.
                </td>
            </tr>
            </table>';
        }
        $set_arr = array(
            "job_apply_id" => $job_apply_id,
        );

        $result_fi = $this->app_frm_model->get_fi_by_job_apply_id($set_arr);
        //echo gettype ($result_fi);
        //-//var_dump($result_fi);
        //-//echo "<br/><hr/><br/>";
        //-//echo "<br/><hr/><br/>";

        //exit;
        $set_fi = array(
            // self
            "1" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // ft father
            "2" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // mt mother
            "3" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
            // bs barther or sister
            "4" => array(
                "1" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "2" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "3" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "4" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
                "5" => array(
                    "fi_full_name"           => '',
                    "fi_age"                 => '',
                    "fi_occupation_position" => '',
                    "fi_company"             => '',
                    "fi_contact_no"          => '',
                    "fi_family_type"         => ''),
            ),
            // sp Spouse
            "5" => array(
                "fi_full_name"           => '',
                "fi_age"                 => '',
                "fi_occupation_position" => '',
                "fi_company"             => '',
                "fi_contact_no"          => '',
                "fi_family_type"         => '',
            ),
        );
        if (gettype($result_fi) == "array") {
            $cnt = 0;
            //-//echo "arr cnt = " . count($result_fi);
            //-//echo "<br/>";
            //echo "<br/><hr/><br/>";
            $cnt_bs = 1;
            foreach ($result_fi as $key => $val) {
                //-//echo "loop no = " . $cnt . "<hr/>";
                //echo $key . " > " . gettype($val) . "<br/>";

                //echo var_dump($result_fi[$key]);

                //echo "<br/><hr/><br/>";

                $cnt_row = 0;
                foreach ($result_fi[$key] as $key2 => $val2) {

                    if ($key2 == "fi_family_type") {

                        switch ($val2) {
                        case "1":
                            //-//echo "self";
                            break;
                        case "2":
                            //$set_fi[2]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[2]["fi_age"]                 = '';
                            $set_fi[2]["fi_title_name"]          = '';
                            $set_fi[2]["fi_full_name"]           = '';
                            $set_fi[2]["fi_occupation_position"] = '';
                            $set_fi[2]["fi_company"]             = '';
                            $set_fi[2]["fi_contact_no"]          = '';
                            $set_fi[2]["fi_family_type"]         = '';

                            break;
                        case "3":
                            //$set_fi[3]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[3]["fi_age"]                 = '';
                            $set_fi[3]["fi_title_name"]          = '';
                            $set_fi[3]["fi_full_name"]           = '';
                            $set_fi[3]["fi_occupation_position"] = '';
                            $set_fi[3]["fi_company"]             = '';
                            $set_fi[3]["fi_contact_no"]          = '';
                            $set_fi[3]["fi_family_type"]         = '';

                            break;
                        case "4":
                            //echo $cnt_bs . $result_fi[$key]->fi_full_name;
                            //echo "<hr/>";
                            //$set_fi[4][$cnt_bs]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[4][$cnt_bs]["fi_age"]                 = '';
                            $set_fi[4][$cnt_bs]["fi_full_name"]           = '';
                            $set_fi[4][$cnt_bs]["fi_occupation_position"] = '';
                            $set_fi[4][$cnt_bs]["fi_company"]             = '';
                            $set_fi[4][$cnt_bs]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[4][$cnt_bs]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            $cnt_bs++;
                            break;
                        case "5":

                            //$set_fi[5]["fi_full_name"]              = $result_fi[$key]->fi_full_name;
                            $set_fi[5]["fi_age"]                 = $result_fi[$key]->fi_age;
                            $set_fi[5]["fi_full_name"]           = $result_fi[$key]->fi_full_name;
                            $set_fi[5]["fi_occupation_position"] = $result_fi[$key]->fi_occupation_position;
                            $set_fi[5]["fi_company"]             = $result_fi[$key]->fi_company;
                            $set_fi[5]["fi_contact_no"]          = $result_fi[$key]->fi_contact_no;
                            $set_fi[5]["fi_family_type"]         = $result_fi[$key]->fi_family_type;

                            break;
                        }
                        //echo $cnt_row . ". " . $key2 . " > " . $val2 . "<br/>";
                        //-//echo "<hr/>";
                    }
                    $cnt_row++;
                }
                /*
                //switch()
                job_apply_id
                user_id
                employee_id
                fi_full_name
                fi_age
                fi_contact_no
                fi_occupation_position
                fi_company
                fi_family_type
                 */
                //$set_arr_fi
                //echo $key . " > " . $val . "<br/>";
                $cnt++;
            }
        } else {

        }
        //-//exit;
        $html .= '
        <br><br><br><h3>ข้อมูลทางครอบครัว/Family information</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="18%" align="center">รายละเอียดทางครอบครัว<br>Family Details
                </td>
                <td width="23%" align="center">ชื่อ – นามสกุล<br>Name – Last Name
                </td>
                <td width="7%" align="center">อายุ<br>Age
                </td>
                <td width="18%" align="center">อาชีพ / ตำแหน่ง<br>Occupation / Position
                </td>
                <td width="18%" align="center">บริษัท<br>Company
                </td>
                <td width="16%" align="center">เบอร์ติดต่อ<br>Contact No.
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">คู่สมรส/Spouse
                </td>
                <td width="23%" class="text-normal">';
        $html .= $this->data_format($set_fi[5]["fi_full_name"], '-');
        $html .= '
                </td>
                <td width="7%" class="text-normal">';
        $html .= $this->data_format($set_fi[5]["fi_age"], '0');
        $html .= '
                </td>
                <td width="18%" class="text-normal">' . $this->data_format($set_fi[5]["fi_occupation_position"], '-') . '
                </td>
                <td width="18%" class="text-normal">' . $this->data_format($set_fi[5]["fi_company"], '-') . '
                </td>
                <td width="16%" class="text-normal">' . $this->data_format($set_fi[5]["fi_contact_no"], '-') . '
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">บิดา/Father
                </td>
                <td width="23%" class="text-normal">' . $set_fi[2]["fi_title_name"] . $set_fi[2]["fi_full_name"] . '
                </td>
                <td width="7%" class="text-normal">' . $set_fi[2]["fi_age"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[2]["fi_occupation_position"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[2]["fi_company"] . '
                </td>
                <td width="16%" class="text-normal">' . $set_fi[2]["fi_contact_no"] . '
                </td>
            </tr>
            <tr>
                <td width="18%" align="center">มารดา/Mother
                </td>
                <td width="23%" class="text-normal">' . $set_fi[3]["fi_title_name"] . $set_fi[3]["fi_full_name"] . '
                </td>
                <td width="7%" class="text-normal">' . $set_fi[3]["fi_age"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[3]["fi_occupation_position"] . '
                </td>
                <td width="18%" class="text-normal">' . $set_fi[3]["fi_company"] . '
                </td>
                <td width="16%" class="text-normal">' . $set_fi[3]["fi_contact_no"] . '
                </td>
            </tr>';
        // if ($set_fi[4][1]["fi_full_name"] == '') {
        //     $set_fi1 = '';
        // } else {
        //     $set_fi1 = '1. ' . $set_fi[4][1]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="18%" rowspan="5" align="center">พี่น้อง/Brothers<br>Sisters
        //         </td>
        //         <td width="23%" class="text-normal">' . $set_fi1 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][1]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][1]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][1]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][1]["fi_contact_no"] . '
        //         </td>
        //     </tr>';

        // if ($set_fi[4][2]["fi_full_name"] == '') {
        //     $set_fi2 = '';
        // } else {
        //     $set_fi2 = '2. ' . $set_fi[4][2]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi2 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][2]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][2]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][2]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][2]["fi_contact_no"] . '
        //         </td>
        //     </tr>';

        // if ($set_fi[4][3]["fi_full_name"] == '') {
        //     $set_fi3 = '';
        // } else {
        //     $set_fi3 = '3. ' . $set_fi[4][3]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi3 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][3]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][3]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][3]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][3]["fi_contact_no"] . '
        //         </td>
        //     </tr>';
        // if ($set_fi[4][4]["fi_full_name"] == '') {
        //     $set_fi4 = '';
        // } else {
        //     $set_fi4 = '4. ' . $set_fi[4][4]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi4 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][4]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][4]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][4]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][4]["fi_contact_no"] . '
        //         </td>
        //     </tr>';
        // if ($set_fi[4][5]["fi_full_name"] == '') {
        //     $set_fi5 = '';
        // } else {
        //     $set_fi5 = '5. ' . $set_fi[4][5]["fi_full_name"];
        // }
        // $html .= '
        //     <tr>
        //         <td width="23%" class="text-normal">' . $set_fi5 . '
        //         </td>
        //         <td width="7%" class="text-normal">' . $set_fi[4][5]["fi_age"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][5]["fi_occupation_position"] . '
        //         </td>
        //         <td width="18%" class="text-normal">' . $set_fi[4][5]["fi_company"] . '
        //         </td>
        //         <td width="16%" class="text-normal">' . $set_fi[4][5]["fi_contact_no"] . '
        //         </td>
        //     </tr>
        // ';
        $html .= '</table>';

        // $fi_num_child = $result["fi_num_child"];
        // $fi_num_son   = $result["fi_num_son"];
        // $fi_num_dou   = $result["fi_num_dou"];
        // $fi_num_study = $result["fi_num_study"];

        // $html .= '
        // <table width="100%" cellpadding="3">
        //     <tr>
        //         <td width="27%">จำนวนบุตรทั้งหมด (คน)
        //         </td>
        //         <td width="25%">จำนวนบุตรชาย (คน)
        //         </td>
        //         <td width="27%">จำนวนบุตรหญิง (คน)
        //         </td>
        //         <td width="21%">กำลังศึกษา (คน)
        //         </td>
        //     </tr>
        //     <tr>
        //         <td width="17%">Number of Children
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_child . '
        //         </td>
        //         <td width="15%">Number of Son
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_son . '
        //         </td>
        //         <td width="17%">Number of Daughter
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_dou . '
        //         </td>
        //         <td width="11%">Under study
        //         </td>
        //         <td width="10%" class="text-normal">' . $fi_num_study . '
        //         </td>
        //     </tr>
        // </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #2
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page #2
        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        $set_arr_edu = array(
            "job_apply_id" => $job_apply_id,
        );
        $set_order = "edu_degree ASC, Id DESC";
        $set_sort  = "ASC";

        $result_edu  = $this->app_frm_model->get_edu_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        $result_eduf = $this->app_frm_model->get_edu_fix_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        $result_edud = $this->app_frm_model->get_edu_add_by_job_apply_id($set_arr_edu, $set_order, $set_sort);
        //var_dump($result_eduf);

        //exit;
        /*
        if (gettype($result_edu) == "array") {
        $cnt_edu = 0;
        foreach($result_edu as $key => $val) {
        //var_dump($val);
        //echo $key . " > " . $result_edu[$cnt_edu]->fix_fag . "<br/>";
        //echo $result_edu[$cnt_edu] . " > " . $result_edu[$key] . "<br/>";
        $set_edu[$cnt_edu]["edu_degree"]    = $result_edu[$cnt_edu]->edu_degree;
        $set_edu[$cnt_edu]["edu_year_from"] = $this->date_format($result_edu[$cnt_edu]->edu_year_from);
        $set_edu[$cnt_edu]["edu_year_to"]   = $this->date_format($result_edu[$cnt_edu]->edu_year_to);
        $set_edu[$cnt_edu]["edu_gpa"]       = $result_edu[$cnt_edu]->edu_gpa;
        $set_edu[$cnt_edu]["edu_institute"] = $result_edu[$cnt_edu]->edu_institute;
        $set_edu[$cnt_edu]["edu_faculty"]   = $result_edu[$cnt_edu]->edu_faculty;
        $set_edu[$cnt_edu]["edu_major"]     = $result_edu[$cnt_edu]->edu_major;
        $set_edu[$cnt_edu]["fix_fag"]       = $result_edu[$cnt_edu]->fix_fag;

        $cnt_edu++;
        }
        }
         */
        $html .=
            '<h3>ประวัติการศึกษา/Education</h3>
        <table width="100%" cellpadding="5" border="0.7">
            <tr>
                <td width="20%" rowspan="2" align="center">ระดับการศึกษา<br>Degree
                </td>
                <td width="18%" align="center">ระยะเวลา (พ.ศ.)<br>Period
                </td>
                <td width="22%" rowspan="2" align="center">สถานการศึกษา<br>Institute
                </td>
                <td width="15%" rowspan="2" align="center">คณะ<br>Faculty
                </td>
                <td width="16%" rowspan="2" align="center">สาขา<br>Major
                </td>
                <td width="9%" rowspan="2" align="center">เกรดเฉลี่ย<br>GPA
                </td>
            </tr>
            <tr>
                <td width="9%" align="center">ตั้งแต่<br>From
                </td>
                <td width="9%" align="center">ถึง<br>To
                </td>
            </tr>';
        $cnt         = 0;
        $degree_list = $this->utility->get_degree_arr();
        /*

        <td width="20%"  style="text-align:center" class="text-normal">' . $set_degree . '
        </td>
        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]->edu_year_from) . '
        </td>
        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . $this->date_format_yr_os2hr($set_arr_eduf[$cnt_row]->edu_year_to) . '
        </td>
        <td width="22%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_institute . '
        </td>
        <td width="15%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_faculty . '
        </td>
        <td width="16%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_major . '
        </td>
        <td width="9%"  style="text-align:center" class="text-normal">' . $set_arr_eduf[$cnt_row]->edu_gpa
         */
        //edu_institute edu_faculty edu_major edu_gpa set_degree

        $set_tmp_data = array(

        );
        $set_arr_eduf = array(
            "0" => array(
                "edu_degree"    => '1',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "1" => array(
                "edu_degree"    => '1',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "2" => array(
                "edu_degree"    => '3',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
            "3" => array(
                "edu_degree"    => '4',
                "edu_year_from" => '',
                "edu_year_to"   => '',
                "edu_faculty"   => '',
                "edu_institute" => '',
                "edu_major"     => '',
                "edu_gpa"       => '',
            ),
        );
        $set_arr_edud = array();
        $cnt_eduf     = count($result_eduf);
        //exit;
        $cnt_edud   = count($set_arr_edud);
        $limit_edud = 3;
        /*
        foreach($result_eduf as $key => $val ) {

        $result_eduf[$key]->degree
        }
         */
        //echo gettype ($result_eduf);
        //exit;
        for ($cnt = 0; $cnt < 7; $cnt++) {

            if ($cnt < 4) {
                $set_degree = $cnt + 1;
                if (isset($result_eduf) && $result_eduf != false) {
                    foreach ($result_eduf as $key => $obj) {
                        if ($result_eduf[$key]->edu_degree == $set_degree) {
                            //$set_arr_eduf[$cnt] = $obj;
                            //var_dump($obj);
                            foreach ($obj as $obj_key => $val) {
                                $set_arr_eduf[$cnt][$obj_key] = $val;
                            }
                        }
                    }
                }
            }
            /*

            if (isset($result_eduf[$cnt]) ) {

            foreach($result_eduf as $key => $val ) {
            if ($result_eduf[$key]->edu_degree == ($cnt + 1)) {
            //var_dump($val);
            $set_arr_eduf[$cnt] = $val;
            }
            }
            }
             */
            if ($cnt > 3) {
                if (isset($result_edud)) {
                }
            }
        }
        /**/
        //var_dump($set_arr_eduf);
        //exit;
        $set_limit_edud = 0;
        for ($cnt_row = 0; $cnt_row < 7; $cnt_row++) {
            $cnt_edu = 0;
            if ($cnt_row < 4) {
                if (isset($set_arr_eduf[$cnt_row])) {

                    $set_degree = '';

                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">'  . '
                        </td>
                        <td width="22%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="15%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="16%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                    </tr>';
                } else {
                    $set_degree = $degree_list[($cnt_row + 1)]["th"];

                    $html .= '
                    <tr>
                        <td width="20%">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="22%"  style="text-align:center">
                        </td>
                        <td width="15%"  style="text-align:center">
                        </td>
                        <td width="16%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                    </tr>';
                }

            }

            if ($cnt_row > 3) {

                if (isset($result_edud[$set_limit_edud]) && $set_limit_edud < 3) {

                    $set_degree = $degree_list[$result_edud[$set_limit_edud]->edu_degree]["th"];

                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center; padding\: 0px\;" class="text-normal">' . '' . '
                        </td>
                        <td width="22%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="15%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="16%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                        <td width="9%"  style="text-align:center" class="text-normal">' . '' . '
                        </td>
                    </tr>';
                    $set_limit_edud++;
                    /**/
                } else {
                    $html .= '
                    <tr>
                        <td width="20%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                        <td width="22%"  style="text-align:center">
                        </td>
                        <td width="15%"  style="text-align:center">
                        </td>
                        <td width="16%"  style="text-align:center">
                        </td>
                        <td width="9%"  style="text-align:center">
                        </td>
                    </tr>';
                }
            }
        }
        $html .= '
        </table>
        <br>
        <h3>ประวัติการฝึกอบรม-สัมมนา/Training-Seminar</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="40%" align="center">หลักสูตร<br>Courses
                </td>
                <td width="30%" align="center">สถาบัน<br>Institute
                </td>
                <td width="13%" align="center">วุฒิบัตร<br>Certificate
                </td>
                <td width="17%" align="center">ระยะเวลา<br>Period
                </td>
            </tr>';

        $set_arr_ts = array(
            "job_apply_id" => $job_apply_id,
        );
        $set_edu = array(
            "1" => array(),
            "2" => array(),
            "3" => array(),
            "4" => array(),
        );
        $cnt_result_ts = 0;
        $result_ts     = $this->app_frm_model->get_ts_by_job_apply_id($set_arr_ts);
        //echo $result_ts;
        //var_dump($result_ts);
        for ($cnt = 0; $cnt < 4; $cnt++) {

            if (gettype($result_ts) == "array") {

                $cnt_result_ts = count($result_ts);

                if ($cnt < $cnt_result_ts) {

                    $html .= '
                    <tr>
                        <td width="40%" class="text-normal">' . $result_ts[$cnt]->ts_courses . '
                        </td>
                        <td width="30%" class="text-normal">' . $result_ts[$cnt]->ts_institute . '
                        </td>
                        <td width="13%" class="text-normal">' . $result_ts[$cnt]->ts_certificate . '
                        </td>
                        <td width="17%" class="text-normal">' . $result_ts[$cnt]->ts_period . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                    <tr>
                        <td width="40%">
                        </td>
                        <td width="30%">
                        </td>
                        <td width="13%">
                        </td>
                        <td width="17%">
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                <tr>
                    <td width="40%">
                    </td>
                    <td width="30%">
                    </td>
                    <td width="13%">
                    </td>
                    <td width="17%">
                    </td>
                </tr>';
            }
        }

        $html .= '
        </table>
        <br>
        <h3>ทักษะความชำนาญ/Skill</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="20%" rowspan="2" align="center">ความสามารถทางภาษา<br>Language Proficiency
                </td>
                <td width="80%" colspan="4" align="center">ระบุ Specify:  พอใช้ Fair / ดี Good / ดีมาก Excellent
                </td>
            </tr>
            <tr>
                <td width="20%" align="center">พูด  Speaking
                </td>
                <td width="20%" align="center">อ่าน  Reading
                </td>
                <td width="20%" align="center">เขียน  Writing
                </td>
                <td width="20%" align="center">ฟัง  Listening
                </td>
            </tr>';
/*
lg_language
lg_speaking
lg_reading
lg_writing
lg_listening
job_apply_id
user_id
employee_id
 */
        $set_arr_lg = array(
            "job_apply_id" => $job_apply_id,
        );
        $cnt_result_lg = 0;
        $result_lg     = $this->app_frm_model->get_lg_by_job_apply_id($set_arr_lg);

        for ($cnt = 0; $cnt < 4; $cnt++) {

            if (gettype($result_lg) == "array") {

                $cnt_result_lg = count($result_lg);

                if ($cnt < $cnt_result_lg) {

                    switch ($result_lg[$cnt]->lg_speaking) {
                    case 1:$lg_speaking = "พอใช้";
                        break;
                    case 2:$lg_speaking = "ดี";
                        break;
                    case 3:$lg_speaking = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_reading) {
                    case 1:$lg_reading = "พอใช้";
                        break;
                    case 2:$lg_reading = "ดี";
                        break;
                    case 3:$lg_reading = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_writing) {
                    case 1:$lg_writing = "พอใช้";
                        break;
                    case 2:$lg_writing = "ดี";
                        break;
                    case 3:$lg_writing = "ดีมาก";
                        break;
                    }
                    switch ($result_lg[$cnt]->lg_reading) {
                    case 1:$lg_listening = "พอใช้";
                        break;
                    case 2:$lg_listening = "ดี";
                        break;
                    case 3:$lg_listening = "ดีมาก";
                        break;
                    }

                    $html .= '
                    <tr>
                        <td width="20%" align="center" class="text-normal">' . '' . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . '' . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . '' . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . '' . '
                        </td>
                        <td width="20%" align="center" class="text-normal">' . '' . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                     <tr>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                        <td width="20%" align="center" class="text-normal">
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                 <tr>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                    <td width="20%" align="center" class="text-normal">
                    </td>
                </tr>';
            }
        }

        $lg_toeic_point         = '';
        $lg_toefl_point         = '';
        $lg_others_lang_name_1  = '';
        $lg_others_lang_point_1 = '';

        $html .= '
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td>คะแนนทดสอบความสามารถด้านภาษาฯ</td>
            </tr>
            <tr>
                <td width="10%">TOEIC
                </td>
                <td width="8%" class="text-normal">' . '' . '
                </td>
                <td width="12%">คะแนน/Score
                </td>
                <td width="10%">TOEFL
                </td>
                <td width="8%" class="text-normal">' .'' . '
                </td>
                <td width="12%">คะแนน/Score
                </td>
                <td width="10%">อื่นๆ / Other
                </td>
                <td width="10%" class="text-normal">' . '' . '
                </td>
                <td width="8%" class="text-normal">' . '' . '
                </td>
                <td width="12%"> คะแนน/Score
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr>
                <td width="100%">ทักษะทางด้านคอมพิวเตอร์/Computer literate
                </td>
            </tr>';
        $set_arr_sk_com = array(
            "job_apply_id" => $job_apply_id,
        );
        $cnt_result_sk_com = 0;
        $result_sk_com     = $this->app_frm_model->get_sk_com_by_job_apply_id($set_arr_sk_com);

        for ($cnt = 0; $cnt < 3; $cnt++) {

            if (gettype($result_sk_com) == "array") {

                $cnt_result_sk_com = count($result_sk_com);

                if ($cnt < $cnt_result_sk_com) {

                    switch ($result_sk_com[$cnt]->cs_level) {
                    case 1:$cs_level = "พอใช้";
                        break;
                    case 2:$cs_level = "ดี";
                        break;
                    case 3:$cs_level = "ดีมาก";
                        break;
                    }

                    $html .= '
                    <tr>
                        <td width="80%" class="text-normal">' . '' . '
                        </td>
                        <td width="20%" class="text-normal">' . '' . '
                        </td>
                    </tr>';
                } else {
                    $html .= '
                    <tr>
                        <td width="80%" class="text-normal">-
                        </td>
                        <td width="20%" class="text-normal">-
                        </td>
                    </tr>';
                }
            } else {
                $html .= '
                    <tr>
                        <td width="80%" class="text-normal">-
                        </td>
                        <td width="20%" class="text-normal">-
                        </td>
                    </tr>';
            }
        }

        $sk_others  = $result["sk_others"];
        $sk_hobbies = $result["sk_hobbies"];
        $html .= '
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="100%">ความสามารถพิเศษอื่นๆ
                </td>
            </tr>
            <tr>
                <td width="12%">Other Skills
                </td>
                <td width="87%" class="text-normal">' . '' . '
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="100%">กีฬา - งานอดิเรก
                </td>
            </tr>
            <tr>
                <td width="14%">Sports – Hobbies
                </td>
                <td width="86%" class="text-normal">' . '' . '
                </td>
            </tr>
        </table>';

        $vh_car_have    = '';
        $vh_car_license = '';
        $vh_mtc_have    = '';
        $vh_mtc_license = '';
        $vh_pub_license    = '';
        $vh_dri_license = '';

        $set_vh_car_have = array("0" => "o", "1" => "o");
        $set_vh_mtc_have = array("0" => "o", "1" => "o");

        if ($vh_car_have) {
            $set_vh_car_have["1"] = "3";
        } else {
            $set_vh_car_have["0"] = "3";
        }

        if ($vh_mtc_have) {
            $set_vh_mtc_have["1"] = "3";
        } else {
            $set_vh_mtc_have["0"] = "3";
        }

        if ($vh_car_license == "") {
            $vh_car_license = "-";
        }
        if ($vh_mtc_license == "") {
            $vh_mtc_license = "-";
        }

        $html .= '
        <table width="100%" cellspacing="0" cellpadding="3" class="box">
            <tr>
                <td width="100%">ท่านมีรถยนต์ / จักรยานยนต์ส่วนตัวที่สามารถนำมาใช้ในงานของบริษัทหรือไม่?
                </td>
            </tr>
            <tr>
                <td width="50%">Do you have own car / motorcycle available for company business?
                </td>
                <td width="20%">รถยนต์ / Car
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="10%">มี / Yes
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="22%">ไม่มี / No
                </td>
            </tr>
           
            <tr>
                <td width="50%">
                </td>
                <td width="20%">จักรยานยนต์ / Motorcycle
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="10%">มี / Yes
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="22%">ไม่มี / No
                </td>
            </tr>
            
            <tr>
                <td width="24%">เลขที่ใบอนุญาตขับขี่/License No.
                </td>
                <td width="11%">รถยนต์/Car
                </td>
                <td width="20%" class="text-normal">' . '' . '
                </td>
                <td width="19%">มอเตอร์ไซค์/Motorcycle
                </td>
                <td width="22%" class="text-normal">' . '' . '
                </td>
            </tr>

            <tr>
                <td width="24%">เลขที่ใบขับขี่สาธารณะ/Public No.
                </td>
                <td width="11%">
                </td>
                <td width="20%" class="text-normal">' . '' . '
                </td>
                <td width="22%">เลขที่ใบขับขี่บุคคล/Driver’s No.
                </td>
                <td width="5%">
                </td>
                <td width="22%" class="text-normal">' . '' . '
                </td>
            </tr>

        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #3
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page #3
        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        // job experice

        $set_arr_expw = array(
            "job_apply_id" => $job_apply_id,
            "expw_order"   => '1',
        );

        $result_expw = $this->app_frm_model->get_expw_by_job_apply_id($set_arr_expw);
        if (gettype($result_expw) == "array") {

            $set_to_date = '';
            if ($result_expw[0]->expw_topre == "1") {
                $set_to_date = 'present';
            } else {
                $set_to_date = $this->date_format($result_expw[0]->expw_to);
            }
            $html .=
            '<h3>ประวัติการทำงาน/Work Experiences</h3>
            <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                <tr height="100px">
                    <td width="50%" rowspan="8" class="text-normal">
                        <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก </span> ' . '' . ' <span style="font-weight: bold; ">ถึง </span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">บริษัท/Company</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ที่อยู่/Address</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">เบอร์ติดต่อ</span> ' . '' . '<br>
                        <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> ' . '' . ' <br>
                    </td>
                    <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span><br><br><br>' . '' . '
                    </td>
                    <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span><br><br><br>' . '' . '
                    </td>
                    <td width="15%" align="center" class="text-normal" ><span style="font-weight: bold;">ค่าเดินทาง Travelling Expense</span><br><br>' . '' . '
                    </td>
                </tr>
                <tr>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>' . '' . '
                    </td>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>' . '' . '
                    </td>
                    <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>' . '' . '
                    </td>
                    <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>' . '' . '
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="50%" height="90px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span> ' . '' . '
                    </td>
                </tr>
            </table>';
        } else {

            $html .=
                '<h3>ประวัติการทำงาน/Work Experiences</h3>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
            <tr height="100px">
                <td width="50%" rowspan="8" class="text-normal">
                    <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก (From)</span> <span style="font-weight: bold; ">ถึง (To)</span> <br>
                    <span style="font-weight: bold; ">บริษัท/Company</span> <br>
                    <span style="font-weight: bold; ">ที่อยู่/Address</span> <br>
                    <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> <br>
                    <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> <br>
                    <span style="font-weight: bold; ">เบอร์ติดต่อ</span> <br>
                    <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> <br>
                </td>
                <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br><br>
                </td>
                <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br><br>
                </td>
                <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าเดินทาง Travelling Expense</span><br><br>
                </td>
            </tr>
            <tr>
                <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>
                </td>
                <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>
                </td>
                <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>
                </td>
                <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>
                </td>
            </tr>
            <tr>
                <td width="50%" colspan="50%" height="90px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span>
                </td>
            </tr>
        </table>';
        }

        $set_arr_expw0 = array(
            "job_apply_id" => $job_apply_id,
            "expw_order >" => '1',
        );

        $result_expw0 = $this->app_frm_model->get_expw_by_job_apply_id($set_arr_expw0);

        //var_dump($result_expw0);

        for ($cnt = 0; $cnt < 2; $cnt++) {

            if (gettype($result_expw0) == "array") {

                $cnt_result_expw0 = count($result_expw0);

                if ($cnt < $cnt_result_expw0) {

                    $html .= '
                    <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                <tr height="100px">
                    <td width="50%" rowspan="8" class="text-normal">
                        <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก </span> ' . '' . ' <span style="font-weight: bold; ">ถึง </span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">บริษัท/Company</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ที่อยู่/Address</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> ' . '' . ' <br>
                        <span style="font-weight: bold; ">เบอร์ติดต่อ</span> ' . '' . '<br>
                        <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> ' . '' . ' <br>
                    </td>
                    <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span><br><br><br>' . '' . '
                    </td>
                    <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span><br><br><br>' . '' . '
                    </td>
                    <td width="15%" align="center" class="text-normal" ><span style="font-weight: bold;">ค่าเดินทาง Travelling Expense</span><br><br>' . '' . '
                    </td>
                </tr>
                <tr>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>' . '' . '
                    </td>
                    <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>' . '' . '
                    </td>
                    <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>' . '' . '
                    </td>
                    <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>' . '' . '
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="50%" height="70px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span> ' . '' . '
                    </td>
                </tr>
            </table>';
                } else {
                    $html .= '
                    <table width="120%" cellspacing="0" cellpadding="5" border="0.7">
                    <tr height="100px">
                        <td width="50%" rowspan="8" class="text-normal">
                            <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก </span> ' . '' . ' <span style="font-weight: bold; ">ถึง </span> ' . '' . ' <br>
                            <span style="font-weight: bold; ">บริษัท/Company</span> ' . '' . ' <br>
                            <span style="font-weight: bold; ">ที่อยู่/Address</span> ' . '' . ' <br>
                            <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> ' . '' . ' <br>
                            <span style="font-weight: bold; ">ชื่อและตำแหน่งผู้บังคับบัญชาโดยตรงของท่าน/Name and title of your</span><br><span style="font-weight: bold; ">  immediate supervisor</span> ' . '' . ' <br>
                            <span style="font-weight: bold; ">เบอร์ติดต่อ</span> ' . '' . '<br>
                            <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> ' . '' . ' <br>
                        </td>
                        <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span><br><br><br>' . '' . '
                        </td>
                        <td width="15%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span><br><br><br>' . '' . '
                        </td>
                        <td width="20%" align="center" class="text-normal" ><span style="font-weight: bold;">ค่าเดินทาง Travelling Expense</span><br><br>' . '' . '
                        </td>
                    </tr>
                    <tr>
                        <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">ค่าล่วงเวลา OT</span><br><br><br>' . '' . '
                        </td>
                        <td width="14%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินจูงใจ Incentive</span><br><br><br>' . '' . '
                        </td>
                        <td width="10%" align="center" class="text-normal"><span style="font-weight: bold; ">โบนัส Bonus</span><br><br><br>' . '' . '
                        </td>
                        <td width="12%" align="center" class="text-normal"><span style="font-weight: bold; ">อื่นๆ Others</span><br><br><br>' . '' . '
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="50%" height="70px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span> ' . '' . '
                        </td>
                    </tr>
                </table>';
                }
            } else {
                $html .= '
                <table width="100%" cellspacing="0" cellpadding="5" border="0.7">
                    <tr>
                        <td width="50%" rowspan="8" height="120px" class="text-normal">
                            <span style="font-weight: bold; ">ระยะเวลาทำงาน/Working Period จาก (From)</span>  <span style="font-weight: bold; ">ถึง (To)</span>  <br>
                                <span style="font-weight: bold; ">บริษัท/Company</span> <br>
                                <span style="font-weight: bold; ">ที่อยู่/Address</span> <br>
                                <span style="font-weight: bold; ">ประเภทธุรกิจ/Nature of Business</span> <br>
                                <span style="font-weight: bold; ">สาเหตุการลาออก/Reason for leaving</span> <br>
                            </td>
                            <td width="30%" align="center" class="text-normal"><span style="font-weight: bold; ">ตำแหน่ง Position</span> <br><br><br>
                            </td>
                            <td width="20%" align="center" class="text-normal"><span style="font-weight: bold; ">เงินเดือน Salary</span> <br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" colspan="50%" height="110px" class="text-normal"><span style="font-weight: bold; ">รายละเอียดงาน/Job Description</span>
                            </td>
                    </tr>
                </table>';
            }
            
        }

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #4
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Page additional_information

        $pdf->SetXY(11, 15);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        $addi_ill            = '';
        $addi_ill_desc       = '';
        $addi_arrested       = '';
        $addi_discharged     = '';
        $addi_employed       = '';
        $addi_employed_desc  = '';
        $addi_relatives      = '';
        $addi_relatives_desc = '';

        $arr_addi_ill        = array("0" => "o", "1" => "o");
        $arr_addi_arrested   = array("0" => "o", "1" => "o");
        $arr_addi_discharged = array("0" => "o", "1" => "o");
        $arr_addi_employed   = array("0" => "o", "1" => "o");
        $arr_addi_relatives  = array("0" => "o", "1" => "o");

        //echo $addi_ill;
        if ($addi_ill == '1') {
            //echo "addi == 1";
            $arr_addi_ill["1"] = "3";
        } else {
            //echo "addi == 0";
            $arr_addi_ill["0"] = "3";
        }
        //exit;
        if ($addi_arrested == '1') {
            $arr_addi_arrested["1"] = "3";
        } else {
            $arr_addi_arrested["0"] = "3";
        }

        if ($addi_discharged == '1') {
            $arr_addi_discharged["1"] = "3";
        } else {
            $arr_addi_discharged["0"] = "3";
        }

        if ($addi_employed == '1') {
            $arr_addi_employed["1"] = "3";
        } else {
            $arr_addi_employed["0"] = "3";
        }

        if ($addi_relatives == '1') {
            $arr_addi_relatives["1"] = "3";
        } else {
            $arr_addi_relatives["0"] = "3";
        }

        $html .=
            '<h3>ข้อมูลเพิ่มเติม/Additional Information</h3>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="56%">ท่านเคยป่วยหนักและเป็นโรคติดต่อร้ายแรงมาก่อนหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' .  '' . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been seriously ill or contracted with contagious disease?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="30%">ถ้าเคยโปรดระบุชื่อโรค/If yes, please identify
                </td>
                <td width="70%" class="text-normal">' . '' . '
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านเคยต้องโทษทางอาญาหรือจำคุกหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been arrested of convicted for any offense or crime?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านเคยถูกให้ออกจากงานหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="10%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="26%">ไม่เคย
                </td>
            </tr>
            <tr>
                <td width="60%">Have you ever been discharged from employment?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="43%">ท่านเคยเป็นพนักงานบริษัทในเครือ CMO Group มาก่อนหรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="9%">เคย
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="10%">ไม่เคย
                </td>
                <td width="30%">ถ้าเคย เมื่อไร?
                </td>
            </tr>
            <tr>
                <td width="47%">Have you ever been employed by CMO Group before?
                </td>
                <td width="13%">Yes
                </td>
                <td width="10%">No
                </td>
                <td width="11%">If yes, when?
                </td>
                <td width="19%" class="text-normal">' . '' . '
                </td>
            </tr>
            <tr>
                <td width="56%">ท่านมีคนรู้จักหรือญาติที่ทำงานในเครือบริษัทฯ นี้หรือไม่
                </td>
                <td width="4%"><span class="check-mark">' . ''. '</span>
                </td>
                <td width="10%">มี
                </td>
                <td width="4%"><span class="check-mark">' . '' . '</span>
                </td>
                <td width="28%">ไม่มี
                </td>
            </tr>
            <tr>
                <td width="60%">Do you have relatives and/or friends who have been working in CMO Group?
                </td>
                <td width="14%">Yes
                </td>
                <td width="26%">No
                </td>
            </tr>
            <tr>
                <td width="25%">ถ้ามีโปรดระบุ/If yes, please identify
                </td>
                <td width="75%" class="text-normal">' . '' . '
                </td>
            </tr>
        </table>';

        $ref_name_1     = '';
        $ref_comp_1     = '';
        $ref_position_1 = '';
        $ref_contact_1  = '';
        $ref_name_2     = '';
        $ref_comp_2     = '';
        $ref_position_2 = '';
        $ref_contact_2  = '';
        $info_yourself  = '';

        $addi_relatives_desc = '';
        $html .= '
        <h3>บุคคลอ้างอิง/Reference (ไม่ใช่บุคคลในครอบครัวหรือญาติ)</h3>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td width="25%">ชื่อ – นามสกุล /Name – Last Name
                </td>
                <td width="25%" class="text-normal">' . $ref_name_1 . '
                </td>
                <td width="15%">บริษัท/ Company
                </td>
                <td width="35%" class="text-normal">' . $ref_comp_1 . '
                </td>
            </tr>
            <tr>
                <td width="15%">ตำแหน่ง/Position
                </td>
                <td width="35%" class="text-normal">' . $ref_position_1 . '
                </td>
                <td width="20%">เบอร์ติดต่อ/Contact No
                </td>
                <td width="30%" class="text-normal">' . $ref_contact_1 . '
                </td>
            </tr>
            <tr>
                <td width="25%">ชื่อ – นามสกุล /Name – Last Name
                </td>
                <td width="25%" class="text-normal">' . $ref_name_2 . '
                </td>
                <td width="15%">บริษัท/ Company
                </td>
                <td width="35%" class="text-normal">' . $ref_comp_2 . '
                </td>
            </tr>
            <tr>
                <td width="15%">ตำแหน่ง/Position
                </td>
                <td width="35%" class="text-normal">' . $ref_position_2 . '
                </td>
                <td width="20%">เบอร์ติดต่อ/Contact No
                </td>
                <td width="30%" class="text-normal">' . $ref_contact_2 . '
                </td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="5" class="box">
            <tr>
                <td>
                    <h4>แนะนำตัวท่านเองเพื่อให้บริษัทฯ รู้จักท่านมากขึ้น</h4>
                </td>
            </tr>
            <tr>
                <td class="text-normal"> Please provide any further information about yourself which will allow our company to know you better
                </td>
            </tr>
            <tr>
                <td width="100%" height="210px" class="text-normal">' . '' . '
                </td>
            </tr>
            <tr>
                <td width="100%"><div style="text-align: justify; text-indent: 30px;">ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้ เป็นความจริงถูกต้องและสมบูรณ์ทุกประการ หลังจากบริษัทฯ จ้างเข้าทำงานแล้ว ปรากฎว่า ข้อความใน ใบสมัครงาน เอกสารที่นำมาแสดงหรือรายละเอียดที่ให้ไว้ไม่เป็นความจริง บริษัทฯ มีสิทธิที่จะเลิกจ้างข้าพเจ้าได้ โดยไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใด ๆ ทั้งสิ้น</div>
                </td>
            </tr>
            <tr>
                <td width="100%" height="80px" class="text-normal"><div style="text-align: justify; text-indent: 30px;">I certify that all statement given in this application form is true. If any is found to be untrue after engagement, the company has the right to terminate my employment without any compensation or severance pay whatsoever.</div>
                </td>
            </tr>
            <tr>
                <td width="60%">
                </td>
                <td width="30%" align="center">...........................................................................
                </td>
            </tr>
            <tr>
                <td width="60%">
                </td>
                <td width="30%" align="center">ลายมือชื่อผู้สมัคร  Applicant’s Signature
                </td>
            </tr>
        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Add a page #5
        $pdf->AddPage();

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(8, 8);
        $pdf->Cell(190, 0, '', 0, 1, 'R', 0, '', 0, false, 'L', 'B');
        $pdf->SetFont('freeserif', 'B', '8');

        // Logo
        $pdf->Image('assets/img/logo.png', 10, 9, 37, 19, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

        // Page #5
        $pdf->SetXY(11, 28);
        // $html = '<style>' . file_get_contents($baseurl . '/careerware/assets/css/styleReport.css') . '</style>';

        $html = $this->load->view('component/styleReport', '', true);
        
        $refc_candidate_name    = '';
        $refc_company_name      = '';
        $refc_last_position     = '';
        $refc_last_salary       = '';
        $refc_last_fixed_income = '';
        $refc_highest_degree    = '';
        $refc_major             = '';
        $refc_institute_name    = '';
        //echo $set_title_id;
        //echo gettype($set_title_id);
        //exit;
        $result_title_list = $this->utility->get_title_list($set_title_id);
        //echo gettype($result_title_list);
        //var_dump($result_title_list);
        //echo count($result_title_list);
        //exit;

        //echo $set_title_id;
        //echo gettype($set_title_id);
        //exit;
        if ($set_title_id != null && $set_title_id != '0') {

            $set_title_name = $result_title_list->title_name_th;
            $title_list     = $this->utility->get_title_list();
        } else {
            $set_title_name = '';
        }

        $html .=
        '
        <table width="100%" cellspacing="0" cellpadding="5">
            <tr>
                <td width="100%" align="center">
                    <h2>รับทราบและยินยอมให้ตรวจสอบประวัติผู้สมัครงาน</h2>
                    <h2 style="text-decoration: underline">Reference Checked Acknowledge by Candidate</h2>
                </td>
            </tr>
            <tr>
                <td width="100%" class="text-normal" style="font-size: 13px;">
                    <div style="text-align: justify; text-indent: 20px;">
                    CMO Group ขอแจ้งให้ผู้สมัครงานทราบว่า บริษัทฯ จะทำการตรวจสอบ ประวัติการทำงานของท่านจากนายจ้างเดิม ประวัติอาชญากรรม ประวัติการศึกษา รวมถึง ตรวจสอบข้อความอื่นใดที่ท่านได้กรอกไว้ในเอกสารการสมัครงาน และเอกสารอื่นๆ ที่ใช้ในการสมัครงาน เพื่อเป็นข้อมูลประกอบการ พิจารณารับท่านเข้าทำงานกับบริษัทฯ
                    </div>
                    <div style="text-align: justify; text-indent: 45px;">อนึ่ง หากปรากฎว่า บริษัทฯ พบความไม่ถูกต้องตรงกันหรือเป็นเท็จจากการตรวจสอบดังกล่าว หรือท่านมีประวัติการทำงาน จากนายจ้างเดิมที่ไม่เหมาะสมและเป็นอุปสรรคต่อการทำงานในตำแหน่งงานนั้นๆ บริษัทฯ ขอสงวนสิทธิ์ที่จะไม่รับพิจารณาท่านเข้าทำงาน หรือหากตรวจสอบพบภายหลังจากบริษัทฯ ได้รับท่านเข้าทำงานแล้ว บริษัทฯ มีสิทธิ์ที่จะเลิกจ้างท่านโดยไม่จ่ายเงินชดเชยหรือค่าเสียหาย ใดๆ ทั้งสิ้น
                    </div>
                </td>
            </tr>
        </table>
        <h4>กรุณากรอกข้อมูลเบื้องต้นในการตรวจสอบประวัติของท่าน :</h4>
        <table width="100%" cellspacing="0" cellpadding="5" border="0.7" style="font-size: 11px;">
            <tr>
                <td width="45%">ชื่อผู้สมัครงาน / Candidate Name:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_candidate_name . '
                </td>
            </tr>
            <tr>
                <td width="45%">ชื่อบริษัทเดิม (ล่าสุด)  / Company Name:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_company_name . '
                </td>
            </tr>
            <tr>
                <td width="45%">ตำแหน่ง (ล่าสุด)   / Latest  Position:
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_last_position . '
                </td>
            </tr>
            <tr>
                <td width="45%">อัตราเงินเดือน (ล่าสุด)   / Latest Salary: (บาท / เดือน)
                </td>
                <td width="55%" height="27px" class="text-normal">' . $this->set_curr_display($refc_last_salary) . '
                </td>
            </tr>
            <tr>
                <td width="45%">เงินได้ประจำอื่น (ล่าสุด) / Latest Fixed Income: (บาท/เดือน)
                </td>
                <td width="55%" height="27px" class="text-normal">' . $this->set_curr_display($refc_last_fixed_income) . '
                </td>
            </tr>
            <tr>
                <td width="45%">วุฒิการศึกษาระดับสูงสุด   / Highest Degree :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_highest_degree . '
                </td>
            </tr>
            <tr>
                <td width="45%">สาขาวิชาเอก  / Major :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_major . '
                </td>
            </tr>
            <tr>
                <td width="45%">สถาบันที่จบการศึกษา / Institute Name :
                </td>
                <td width="55%" height="27px" class="text-normal">' . $refc_institute_name . '
                </td>
            </tr>
        </table>
        <table cellpadding="1" style="font-size: 11px;">
            <tr>
                <td width="100%" height="50px" class="text-normal">ขอขอบคุณเป็นอย่างยิ่งที่ท่านได้ให้ความร่วมมือในกรอกข้อมูลเบื้องต้น  และการรับทราบข้อความดังกล่าวข้างต้น
                </td>
            </tr>
            <tr>
                <td width="30%">
                </td>
                <td width="70%" align="center">ลงชื่อรับทราบ.................................................................................ผู้สมัครงาน/ผู้ให้ความยินยอม
                </td>
            </tr>
            <tr>
                <td width="20%"><br>&nbsp;
                </td>
                <td width="80%" align="center">( ' . '.............................................................................' . ' )</td>
            </tr>
            <tr>
                <td width="100%">
                </td>
            </tr>
            <tr>
                <td width="20%">
                </td>
                <td width="80%" align="center">วันที่.........................................................................
                </td>
            </tr>
        </table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        $pdf->Output('Application_Form_' . $job_apply_id . '.pdf', 'I');
    }

    private function date_format($get_str) {
        $str      = '';
        $arr_str1 = explode(" ", $get_str);
        $arr_str2 = explode("-", $arr_str1[0]);
        $str .= $arr_str2[2] . "/" . $arr_str2[1] . "/" . $arr_str2[0];
        return $str;
    }

    private function date_format_fix($get_str, $get_format) {
        $str      = '';
        $arr_str1 = explode(" ", $get_str);
        $arr_str2 = explode("-", $arr_str1[0]);
        $str .= $arr_str2[2] . "/" . $arr_str2[1] . "/" . $arr_str2[0];

        //$arr_str2[1]
        return $str;
    }

    private function set_curr_display($get_str) {
        $str = '';
        //echo $get_str;
        //echo gettype($get_str);
        if ($get_str == '') {
            return '';
        } else {
            //$arr_str2[1]
            if (is_numeric($get_str)) {

                return number_format($get_str, 0, '', ',');
            } else {
                return '';
            }
        }
    }

    private function check_file_exit($get_file_name) {
        if ($get_file_name == '') {
            return false;
        } else {
            //$img_file = "aon.jpg";
            $filename = 'assets/uploads/applys/pic_tmp/' . $get_file_name;
            return file_exists($filename);
        }

    }

    private function get_age($get_date) {

        if ($get_date == '') {
            return '';
        } else {
            $arr_get_date = explode(" ", $get_date);
            $arr_date     = $arr_get_date[0];

            $datetime    = new DateTime();
            $datetimeNow = $datetime->format('Y-m-d');
            $NowYear     = $datetime->format('Y');

            $arr_dateNow = explode("-", $datetimeNow);
            //$set_yesr_th  = intval($arr_dateNow[0]) + intval(543);
            $set_yesr_th = intval($arr_dateNow[0]);
            $set_date_th = (string) $set_yesr_th . "-" . $arr_dateNow[1] . "-" . $arr_dateNow[2];
            //echo $set_date_th;
            //echo "<br/>";
            //echo $arr_get_date[0];
            $dateNow   = new DateTime($set_date_th);
            $dateBirth = new DateTime($arr_get_date[0]);

            $diff = $dateNow->diff($dateBirth);
            //echo (string)$diff;
            //exit;
            $m_diff = (($diff->format('%y') * 12) + $diff->format('%m'));
            $age    = ($m_diff / 12);

            //echo (($diff->format('%y') * 12) + $diff->format('%m')) . " full months difference";

            //echo "<hr/>";
            //echo "age = " . number_format($age, 1, '.', '');
            $str = number_format($age, 1, '.', '');

            if ((float) $age >= (float) $NowYear) {
                $str = '0';
            }

            return (string) $str;
        }
    }

    private function date_format_mtyr_os2hr($get_date) {
        $str = '';
        if ($get_date == '') {
            $str = '';
        } else {
            $arr_get_date1 = explode(" ", $get_date);
            $arr_get_date2 = explode("-", $arr_get_date1[0]);
            $str           = $arr_get_date2[1] . "/" . $arr_get_date2[0];
        }
        return $str;
    }

    private function date_format_yr_os2hr($get_date) {
        $str = '';
        if ($get_date == '') {
            $str = '';
        } else {
            $arr_get_date1 = explode(" ", $get_date);
            $arr_get_date2 = explode("-", $arr_get_date1[0]);
            $str           = $arr_get_date2[0];
        }

        if ($str == '0000') {
            $str = '';
        }

        return $str;
    }

    public function chk_time_server() {
        date_default_timezone_set("Asia/Bangkok");
        $datetime         = new DateTime();
        echo $datetimeNow = $datetime->format('Y-m-d H:i:s');
    }

    private function data_format($get_str, $get_con) {
        if ($get_str == $get_con) {
            return '';
        } else {
            return $get_str;
        }
    }

    public function assetment_pdf(){ //ดึงหน้า PDF แบบประเมินการสัมภาษณ์
        $baseurl = "http://warpevent.com";
        $html = '<style>' . file_get_contents($baseurl.'/careerware/assets/css/styleReport.css') . '</style>';

        if (!$this->session->has_userdata('user_ss')) {
            redirect(BASE_URL0 . 'login');
        }

        $data_ss = $this->session->userdata('user_ss');
        ob_start();
        $data_resp = array();
        

        $data_resp["seg1"] = $this->uri->segment(1); // controller
        $data_resp["seg2"] = $this->uri->segment(2); // action
        $data_resp["seg3"] = $this->uri->segment(3); // 1stsegment
        $data_resp["seg4"] = $this->uri->segment(4); // 2ndsegment

        $set_id = $data_resp["seg3"];

        $result = $this->app_frm_model->get_data_apply_app_frm($set_id);
        $assessment = $this->app_frm_model->get_detail_job_assessment_pdf($set_id);

        $chk_per  = $this->app_frm_model->get_chk_personality($set_id);
        $chk_sub  = $this->app_frm_model->get_chk_subjective($set_id);
        $chk_ob  = $this->app_frm_model->get_chk_objective($set_id);
        
        //ดึงข้อมูลประวัติของผู้เข้าทดสอบ
        $full_name = $result["first_name_th"] . " " . $result["last_name_th"];
        $set_title_name  = $result["title_id"];
        $intv_date  = $result["apply_interv_datetime"];
        $src_from  = $result["src_from"];

        $interview_emp = $assessment["interview_emp"];
        $interview_room = $assessment["interview_room"];
        $interview_emp = $assessment["interview_emp"];

        $Other = $assessment["Other"];
        $Qualification = $assessment["Qualification"];
        $Qualification_comment = $assessment["Qualification_comment"];
        $Evidence = $assessment["Evidence"];
        $Evidence_comment = $assessment["Evidence_comment"];
        $Strengths = $assessment["Strengths"];
        $Weakness = $assessment["Weakness"];
        $Creative = $assessment["Creative"];
        $UptoDate = $assessment["UptoDate"];
        $Professional = $assessment["Professional"];
        $SocialResponsibility = $assessment["SocialResponsibility"];
        $Interview_Result = $assessment["Interview_Result"];
        $Interview_Result_comment = $assessment["Interview_Result_comment"];
        $date_save_result = $assessment["date_save_result"];

        $apply_position_name = $result["apply_position_name"];
        

        //$set_posi_re = html_entity_decode($apply_position_name["post_title"], ENT_QUOTES);

        if ($set_title_name == 1)
        {
            $set_title_name = "นาย";
        }
        else if ($set_title_name == 2)
        {
            $set_title_name = "นางสาว";
        }
        else if ($set_title_name == 3)
        {
            $set_title_name = "นาง";
        }
        else if ($set_title_name == 4)
        {
            $set_title_name = "ดร.";
        }
        else 
        {
            $set_title_name = "";
        }

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        //$pdf->SetFont('freeserif', 'B', '11');
        $pdf->SetTitle('Personality Test : '. $full_name);
        $pdf->SetHeaderMargin(2);
        $pdf->SetTopMargin(11);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add page #1
        $pdf->AddPage();

        // Logo
        $pdf->Image('assets/img/logo.png', 8, 5, 35, 16, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        $pdf->SetFont('freeserif', 'I', '7');
        $pdf->SetXY(173, 5);
        $pdf->Cell(30, 0, 'HR-009', 0, 1, 'R', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '14');
        $pdf->SetXY(47, 14);
        $pdf->Cell(30, 0, 'แบบประเมินการสัมภาษณ์ (INTERVIEW ASSESSMENT FORM)', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        //$pdf->RoundedRect(10, 100, 270, 0, 0, '1111');
        $pdf->line(4, 25, 206, 25, '');
        $pdf->line(4, 25, 4, 60, '');
        $pdf->line(206, 25, 206, 60, '');
        $pdf->line(4, 65, 4, 145, '');
        $pdf->line(206, 65, 206, 145, '');

        $pdf->line(4, 152, 4, 250, '');
        $pdf->line(206, 152, 206, 250, '');
        
        $pdf->line(4, 257, 4, 293);
        $pdf->line(206, 257, 206, 293, '');

        $pdf->line(4, 293, 206, 293, '');
       
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(15, 32);
        $pdf->Cell(30, 0, 'ชื่อผู้สมัคร : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(34, 32);
        $pdf->Cell(30, 0,  $set_title_name . $full_name , 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(15, 35);
        $pdf->Cell(31, 0, "Candidate's name", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(85, 32);
        $pdf->Cell(30, 0, 'วันที่สัมภาษณ์ : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');  //$intv_date

        if ($intv_date == '0000-00-00 00:00:00')
        {
            $intv_date = '';
        }
        else 
        {
            $intv_date = date("d/m/Y",strtotime($intv_date)); 
        }

         //0000-00-00 00:00:00

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(109, 32);
        $pdf->Cell(30, 0, $intv_date, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(85, 35);
        $pdf->Cell(30, 0, "Interview Date", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(155, 25, 155, 60, '');
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(158, 32);
        $pdf->Cell(30, 0, "Test", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(175, 32);
        $pdf->Cell(30, 0, "Personality", 0, 1, 'L', 0, '', 0, false, 'L', 'B'); 

        if ($chk_per == 1)
        {
            $chk_per = "4";
        }
        else {
            $chk_per = "";
        }

        if ($chk_sub == 1)
        {
            $chk_sub = "4";
        }
        else {
            $chk_sub = "";
        }

        if ($chk_ob == 1)
        {
            $chk_ob = "4";
        }
        else {
            $chk_ob = "";
        }

        $pdf->SetXY(171, 29);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $chk_per, 1, 0);

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(175, 40);
        $pdf->Cell(30, 0, "Subjective", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(171, 37);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $chk_sub, 1, 0);

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(175, 48);
        $pdf->Cell(30, 0, "Objective", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(171, 45);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $chk_ob, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(158, 56);
        $pdf->Cell(30, 0, "Other : ", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(170, 56);
        $pdf->Cell(30, 0,  $Other, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 60, 206, 60);
        $pdf->line(4, 65, 206, 65);
        //////////////////////////////////////////////////////////////////////////////////////////////////////////
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(15, 42);
        $pdf->Cell(30, 0, 'ตำแหน่งงานที่สมัคร : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B'); //

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(37, 42);
        //$pdf->Cell(30, 0, $set_posi_re, 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->MultiCell(42, 10, $apply_position_name, 0, 'L', 0, 1, 45, 39, true, 0, false, true, 0, 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(15, 45);
        $pdf->Cell(31, 0, 'Position apply', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(85, 42);
        $pdf->Cell(30, 0, 'ผู้สัมภาษณ์ : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(105, 42);
        $pdf->Cell(30, 0,  $interview_emp, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(85, 45);
        $pdf->Cell(30, 0, "Interviewer", 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        //////////////////////////////////////////////////////////////////////////////////////////////////////////
        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(15, 52);
        $pdf->Cell(30, 0, 'แหล่งที่มา : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        if ($src_from == 0)
        {
            $src_from = "in system";
        }
        else if ($src_from == 1)
        {
            $src_from = "email";
        }
        else if ($src_from == 2)
        {
            $src_from = "social media";
        }
        else
        {
            $src_from = "others";
        }


        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(32, 52);
        $pdf->Cell(30, 0,  $src_from , 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(15, 55);
        $pdf->Cell(31, 0, 'Source', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(85, 52);
        $pdf->Cell(30, 0, 'ห้องสัมภาษณ์ : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(107, 52);
        $pdf->MultiCell(60, 100, $interview_room, 0, 'L', 0, 1, 107, 49, true, 0, false, true, 0, '');
        //$pdf->Cell(30, 0,  $interview_room , 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(85, 55);
        $pdf->Cell(30, 0, "Interview room", 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        //////////////////////////////////////////////////////////////////////////////////////////////////////////

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(7, 70);
        $pdf->Cell(30, 0, '1) คุณสมบัติ / การศึกษา / ประสบการณ์ที่เกี่ยวข้อง', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(11, 73);
        $pdf->Cell(30, 0, "Qualification / education / relevant experience / certifications", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(13, 82);
        $pdf->Cell(30, 0, "ไม่เหมาะสม", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        if ($Qualification == 1 && $Qualification != 2 && $Qualification != 3)
        {
            $check1 = "4";
            $check2 = "";
            $check3 = "";
        }
        else if ($Qualification == 2 && $Qualification != 1 && $Qualification != 3)
        {
            $check1 = "";
            $check2 = "4";
            $check3 = "";
        }
        else if ($Qualification == 3 && $Qualification != 2 && $Qualification != 1)
        {
            $check1 = "";
            $check2 = "";
            $check3 = "4";
        }

        $pdf->SetXY(9, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $check1, 1, 0);

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(13, 85);
        $pdf->Cell(30, 0, "Inadequate for the job", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(48, 82);
        $pdf->Cell(30, 0, "เหมาะสม", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(44, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $check2, 1, 0);

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(48, 85);
        $pdf->Cell(30, 0, "Adequate", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(73, 82);
        $pdf->Cell(30, 0, "เหมาะสมมาก", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(69, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $check3, 1, 0);

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(73, 85);
        $pdf->Cell(30, 0, "More than Adequate", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(9, 93);
        $pdf->Cell(30, 0, "ความเห็น :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(25, 93);
        $pdf->MultiCell(75, 100, $Qualification_comment, 0, 'L', 0, 1, 25, 90, true, 0, false, true, 0, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(9, 96);
        $pdf->Cell(30, 0, "Comment", 0, 1, 'L', 0, '', 0, false, 'L', 'B');


        ///ข้อ 2
        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(107, 70);
        $pdf->Cell(30, 0, '2) หลักฐานประกอบการแสดงให้เห็นความสามารถ / ทักษะ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(111, 73);
        $pdf->Cell(30, 0, "Evidence of deployment of skills", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        if ($Evidence == 1 && $Evidence != 2 && $Evidence != 3)
        {
            $checks1 = "4";
            $checks2 = "";
            $checks3 = "";
        }
        else if ($Evidence == 2 && $Evidence != 1 && $Evidence != 3)
        {
            $checks1 = "";
            $checks2 = "4";
            $checks3 = "";
        }
        else if ($Evidence == 3 && $Evidence != 2 && $Evidence != 1)
        {
            $checks1 = "";
            $checks2 = "";
            $checks3 = "4";
        }

        $pdf->SetXY(109, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $checks1, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(113, 82);
        $pdf->Cell(30, 0, "ไม่มีหลักฐาน", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(113, 85);
        $pdf->Cell(30, 0, "No evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(142, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $checks2, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(146, 82);
        $pdf->Cell(30, 0, "มีหลักฐานบ้าง", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(146, 85);
        $pdf->Cell(30, 0, "Some evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(177, 80);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $checks3, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(181, 82);
        $pdf->Cell(30, 0, "มีหลักฐานมาก", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(181, 85);
        $pdf->Cell(30, 0, "High evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(109, 93);
        $pdf->Cell(30, 0, "ความเห็น :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(122, 93);
        $pdf->MultiCell(75, 100, $Evidence_comment, 0, 'L', 0, 1, 126, 90, true, 0, false, true, 0, '');
        //80 ความกว้างของกรอบแกน x , 100 ความยาวของกรอบแกน y ,  129 ตำแหน่ง เริ่มต้นของกรอบแกน x , 90 ตำแหน่ง เริ่มต้นของกรอบแกน y 

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(109, 96);
        $pdf->Cell(30, 0, "Comment", 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->line(103, 65, 103, 110, '');
        $pdf->line(4, 110, 206, 110, '');
        $pdf->line(103, 110, 103, 145, '');
        $pdf->line(4, 145, 206, 145, '');

        //ข้อ 3
        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(7, 114);
        $pdf->Cell(30, 0, '3) จุดแข็ง / ข้อดี :', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(13, 118);
        $pdf->MultiCell(105, 130, $Strengths, 0, 'L', 0, 1, 15, 118, true, 0, false, true, 0, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(12, 117);
        $pdf->Cell(90, 100, "Strengths", 0, 1, 'L', 0, '', 0, false, 'L', 'B');


        //ข้อ 4
        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(107, 114);
        $pdf->Cell(30, 0, '4) จุดที่ด้อยพัฒนา / ปรับปรุง :', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(12, 118);
        $pdf->MultiCell(104, 130, $Weakness, 0, 'L', 0, 1, 115, 118, true, 0, false, true, 0, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(111, 117);
        $pdf->Cell(30, 0, "Weakness", 0, 1, 'L', 0, '', 0, false, 'L', 'B');


        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(4, 150);
        $pdf->Cell(30, 0, "ส่วนที่ 2 : คุณค่าองค์กร (Section 2 : Core Values)", 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        $pdf->line(4, 152, 206, 152, '');
        $pdf->line(4, 160, 206, 160, '');

        ////////////Creative 
        if ($Creative == 1)
        {
            $c1 = "4";
            $c2 = "";
            $c3 = "";
            $c4 = "";
        }
        else if ($Creative == 2)
        {
            $c1 = "";
            $c2 = "4";
            $c3 = "";
            $c4 = "";
        }
        else if ($Creative == 3)
        {
            $c1 = "";
            $c2 = "";
            $c3 = "4";
            $c4 = "";
        }
        else if ($Creative == 4)
        {
            $c1 = "";
            $c2 = "";
            $c3 = "";
            $c4 = "4";
        }

        ////////////UptoDate 
        if ($UptoDate == 1)
        {
            $u1 = "4";
            $u2 = "";
            $u3 = "";
            $u4 = "";
        }
        else if ($UptoDate == 2)
        {
            $u1 = "";
            $u2 = "4";
            $u3 = "";
            $u4 = "";
        }
        else if ($UptoDate == 3)
        {
            $u1 = "";
            $u2 = "";
            $u3 = "4";
            $u4 = "";
        }
        else if ($UptoDate == 4)
        {
            $u1 = "";
            $u2 = "";
            $u3 = "";
            $u4 = "4";
        }

        ////////////Professional 
        if ($Professional == 1)
        {
            $p1 = "4";
            $p2 = "";
            $p3 = "";
            $p4 = "";
        }
        else if ($Professional == 2)
        {
            $p1 = "";
            $p2 = "4";
            $p3 = "";
            $p4 = "";
        }
        else if ($Professional == 3)
        {
            $p1 = "";
            $p2 = "";
            $p3 = "4";
            $p4 = "";
        }
        else if ($Professional == 4)
        {
            $p1 = "";
            $p2 = "";
            $p3 = "";
            $p4 = "4";
        }

        ////////////Socail 
        if ($SocialResponsibility == 1)
        {
            $s1 = "4";
            $s2 = "";
            $s3 = "";
            $s4 = "";
        }
        else if ($SocialResponsibility == 2)
        {
            $s1 = "";
            $s2 = "4";
            $s3 = "";
            $s4 = "";
        }
        else if ($SocialResponsibility == 3)
        {
            $s1 = "";
            $s2 = "";
            $s3 = "4";
            $s4 = "";
        }
        else if ($SocialResponsibility == 4)
        {
            $s1 = "";
            $s2 = "";
            $s3 = "";
            $s4 = "4";
        }
        

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(38, 157);
        $pdf->Cell(30, 0, "CMO Values", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(112.5, 163);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $c1, 0, 0);

        $pdf->SetXY(112.5, 172);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $u1, 0, 0);

        $pdf->SetXY(112.5, 181);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $p1, 0, 0);

        $pdf->SetXY(112.5, 190);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $s1, 0, 0);

        $pdf->line(103, 152, 103, 197, '');
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->SetXY(104, 156);
        $pdf->Cell(30, 0, "ไม่มีความสามารถ", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(104, 159);
        $pdf->Cell(30, 0, "Not strong evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(138, 163);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $c2, 0, 0);

        $pdf->SetXY(138, 172);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $u2, 0, 0);

        $pdf->SetXY(138, 181);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $p2, 0, 0);

        $pdf->SetXY(138, 190);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $s2, 0, 0);

        $pdf->line(127, 152, 127, 197, '');
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->SetXY(129, 156);
        $pdf->Cell(30, 0, "มีความสามารถบ้าง", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(132, 159);
        $pdf->Cell(30, 0, "Some evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(165, 163);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $c3, 0, 0);

        $pdf->SetXY(165, 172);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $u3, 0, 0);

        $pdf->SetXY(165, 181);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $p3, 0, 0);

        $pdf->SetXY(165, 190);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $s3, 0, 0);

        $pdf->line(154, 152, 154, 197);

        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->SetXY(157.5, 156);
        $pdf->Cell(30, 0, "มีความสามารถ", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(158, 159);
        $pdf->Cell(30, 0, "Strong evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(191, 163);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $c4, 0, 0);

        $pdf->SetXY(191, 172);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $u4, 0, 0);

        $pdf->SetXY(191, 181);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $p4, 0, 0);

        $pdf->SetXY(191, 190);
        $pdf->SetFont('ZapfDingbats','', 8);
        $pdf->Cell(3, 1, $s4, 0, 0);

        $pdf->line(180, 152, 180, 197, '');
        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->SetXY(181, 156);
        $pdf->Cell(30, 0, "มีความสามารถมาก", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(181, 159);
        $pdf->Cell(30, 0, "Very strong evident", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 197, 206, 197, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(5, 164);
        $pdf->Cell(30, 0, "1)       C : Creative", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(17, 167);
        $pdf->Cell(30, 0, "คิดอย่างสร้างสรรค์ เปิดรับไอเดียใหม่จากทุกคน", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 169, 206, 169, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(5, 173);
        $pdf->Cell(30, 0, "2)       U : Up to Date", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(17, 176);
        $pdf->Cell(30, 0, "ทันสมัย ก้าวทันการเปลี่ยนแปลงของโลก ติดตามข้อมูลข่าวสารใหม่ๆ", 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        
        $pdf->line(4, 178, 206, 178, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(5, 182);
        $pdf->Cell(30, 0, "3)       P : Profressional", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(17, 185);
        $pdf->Cell(30, 0, "ทำงานอย่างมืออาชีพ มุ่งคุณภาพและผลงาน เคารพสิทธ์ของผู้อื่น", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 187, 206, 187, '');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(5, 191);
        $pdf->Cell(30, 0, "4)       S : Social Responsibility  รับผิดชอบต่อสังคม สิ่งแวดล้อม", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(17, 194);
        $pdf->Cell(30, 0, "มีจริยธรรมการทำงาน มีมาตราฐานความปลอดภัยในชีวิตและสุขภาพ ", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        //ส่วนของสรุปผลสัมภาษณ์
        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(5, 204);
        $pdf->Cell(30, 0, 'สรุปผลการสัมภาษณ์ :', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(5, 207);
        $pdf->Cell(30, 0, "Interview Result", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(5, 215);
        $pdf->Cell(30, 0, 'ความคิดเห็นเพิ่มเติม : ', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(12, 118);
        $pdf->MultiCell(165, 50, $Interview_Result_comment, 0, 'L', 0, 1, 38, 212, true, 0, false, true, 0, '');
        //$pdf->SetXY(12, 215);
        //$pdf->MultiCell(90, 130, $Interview_Result_comment, 0, 'L', 0, 1, 25, 170, true, 0, false, true, 0, '');

        if ($Interview_Result == 1)
        {
            $i1 = "4";
            $i2 = "";
            $i3 = "";
            $i4 = "";
        }
        else if ($Interview_Result == 2)
        {
            $i1 = "";
            $i2 = "4";
            $i3 = "";
            $i4 = "";
        }
        else if ($Interview_Result == 3)
        {
            $i1 = "";
            $i2 = "";
            $i3 = "4";
            $i4 = "";
        }
        else if ($Interview_Result == 4)
        {
            $i1 = "";
            $i2 = "";
            $i3 = "";
            $i4 = "4";
        }

        $pdf->SetXY(46, 202);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $i1, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(50, 204);
        $pdf->Cell(30, 0, 'จ้าง', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(50, 207);
        $pdf->Cell(30, 0, 'Can be hired', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(81, 202);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $i2, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(85, 204);
        $pdf->Cell(30, 0, 'รอพิจารณา', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(85, 207);
        $pdf->Cell(30, 0, 'Hold', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(121, 202);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $i3, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(125, 204);
        $pdf->Cell(30, 0, 'ไม่จ้าง', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(125, 207);
        $pdf->Cell(30, 0, 'Reject', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetXY(156, 202);
        $pdf->SetFont('ZapfDingbats','', 6);
        $pdf->Cell(3, 1, $i4, 1, 0);

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(160, 204);
        $pdf->Cell(30, 0, 'แนะนำให้สัมภาษณ์ขั้นต่อไป', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(160, 207);
        $pdf->Cell(30, 0, 'Recommend for next interview', 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(5, 218);
        $pdf->Cell(30, 0, "Comments", 0, 1, 'L', 0, '', 0, false, 'L', 'B');


        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(115, 240);
        $pdf->Cell(30, 0, "ลงนาม", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(115, 243);
        $pdf->Cell(30, 0, "Signature", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '8');
        $pdf->SetXY(135, 243);
        $pdf->Cell(30, 0, '( ' . $interview_emp . ' )', 0, 1, 'L', 0, '', 0, false, 'L', 'B');
        

        $pdf->SetFont('freeserif', 'B', '9');
        $pdf->SetXY(180, 240);
        $pdf->Cell(30, 0, "ผู้สัมภาษณ์", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '7');
        $pdf->SetXY(180, 243);
        $pdf->Cell(30, 0, "Interview", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', 'B', '8');
        $pdf->SetXY(125, 248);
        $pdf->Cell(30, 0, "วันที่ / Date", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $date_save_result = date("d/m/Y",strtotime($date_save_result));

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(143, 248);
        $pdf->Cell(30, 0,  $date_save_result, 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 250, 206, 250, '');

        $pdf->SetFont('freeserif', '', '10');
        $pdf->SetXY(4, 255);
        $pdf->Cell(30, 0, "สำหรับฝ่ายทรัพยากรบุคคลเท่านั้น / FOR HR ONLY", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(4, 257, 206, 257, '');

        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(7,262);
        $pdf->Cell(30, 0, "Present remunerations / ค่าตอบแทนปัจจุบัน", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->line(103, 257, 103, 293, '');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(7,269);
        $pdf->Cell(30, 0, "Base Salary :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(7,274);
        $pdf->Cell(30, 0, "Fixed Allowance :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(60,269);
        $pdf->Cell(30, 0, "OT :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(60,274);
        $pdf->Cell(30, 0, "Bonus :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(60,279);
        $pdf->Cell(30, 0, "Provident Fund :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(7,285);
        $pdf->Cell(30, 0, "Other :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');


        $pdf->SetFont('freeserif', 'B', '10');
        $pdf->SetXY(108,262);
        $pdf->Cell(30, 0, "Candidate's Expectation /  ความคาดหวังของผู้สมัคร", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(108,269);
        $pdf->Cell(30, 0, "Minimum Base Salary :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(108,274);
        $pdf->Cell(30, 0, "Other :", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        $pdf->SetFont('freeserif', '', '9');
        $pdf->SetXY(114,290);
        $pdf->Cell(30, 0, "* ความคาดหวัง (เงินเดือน, ค่าตอบแทนอื่นๆ, ตำแหน่ง, หัวหน้างาน)", 0, 1, 'L', 0, '', 0, false, 'L', 'B');

        //$pdf->writeHTML('$htvl', true, false, false, false, '');
        $pdf->Output('Application_Form_.pdf', 'I');

        
    }
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
