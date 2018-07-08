<?php
class Update_checklist_model extends CI_Model{
	function updateChecklist(){
		$id=$this->input->post('id');
		$office=$this->input->post('office');
		$checklist=$this->input->post('checklist');
		$time=$this->input->post('time');
        $result=$this->db->query("UPDATE lb_act_type set inc_des='$checklist',time_code='$time',office_id='$office' where inc_id = '$id'");
	}
}
?>