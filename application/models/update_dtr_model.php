<?php
class Update_dtr_model extends CI_Model{
	function update_record($id){
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
		$datetime= explode (" ",$dt);
		$this->db->query("UPDATE lb_dtrstaff SET dtr_timeout='$datetime[1]' WHERE dtr_id='$id'");
	}
}
?>