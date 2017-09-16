<?php class Model_update extends CI_Model {

function up_pass($val,$email){
$this->db->where('email',$email);
$this->db->update('user',$val);
}

function up_profile($val,$id){
$this->db->where('id_pro',$id);
$this->db->update('profile',$val);
}

function up_profile1($val,$id){
$this->db->where('username',$id);
$this->db->update('user',$val);
}

function up_agenda($id,$val){
$this->db->where('id_agenda',$id);
$this->db->update('agenda',$val);
}

function up_ssion($ip,$pass2,$username,$user){
$val=array('username'=>$username,'pass'=>$pass2,'ip'=>$ip);
$this->db->where('username',$user);
$query=$this->db->update('session',$val);
return $query;
}

function upass($user,$val){
$this->db->where('username',$user);
$query=$this->db->update('user',$val);
return $query;
}

function verifed($id,$val){
$this->db->where('id_pmsn',$id);
$query=$this->db->update('pmsn',$val);
return $query;
}

}