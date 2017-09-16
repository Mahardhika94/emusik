<?php class Model_ins extends CI_Model {

function input_agenda($val){
$query=$this->db->insert('agenda',$val);
return $query;
}

function del_user($id){
$this->db->where('id_user',$id);
$this->db->delete('user');
}

function del_sesnow($user){
$this->db->where('username',$user);
$this->db->delete('session');
}
function del_agenda($id){
$this->db->where('id_agenda',$id);
$this->db->delete('agenda');
}

function add_libur($val){
$query=$this->db->insert('libur',$val);
return $query;
}

function del_libur($id){
$this->db->where('id_libur',$id);
$this->db->delete('libur');
}

function registrasi($val){
$query=$this->db->insert('user',$val);
return $query;
}

function ins_session($username,$pass2,$ip){
$val=array('username'=>$username,'pass'=>$pass2,'ip'=>$ip);
$query=$this->db->insert('session',$val);
return $query;
}

function del_session($ip){
$this->db->where('ip',$ip);
$query=$this->db->delete('session');
return $query;
}

function book($val){
$query=$this->db->insert('pmsn',$val);
return $query;
}

function del_book($id,$stat){
$this->db->where('id_pmsn',$id);
$this->db->where('status',$stat);
$query=$this->db->delete('pmsn');
return $query;
}

function add_kode($val2){
$this->db->insert('kodebook',$val2);
}
}