<?php class C_login extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	$this->load->model('Model_admin');
	$this->load->model('Model_login');
	$this->load->model('Model_ins');
	$this->load->model('Model_sel');
}

function login(){
$name=$this->input->post('username');
$pass=$this->input->post('password');
$pass2=md5($pass);
$data=$this->Model_admin->login($name,$pass2);
$row=count($data);
if($row>0){
$this->session->set_userdata('log','Admin');
$this->session->set_userdata('username',$name);
$this->session->set_userdata('password',$pass);
redirect('index/index');
}else{
$this->load->view('error_log');

}

}

function logout(){
$this->session->unset_userdata('log');
$this->session->unset_userdata('username');
$this->session->unset_userdata('password');
redirect('index/index');
}

function sendMail() {
    $email=$this->input->post('mail');

        $kode=rand(11111,99999);
        $val=array('kode'=>$kode,'email'=>$email);
       $this->Model_login->in_veriikasi_mail($val);
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "dboyscos@gmail.com";
        $config['smtp_pass'] = "mahardkcos";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['validation'] = TRUE;
         $config['smtp_timeout'] = '7';
        $config['newline'] = "\r\n";

        
        
        $ci->email->initialize($config);
 
        $ci->email->from('dboyscos@gmail.com', 'E-Musik');
        $list = array($email);
        $ci->email->to($list);
        $ci->email->subject('verifikasi Password E-Musik ');
        //$ci->email->message("kunjungi halaman berikut untuk melakukan verifikasi password --> localhost/ci/index.php/sta/verifikasi/$kode");
        $ci->email->message('kunjungi halaman berikut untuk melakukan verifikasi password --> <a href="http://localhost/ci/index.php/Index/replace/'.$kode.'">klik</a>');
        if ($this->email->send()) {
            echo "Kode Verifikasi Telah Terkirim Ke Email anda </br> silakan cek Mail anda untuk Mengganti Password ganti passowrd";
        } else {
            show_error($this->email->print_debugger());
             echo "Kode Gagal Terkirim, Silakan coba beberapa saat lagi";
        }


	    
    }
	
	function gantipass(){
	$kode=$this->input->post('kode');
	$email=$this->input->post('mail');
	$username=$this->input->post('username');
	$pass=$this->input->post('pass1');
	$data['data']=$this->Model_login->sel_kode($kode);
	$row=count($data['data']);
	if($row>0){
	$this->Model_login->up_pass($email,$username,$pass);
	$this->Model_login->del_kode($email);
	echo "Proses Rubah  Password Berhasill Silakan Silakan Login Ke-Sistem";
	}else{
	echo "proses gagal silakan ulang beberapa saat lagi";
	}
	}

	
	function user_log(){
	$username=$this->input->post('username');
	$pass=$this->input->post('password');
	$pass2=md5($pass);
	$data=$this->Model_admin->login($username,$pass2);
	$row=count($data);
	if($row>0){
	$dr['dr']=$this->Model_sel->sel_kontak();
	$rw=$dr['dr']->row_array();
	$data['profile']=$rw['profile'];
		$ip=$_SERVER['REMOTE_ADDR'];
		$this->Model_ins->ins_session($username,$pass2,$ip);
		$this->load->view('user/home',$data);
	}else{
		$this->load->view('User/err_log');
	
	}
	
	}
	
	function user_logout(){
	$ip=$_SERVER['REMOTE_ADDR'];
	$this->Model_ins->del_session($ip);
	redirect('User/index');
	}
}