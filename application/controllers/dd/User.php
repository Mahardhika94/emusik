<?php class User extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
$this->load->library('pagination');
	$this->load->database();
	header('Access-Control-Allow-Origin: *');
	$this->load->model('Model_user');
	$this->load->model('Model_sel');
	$this->load->model('Model_ins');
	$this->load->model('Model_login');
}

function sel_username($kat=0){
$data['data']=$this->Model_user->sel_username($kat);
$row=count($data['data']);
if($row>0){
echo "ada";

}else{
echo "tidak ada";
}

}

function sel_mail($kat=0){
$kat2 = str_replace("reresxxxx98","@",$kat);
//echo $kat2;
$data['data']=$this->Model_user->sel_mail($kat2);
$row=count($data['data']);
if($row>0){
echo "ada";

}else{
echo "tidak ada";
}

}

function index(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
$tgl='20'.date('y-m-d');
	$data['tgl']=$this->Model_sel->libur($tgl);
	$dr['dr']=$this->Model_sel->sel_kontak();
	$rw=$dr['dr']->row_array();
	$data['profile']=$rw['profile'];
	$this->load->view('user/home',$data);
}else{
	$this->load->view('user/login');
}
}

function daftar(){
$this->load->view('user/daftar');
}

function registrasi(){
$nama=$this->input->post('nama');
$username=$this->input->post('username');
$pass=$this->input->post('pass1');
$email=$this->input->post('email');
$nope=$this->input->post('hp');
$level='cm';
$pass2=md5($pass);
$val=array('username'=>$username,'password'=>$pass2,'level_user'=>$level,'nama'=>$nama,'email'=>$email,'no_hp'=>$nope);
$this->Model_ins->registrasi($val);
redirect('User/index');
}

function lokasi(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	$data['datum']=$this->Model_sel->sel_kontak();
	$row=$data['datum']->row_array();
	$data['url']=$row['url'];
	$this->load->view('user/lokasi',$data);
}else{
	$this->load->view('user/login');
}

}

function pro(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	$data['datum']=$this->Model_user->sel_session2($ip);
	$row=$data['datum']->row_array();
	$username=$row['username'];
	$data['datum1']=$this->Model_sel->sel_profile($username);
	$row1=$data['datum1']->row_array();
	$data['nope']=$row1['no_hp'];
	$data['email']=$row1['email'];
	$data['nama']=$row1['nama'];
	$data['email']=$row1['email'];
	$data['username']=$username;
	$this->load->view('user/profil',$data);
}else{
	$this->load->view('user/login');
}}

function up_pass($username){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	$data['username']=$username;
	$this->load->view('user/up_pass',$data);
}else{
	$this->load->view('user/login');
}
}

function kontak(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
$data['datum']=$this->Model_sel->sel_kontak();
$row=$data['datum']->row_array();
$data['email']=$row['email'];
$data['nope']=$row['no'];
	$this->load->view('user/kontak',$data);
}else{
	$this->load->view('user/login');
}
}

function agenda(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	$data['datum']=$this->Model_sel->all_agenda();
	$this->load->view('user/agenda',$data);
}else{
	$this->load->view('user/login');
}
}

function sel_agenda($id){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	$data['datum']=$this->Model_sel->det_agenda($id);
	$row1=$data['datum']->row_array();
	$data['judul']=$row1['judul_agenda'];
	$data['isi']=$row1['isi_agenda'];
	$data['waktu']=$row1['waktu_input'];
	$this->load->view('user/det_agenda',$data);
}else{
	$this->load->view('user/login');
}
}

function sel_libur($tgl){
$dating=$this->Model_sel->sel_libur1($tgl);
$row=count($dating);
if($dating >0){
echo "libur";
}else{
echo "tidak libur";
}

}

function get_tgl(){
$tgl='20'.date('y-m-d');
$dr['dr']=$this->Model_sel->gettgl($tgl);

}

function suc(){
$ip=$_SERVER['REMOTE_ADDR'];
$dt['dt']=$this->Model_user->sel_session2($ip);
$rw=$dt['dt']->row_array();
$username=$rw['username'];
$dr['dr']=$this->Model_sel->sel_profile($username);
$row=$dr['dr']->row_array();
$data['nama']=$row['nama'];
$this->load->view('user/succes',$data);
}

function getmybook(){
$ip=$_SERVER['REMOTE_ADDR'];
$dt['dt']=$this->Model_user->sel_session2($ip);
$rw=$dt['dt']->row_array();
$tgl='20'.date('y-m-d');
$username=$rw['username'];
$data=$this->Model_sel->my_book($username,$tgl);
return $data;
}

function tdo(){
$cc=$this->getmybook();
foreach($cc as $row){
echo $row->tanggal .'</br>';
}
}

function list_book2(){
$data['datum']=$this->getmybook();
$this->load->view('user/list_book',$data);
}
function jadwal($tgl=0){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	if($tgl==0){
	$tgl1='20'.date('y-m-d');
	$data['skr']=$tgl1;
	$dt['dt']=$this->Model_sel->sel_pemesanan($tgl1);
	$rw=$dt['dt']->row_array();
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
	$dt['dt']=$this->Model_sel->sel_pemesanan($tgl2);
	$rw=$dt['dt']->row_array();
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}
	$this->load->view('user/pesan',$data);
}else{
	$this->load->view('user/login');
}
}

function list_book(){
$data['datum']=$this->getmybook();
$this->load->view('user/list_book',$data);
}


function help(){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);
if($row>0){
	
	$this->load->view('user/help');
}else{
	$this->load->view('user/login');
}
}

function sipt($no){
	if($no == 1){
	$sip='s1';
	}elseif($no == 2){
	$sip='s2';
	}elseif($no == 3){
	$sip='s3';
	}elseif($no == 4){
	$sip='s4';
	}elseif($no == 5){
	$sip='s5';
	}elseif($no == 6){
	$sip='s6';
	}elseif($no == 7){
	$sip='s7';
	}
return $sip;
}

function  getreserv($si,$tgl){
$rw=$this->Model_user->getreserv($si,$tgl);
$rw2=count($rw);
if($rw2>0){
return 1;
}else{
return 0;
}

}

function get_libur($tgl){
$rw=$this->Model_user->get_libur($tgl);
$rw2=count($rw);
if($rw2>0){
return 1;
}else{
return 0;
}

}

function saran(){
$kon = 1; 
while ($kon > 0){
$ci = rand(0,1);
if($ci == 0){
$c2=rand(1,7);
$gbest=rand(1,7);
$x=$this->sipt($gbest);
$tgl1=date('y-m-d');
$tgl2 = date('Y-m-d', strtotime('+ '.$gbest .' days', strtotime($tgl1)));
$v=$this->getreserv($x,$tgl2);
if($v == 1){
  $kon = 1;
}else{
$v2 = $this->get_libur($tgl2);
	if($v2 == 1){
	$kon = 1;
	}else{
	$data['sift']=$x;
	$data['tanggal']=$tgl2;
	$kon=0;
	}
}
}else{
$c2=rand(8,14);
$gbest=rand(1,7);
$x=$this->sipt($gbest);
$tgl1=date('y-m-d');
$tgl2 = date('Y-m-d', strtotime('+ '.$gbest .' days', strtotime($tgl1)));
$v=$this->getreserv($x,$tgl2);
if($v == 1){
  $kon = 1;
}else{
$v2 = $this->get_libur($tgl2);
	if($v2 == 1){
	$kon = 1;
	}else{
	$data['sift']=$x;
	$data['tanggal']=$tgl2;
	$kon=0;
	}
}
}

}
//echo $x . ' '. $tgl2;
$this->load->view('user/saran',$data);
}

function coba2(){
$this->load->view('User/saran');
}

function jadwal2($tgl=0){
$ip=$_SERVER['REMOTE_ADDR'];
$data['data']=$this->Model_user->sel_session($ip);
$row=count($data['data']);

if($row>0){
	if($tgl==0){
	$tgl1='20'.date('y-m-d');
	$data['skr']=$tgl1;
	$dt['dt']=$this->Model_sel->sel_pemesanan2($tgl1);
	$rw=$dt['dt']->row_array();
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
	$dt['dt']=$this->Model_sel->sel_pemesanan2($tgl2);
	$rw=$dt['dt']->row_array();
	$data['s1']=$rw['s1'];
	$data['s2']=$rw['s2'];
	$data['s3']=$rw['s3'];
	$data['s4']=$rw['s4'];
	$data['s5']=$rw['s5'];
	$data['s6']=$rw['s6'];
	$data['s7']=$rw['s7'];
	}
	$this->load->view('user/pesan2',$data);
}else{
	$this->load->view('user/login');
}
}
} 