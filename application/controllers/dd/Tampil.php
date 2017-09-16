<?php class Tampil extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	$this->load->model('Model_sel');
}


function sel_agenda($id){
$data['data']=$this->Model_sel->sel_agenda2($id);
$row=$data['data']->row_array();
$this->load->view('admin/update_agenda');
}
}