<?php class Model_sel extends CI_Model {

function sel_agenda(){
	$query=$this->db->get('agenda');
	if($query->num_rows()>0){
	return $query->result();
	}else{
	return array();
	}
}

function sel_promin(){
$this->db->where('id_user','1');
$query=$this->db->get('user');
return $query;

}

function sel_agenda2($id){
	$this->db->where('id_agenda',$id);
	$query=$this->db->get('agenda');
	if($query->num_rows()>0){
	return $query;
	}else{
	return array();
	}
}

function sel_username($username){
	$this->db->where('username',$username);
	$query=$this->db->get('user');

	if($query->num_rows()>0){
	return 1;
	}else{
	return 0;
	}
}

function sel_mail($mail){
	$this->db->where('email',$mail);
	$query=$this->db->get('user');
	if($query->num_rows()>0){
	return 1;
	}else{
	return 0;
	}
}

function sel_profile($username){
	$this->db->where('username',$username);
	$query=$this->db->get('user');
	return $query;
}

function sel_kontak(){
	$id="id";
	$this->db->where('id_pro',$id);
	$query=$this->db->get('profile');
	return $query;
}

function sel_all($kat){
$this->db->where('level_user',$kat);
$query=$this->db->get('user');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function sel_libur(){
$query=$this->db->get('libur');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

public function sel_kode2($kode){
$this->db->where('kode',$kode);
$query=$this->db->get('verifikasi');
return $query->result();
}

function all_agenda(){
$this->db->order_by('waktu_input','DESC');
$query=$this->db->get('agenda');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function det_agenda($id){
$this->db->where('id_agenda',$id);
$query=$this->db->get('agenda');
return $query;
}

function sel_libur1($tgl){
$this->db->where('tanggal',$tgl);
$query=$this->db->get('libur');
if($query->num_rows()>0){
	return 1;
	}else{
	return 0;
	}
}

function sel_pemesanan($tgl){
$query=$this->db->query("select count(if (sift = 's1', 1, NULL) )as s1,
count(if (sift = 's2', 1, NULL)) as s2,
count(if (sift = 's3', 1, NULL)) as s3,
count(if (sift = 's4', 1, NULL)) as s4,
count(if (sift = 's5', 1, NULL)) as s5,
count(if (sift = 's6', 1, NULL)) as s6,
count(if (sift = 's7', 1, NULL)) as s7 
from pmsn where tanggal='".$tgl."';");
return $query;
}

function sel_pemesanan2($tgl){
$query=$this->db->query("select count(if (sift = 's1', 1, NULL) )as s1,
count(if (sift = 's2', 1, NULL)) as s2,
count(if (sift = 's3', 1, NULL)) as s3,
count(if (sift = 's4', 1, NULL)) as s4,
count(if (sift = 's5', 1, NULL)) as s5,
count(if (sift = 's6', 1, NULL)) as s6,
count(if (sift = 's7', 1, NULL)) as s7 
from pmsn where tanggal='".$tgl."' and std='2';");
return $query;
}


function sel_s1($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s1');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}

}

function sel_s2($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s2');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}
function sel_s3($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s3');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}
function sel_s4($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s4');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}



function sel_s5($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s5');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}
function sel_s6($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s6');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}

function sel_s7($tgl){
$this->db->where('tanggal',$tgl);
$this->db->where('sift','s7');
$query=$this->db->get('pmsn');
if($query->num_rows()>0){
	return $query;
}else{
return 0;
}

}

//function selpmns(sf,tgl){
//$this->db->where()
//}

function my_book($usr,$tgl){
//$this->db->where('username',$usr);
//$this->db->order_by('tanggal','DESC');
$query=$this->db->query("SELECT * 
FROM  `pmsn` 
WHERE tanggal >=  '".$tgl."'
AND username =  '".$usr."'
ORDER BY  `pmsn`.`tanggal` DESC ");
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function get_us($sf,$tgl){
$this->db->where('sift',$sf);
$this->db->where('tanggal',$tgl);
$query=$this->db->get('pmsn');
return $query;
}

function dl_bok($sf,$tgl){
$this->db->where('sift',$sf);
$this->db->where('tanggal',$tgl);
$query=$this->db->delete('pmsn');
return $query;
}

function verified($sf,$tgl,$val){
$this->db->where('sift',$sf);
$this->db->where('tanggal',$tgl);
$query=$this->db->update('pmsn',$val);
return $query;
}

function detail_us($usr){
$this->db->where('username',$usr);
$query=$this->db->get('user');
return $query;
}

function get_kobok($kode){
$this->db->where('kode_book',$kode);
$query=$this->db->get('kodebook');
return $query;
}

function get_kobok1($kode){
$this->db->where('kode_book',$kode);
$query=$this->db->get('kodebook');
return $query->result();
}

function getkode($tgl,$sf){
$this->db->where('sf',$sf);
$this->db->where('tanggal',$tgl);
$query=$this->db->get('kodebook');
return $query;
}

function libur($tgl){

$query=$this->db->query("SELECT * 
FROM  `libur` 
WHERE tanggal >=  '".$tgl."'
ORDER BY  `libur`.`tanggal` DESC ");
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function dl_bok2($sf,$tgl){
$this->db->where('sift',$sf);
$this->db->where('std','2');
$this->db->where('tanggal',$tgl);
$query=$this->db->delete('pmsn');
return $query;
}

function verified2($sf,$tgl,$val){
$this->db->where('sift',$sf);
$this->db->where('std','2');
$this->db->where('tanggal',$tgl);
$query=$this->db->update('pmsn',$val);
return $query;
}
}