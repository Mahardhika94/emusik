<?php class Index extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	header('Access-Control-Allow-Origin: *');
	$this->load->model('Model_admin');
	$this->load->model('Model_sel');
	$this->load->model('Model_ins');
}

function index(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	redirect('index/admin');}
	else{
	$this->load->view('admin/login');}
}

function admin(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$this->load->view('admin/index',$data);}
	else{
	$this->load->view('admin/login');}
}

function musisi(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$kat="cm";
	$data['data']=$this->Model_sel->sel_all($kat);
	$data['username']=$this->session->userdata('username');
	$this->load->view('admin/musisi',$data);}
	else{
	$this->load->view('admin/login');}
}

function detail_user($sf,$tgl){
$dt['dt']=$this->Model_sel->get_us($sf,$tgl);
$rw=$dt['dt']->row_array();
$dr['dr']=$this->Model_sel->detail_us($rw['username']);
$rt=$dr['dr']->row_array();
$data['username']=$rt['username'];
$data['nama']=$rt['nama'];
$data['no_hp']=$rt['no_hp'];
$data['email']=$rt['email'];
$data['id_user']=$rt['id_user'];
$this->load->view('admin/pro_user',$data);
}

function dl_bok($sf,$tgl){
$dt['dt']=$this->Model_sel->dl_bok($sf,$tgl);
redirect('Index/reservasi');
}

function verified($sf,$tgl){
$dt['dt']=$this->Model_sel->get_us($sf,$tgl);
$rw=$dt['dt']->row_array();
$usr=$rw['username'];
$val=array('status'=>2);
$kode=rand(1111111,9999999);
$val2=array('kode_book'=>$kode,'username'=>$usr,'sf'=>$sf,'tanggal'=>$tgl);
$this->Model_ins->add_kode($val2);
$this->Model_sel->verified($sf,$tgl,$val);
redirect('Index/reservasi');
}

function getter($tgl){
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s1');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s1']=$rw['status'];}else{
	$data['s1']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s2($tgl);
	$this->db->where('sift','s2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s2']=$rw['status'];}else{
	$data['s2']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s3($tgl);
	$this->db->where('sift','s3');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s3']=$rw['status'];}else{
	$data['s3']=0;
	}

	
	$dr['dr']=$this->Model_sel->sel_s4($tgl);
	$this->db->where('sift','s4');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s4']=$rw['status'];}else{
	$data['s4']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s5($tgl);
	$this->db->where('sift','s5');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s5']=$rw['status'];}else{
	$data['s5']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s6($tgl);
	$this->db->where('sift','s6');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s6']=$rw['status'];}else{
	$data['s6']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s7($tgl);
	$this->db->where('sift','s7');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s7']=$rw['status'];}else{
	$data['s7']=0;
	}

	return $data;
}

function bokk($kode=0){
$rn['rn']=$this->Model_sel->get_kobok1($kode);
$row=count($rn['rn']);
if($row>0){
$data['data']=$this->Model_sel->get_kobok($kode);
$row1=$data['data']->row_array();
$data['usrn']=$row1['username'];
$data['sf']=$row1['sf'];
$data['tgl']=$row1['tanggal'];
$data['kode']=$kode;
$dt['dt']=$this->Model_sel->sel_profile($data['usrn']);
$row2=$dt['dt']->row_array();
$data['name']=$row['nama'];
$this->load->view('admin/su_book',$data);

}else{
echo "Kode Booking Tidak Tersedia";
}
}

function sel(){
$tgl='2017-06-25';
$data=$this->getter($tgl);
echo $data['s2'].' '.$data['s1'].' '.$data['s3'].' '.$data['s4'].' '.$data['s5'].' '.$data['s6'].' '.$data['s7'];
}

function reservasi($tgl=0){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	if($tgl==0){
	$tgl1='20'.date('y-m-d');
	$data['skr']=$tgl1;
	$rw=$this->getter($tgl1);
	//$this->Model_sel->sel_pemesanan($tgl1);
	//$rw=$dt['dt']->row_array();
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}else{
	$tgl2=$this->input->post("tahun");
	$data['skr']=$tgl2;
	//$dt['dt']=$this->Model_sel->sel_pemesanan($tgl2);
	//$rw=$dt['dt']->row_array();
	$rw=$this->getter($tgl2);
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}
	$this->load->view('admin/reservasi',$data);}
	else{
	$this->load->view('admin/login');}
}

function up_agenda($id){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['data']=$this->Model_sel->sel_agenda2($id);
	$row=$data['data']->row_array();
	$data['id_agenda']=$row['id_agenda'];
	$data['judul_agenda']=$row['judul_agenda'];
	$data['isi_agenda']=$row['isi_agenda'];
	$data['username']=$this->session->userdata('username');
	$this->load->view('admin/update_agenda',$data);}
	else{
	$this->load->view('admin/login');}
}

function agenda(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$data['data']=$this->Model_sel->sel_agenda();
	$this->load->view('admin/list_agenda',$data);}
	else{
	$this->load->view('admin/login');}
}

function ins_agenda(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	
	$data['username']=$this->session->userdata('username');
	$this->load->view('admin/tambah_agenda',$data);}
	else{
	$this->load->view('admin/login');}
}

function profile(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$data['data']=$this->Model_sel->sel_profile($data['username']);
	$row=$data['data']->row_array();
	$data['nope']=$row['no_hp'];
	$data['email']=$row['email'];
	$data['nama']=$row['nama'];
	$data['password']=$this->session->userdata('password');
	$this->load->view('admin/profile',$data);}
	else{
	$this->load->view('admin/login');}
}

function kontak(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$data['data']=$this->Model_sel->sel_kontak();
	$row=$data['data']->row_array();
	$data['email']=$row['email'];
	$data['nope']=$row['no'];
	$data['url']=$row['url'];
	$data['profile']=$row['profile'];
	$this->load->view('admin/kontak',$data);}
	else{
	$this->load->view('admin/login');}
}

function replace($id=0){
$data['data']=$this->Model_sel->sel_kode2($id);
$row=count($data['data']);
if($row>0){
$data['kode']=$id;
$this->load->view('admin/rep_pass',$data);
}else{
echo "Silakan Cek E-mail anda untuk memperbaiki Password";
}
	
}
function det_user($id=0){
$this->load->view('admin/det_user');
}

function libur(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$data['data']=$this->Model_sel->sel_libur();
	$this->load->view('admin/set_date',$data);}
	else{
	$this->load->view('admin/login');}
}

function user(){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	$data['data']=$this->Model_sel->sel_kontak();
	$row=$data['data']->row_array();
	$data['email']=$row['email'];
	$data['nope']=$row['no_hp'];
	$this->load->view('admin/user',$data);}
	else{
	$this->load->view('admin/login');}
}

function test(){
$this->load->view('user/test');
}

function sel_username($kat=0){
$data['data']=$this->Model_admin->sel_username($kat);
$row=count($data['data']);
if($row>0){
echo "ada";

}else{
echo "tidak ada";
}

}

function reservasi2($tgl=0){
	$stat=$this->session->userdata('log');
	if($stat=='Admin'){
	$data['username']=$this->session->userdata('username');
	if($tgl==0){
	$tgl1='20'.date('y-m-d');
	$data['skr']=$tgl1;
	$rw=$this->getter2($tgl1);
	//$this->Model_sel->sel_pemesanan($tgl1);
	//$rw=$dt['dt']->row_array();
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}else{
	$tgl2=$this->input->post("tahun");
	$data['skr']=$tgl2;
	//$dt['dt']=$this->Model_sel->sel_pemesanan($tgl2);
	//$rw=$dt['dt']->row_array();
	$rw=$this->getter2($tgl2);
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}
	$this->load->view('admin/reservasi2',$data);}
	else{
	$this->load->view('admin/login');}
}

function getter2($tgl){
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s1');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s1']=$rw['status'];}else{
	$data['s1']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s2($tgl);
	$this->db->where('sift','s2');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s2']=$rw['status'];}else{
	$data['s2']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s3');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s3']=$rw['status'];}else{
	$data['s3']=0;
	}

	
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s4');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s4']=$rw['status'];}else{
	$data['s4']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s5');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s5']=$rw['status'];}else{
	$data['s5']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s6');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s6']=$rw['status'];}else{
	$data['s6']=0;
	}
	
	$dr['dr']=$this->Model_sel->sel_s1($tgl);
	$this->db->where('sift','s7');
	$this->db->where('std','2');
	$this->db->where('tanggal',$tgl);
	$tt=$this->db->count_all_results('pmsn');
	if($tt >0 ){
	$rw=$dr['dr']->row_array();
	$data['s7']=$rw['status'];}else{
	$data['s7']=0;
	}

	return $data;
}

function dl_bok2($sf,$tgl){
$dt['dt']=$this->Model_sel->dl_bok2($sf,$tgl);
redirect('Index/reservasi2');
}

function verified2($sf,$tgl){
$dt['dt']=$this->Model_sel->get_us($sf,$tgl);
$rw=$dt['dt']->row_array();
$usr=$rw['username'];
$val=array('status'=>2);
$kode=rand(1111111,9999999);
$val2=array('kode_book'=>$kode,'username'=>$usr,'sf'=>$sf,'tanggal'=>$tgl);
$this->Model_ins->add_kode($val2);
$this->Model_sel->verified2($sf,$tgl,$val);
redirect('Index/reservasi2');
}

}
