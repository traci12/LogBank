<?php 
class User_getprofile_model extends CI_Model {

	function get_userprofile($uid){
		$this -> db -> select('*');
	    $this -> db -> from('lb_user');
	    $this -> db -> join('lb_userinfo','lb_user.user_id = lb_userinfo.user_id');
	    $this -> db -> where('lb_userinfo.user_id', $uid);
	    $this -> db -> where('lb_user.is_active', 1);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1){
	    return $query->result();
		}
	   else
	   {
	     return false;
   }
	}
}
?>	