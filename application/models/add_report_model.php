<?php
class Add_report_model extends CI_Model{
	function insert_report(){
		$act=$this->input->post('act');
		$note=$this->input->post('note');
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
		$datetime= explode (" ",$dt);
			$this->db->query("INSERT INTO lb_inspection_rep(inc_id,notes,ins_time,ins_date) VALUES('$act','$note','$datetime[1]','$datetime[0]')");
	}
}
?>