<?php
class Delete_model extends CI_Model{
	function delete_dtrecord($id){
		$this->db->query("UPDATE lb_dtrstaff SET is_archived=1 WHERE dtr_id='$id'");
	}
}
?>