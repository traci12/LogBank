<?php
class Add_checklist_model extends CI_Model{
	function insert_checklist(){
		$desc=$this->input->post('checklist');
		$time=$this->input->post('time');
		$office=$this->input->post('office');
			$this->db->query("INSERT INTO lb_act_type(inc_des,time_code,office_id,is_archived) VALUES('$desc','$time','$office',0)");
	}
}
?>