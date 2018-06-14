<?php 
/**
 * 
 */
class LoginModel extends CI_Model
{
	
	 public function validate_login($username,$password){
	 	$query = $this->db->where(['username'=>$username, 'password'=>$password])
	 						->get('tbl_users');
	 		if($query->num_rows()){ 
	 			return $query->row()->id;
	 		}else{return FALSE;}
	 }
}