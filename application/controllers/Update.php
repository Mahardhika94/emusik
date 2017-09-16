<?php class Update extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	$this->load->model('Model_update');
}

function up_profile($user){
	$username = $this->input->post('username');
	$pass	= $this->input->post('pass');
	$this->session->set_userdata('password',$pass);
	$pass2	=md5($pass);
	$email	=$this->input->post('email');
	$nope	=$this->input->post('nope');
	$nama	=$this->input->post('nama');
	$val	=array('username'=>$username,'password'=>$pass2,'nama'=>$nama,'email'=>$email,'no_hp'=>$nope);
	$this->Model_update->up_profile1($val,$username);
	$this->session->set_userdata('username',$username);
	$this->session->set_userdata('password',$pass);
	redirect('index/profile');
}

function up_proser($user){
	$email	=$this->input->post('email');
	$nope	=$this->input->post('nope');
	$nama	=$this->input->post('nama');
	$val	=array('nama'=>$nama,'email'=>$email,'no_hp'=>$nope);
	$this->Model_update->upass($user,$val);
	redirect('User/pro');
}

function up_kontak(){
$id ='id';
$email = $this->input->post('email');
$nope	= $this->input->post('nope');
$url=$this->input->post('url');
$pro=$this->input->post('pro');
$val=array('profile'=>$pro,'no'=>$nope,'email'=>$email,'url'=>$url);
$this->Model_update->up_profile($val,$id);
	redirect('index/kontak');
}

function up_agenda($id){
$judul=$this->input->post('judul');
$isi=$this->input->post('agenda');
$val=array('judul_agenda'=>$judul,'isi_agenda'=>$isi);
$this->Model_update->up_agenda($id,$val);
redirect ('index/agenda');
}

function up_passu($user){
$pass=$this->input->post('pass1');
$pass2=md5($pass);
$val=array('password'=>$pass2);
$this->Model_update->upass($user,$val);
redirect('User/pro');
}

function verifed($id){
$stat='2';
$val=array('status'=>$stat);
$this->Model_update->verifed($id,$val);
redirect('Index/reservasi');
}
}