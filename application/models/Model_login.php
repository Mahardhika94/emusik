<?php
class Model_login extends CI_Model
{

public function login_admin($user,$pass){
$this->db->where('username',$user);
$this->db->where('password',$pass);
$query=$this->db->get('admin');
return $query->result();
}

public function login_mahasiswa($user,$pass){
$this->db->where('nim',$user);
$this->db->where('password',$pass);
$query=$this->db->get('mahasiswa');
return $query->result();
}

public function login_dps($user,$pass){
$this->db->where('nidn',$user);
$this->db->where('password',$pass);
$query=$this->db->get('dosen');
return $query->result();
}

public function in_veriikasi_mail($val){
$this->db->insert('verifikasi',$val);
}

function get_blog($nim){
	$query=$this->db->query('SELECT mahasiswa.nim,repo_monitor.ket as ket FROM repo_monitor, skripsi, mahasiswa WHERE repo_monitor.id_judul = skripsi.id_judul AND mahasiswa.nim = skripsi.nim AND mahasiswa.nim='.$nim.'');
	if($query->num_rows()>0){
		return $query;
	}else{
	return array();}
}


function get_blog2($nim){
	$query=$this->db->query("select * from mahasiswa where nim like '%$nim' ");
	if($query->num_rows()>0){
		return $query;
	}else{
		return array();
	}
}


public function sel_kode($kode){
$this->db->where('kode',$kode);
$query=$this->db->get('verifikasi');
return $query->result();
}

function up_pass($email,$username,$pass){
$pass2=md5($pass);
$val=array('password'=>$pass2);
$this->db->where('email',$email);
$this->db->where('username',$username);
$qury=$this->db->update('user',$val);
}

function del_kode($email){
$this->db->where('email',$email);
$this->db->delete('verifikasi');
}

function sel_session($ip){
$this->db->where('ip',$ip);
$query=$this->db->get('session');
return $query->result();
}
}