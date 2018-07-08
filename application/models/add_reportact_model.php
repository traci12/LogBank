<?php
class Add_reportact_model extends CI_Model{
	function insert_report(){
		$staff=$this->input->post('staff');
		$note=$this->input->post('note');
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
		$datetime= explode (" ",$dt);
			$this->db->query("INSERT INTO lb_staff_act(user_id,act_des,act_time,act_date) VALUES('$staff','$note','$datetime[1]','$datetime[0]')");
	}
}
?>