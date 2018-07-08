<?php
class Add_visitor_model extends CI_Model{
	function insert_visitor(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$purpose=$this->input->post('purpose');
		$staff=$this->input->post('staff');
		$office=$this->input->post('office');
		$dt = new DateTime();
		$dt=$dt->format('Y-m-d H:i:s');
		$datetime= explode (" ",$dt);
			$this->db->query("INSERT INTO lb_visit_trans(v_fname,v_lname,purpose,is_archived,vt_date,staff_id,vt_timein,office_id) VALUES('$fname','$lname','$purpose',0,'$datetime[0]','$staff','$datetime[1]','$office')");
	}
}
?>