<?php 
class User_Login_model extends CI_Model {

	function get_user_login($username,$password) {
		$this -> db -> select('*');
	    $this -> db -> from('lb_user');
	    $this -> db -> join('lb_userinfo','lb_user.user_id = lb_userinfo.user_id');
	    $this -> db -> where('lb_user.username', $username);
	    $this -> db -> where('lb_user.password', $password);
	    $this -> db -> where('lb_user.is_active', 1);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1){
	    	return $query->result();
		}
	    else {
	    	return false;
   		}
	}
}