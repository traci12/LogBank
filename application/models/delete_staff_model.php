<?php
class Delete_staff_model extends CI_Model{
	function deleteRecord($id){
		$this -> db -> select('*');
	    $this -> db -> from('lb_user');
	    $this -> db -> join('lb_userinfo','lb_user.user_id = lb_userinfo.user_id');
	    $this -> db -> where('lb_userinfo.userinfo_id', $id);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query->num_rows()>1){
		}
		else{
			foreach ($query->result() as $row){
    			$uid= $row->user_id;
    			$this->db->query("UPDATE lb_user set is_active = 0 where user_id = '$uid'");
    		}

		}
	}
}
?>