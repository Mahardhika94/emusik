<?php class Model_user extends CI_Model {

function login($name,$pass){
$this->db->where('username',$name);
$this->db->where('password',$pass);
$query=$this->db->get('user');
return $query->result();
}


function sel_username($kat){
$this->db->where('username',$kat);
$query=$this->db->get('user');
return $query->result();
}

function sel_mail($kat){
$this->db->where('email',$kat);
$query=$this->db->get('user');
return $query->result();
}

function sel_session($ip){
$this->db->where('ip',$ip);
$query=$this->db->get('session');
return $query->result();
}

function sel_session2($ip){
$this->db->where('ip',$ip);
$query=$this->db->get('session');
return $query;
}

function getreserv($si,$tgl){
$this->db->where('sift',$si);
$this->db->where('tanggal',$tgl);
$query=$this->db->get('pmsn');
return $query->result();
}

function get_libur($tgl){
$this->db->where('tanggal',$tgl);
$query=$this->db->get('libur');
return $query->result();
}

}