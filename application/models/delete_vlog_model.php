<?php
class Delete_vlog_model extends CI_Model{
	function delete_dtrecord($id){
		$this->db->query("UPDATE lb_visit_trans SET is_archived=1 WHERE vt_id='$id'");
	}
}
?>