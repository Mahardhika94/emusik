<?php class Model_admin extends CI_Model {

function login($name,$pass){
$this->db->where('username',$name);
$this->db->where('password',$pass);
$query=$this->db->get('user');
return $query->result();
}

public function in_veriikasi_mail($val){
$this->db->insert('vermail',$val);
}

function sel_username($kat){
$this->db->where('username',$kat);
$query=$this->db->get('user');
return $query->result();
}


}