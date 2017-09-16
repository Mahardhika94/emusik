<?php class Insert extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	$this->load->model('Model_ins');
	$this->load->model('Model_sel');
	$this->load->model('Model_user');
}

function input_agenda(){
$judul=$this->input->post('judul');
$isi=$this->input->post('agenda');
$val=array('judul_agenda'=>$judul,'isi_agenda'=>$isi);
$this->Model_ins->input_agenda($val);
redirect('index/agenda');
}

function del_user($id,$usr){
$this->Model_ins->del_sesnow($usr);
$this->Model_ins->del_user($id);
redirect('Index/musisi');

}

function del_agenda($id){
$this->Model_ins->del_agenda($id);
redirect('Index/agenda');
}

function add_libur(){
$tgl=$this->input->post('libur');
$val=array('tanggal'=>$tgl,'ket'=>'Libur');
$this->Model_ins->add_libur($val);
redirect('Index/libur');
}

function del_libur($id){
$this->Model_ins->del_libur($id);
redirect('Index/libur');
}

function boking($sift,$stat,$tgl){
$ip=$_SERVER['REMOTE_ADDR'];
$dt['dt']=$this->Model_user->sel_session2($ip);
$rw=$dt['dt']->row_array();
$username=$rw['username'];
$val=array('sift'=>$sift,'tanggal'=>$tgl,'status'=>$stat,'username'=>$username);
$this->Model_ins->book($val);
$this->remider($tgl);
redirect('User/suc');
}

function boking2($sift,$tgl){
$stat=1;
$ip=$_SERVER['REMOTE_ADDR'];
$dt['dt']=$this->Model_user->sel_session2($ip);
$rw=$dt['dt']->row_array();
$username=$rw['username'];
$val=array('sift'=>$sift,'tanggal'=>$tgl,'status'=>$stat,'username'=>$username);
$this->Model_ins->book($val);
$this->remider($tgl);
redirect('User/suc');
}

function batal_book($id){
$stat="1";
$this->Model_ins->del_book($id,$stat);
redirect('User/Index');

}

function kodebok($tgl,$sf){
$dt['dt']=$this->Model_sel->getkode($tgl,$sf);
$rw=$dt['dt']->row_array();
$data['kode']=$rw['kode_book'];
$this->load->view('user/kobok',$data);
}
function remider($tgl){
$dt['dt']=$this->Model_sel->sel_promin();
$rw=$dt['dt']->row_array();
$email=$rw['email'];

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
        $ci->email->subject('Pemesanan Baru E-Musik ');
        $ci->email->message("Pemesanan Baru Pada '".$tgl."' Silakan dikonfirmasi ");
        if ($this->email->send()) {
            echo "Kode Verifikasi Telah Terkirim Ke Email anda </br> silakan cek Mail anda untuk Mengganti Password ganti passowrd";
        } else {
            show_error($this->email->print_debugger());
             echo "Kode Gagal Terkirim, Silakan coba beberapa saat lagi";
        }



}

function boking3($sift,$stat,$tgl){
$ip=$_SERVER['REMOTE_ADDR'];
$dt['dt']=$this->Model_user->sel_session2($ip);
$rw=$dt['dt']->row_array();
$username=$rw['username'];
$std=2;
$val=array('sift'=>$sift,'tanggal'=>$tgl,'status'=>$stat,'username'=>$username,'std'=>$std);
$this->Model_ins->book($val);
$this->remider($tgl);
redirect('User/suc');
}

}