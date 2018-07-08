<?php
class Update_currsession_model extends CI_Model{
	function insert_session($id){
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
			$this->db->query("INSERT INTO lb_currsession(user_id,curr_datetime) VALUES('$id','$dt')");
	}
}
?>