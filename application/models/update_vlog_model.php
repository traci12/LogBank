<?php
class Update_vlog_model extends CI_Model{
	function update_record($id){
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
		$datetime= explode (" ",$dt);
		$this->db->query("UPDATE lb_visit_trans SET vt_timeout='$datetime[1]' WHERE vt_id='$id'");
	}
}
?>