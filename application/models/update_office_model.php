<?php
class Update_office_model extends CI_Model{
	function updateOffice(){
		$id=$this->input->post('id');
		$ofcode=$this->input->post('ofcode');
		$ofdesc=$this->input->post('ofdesc');
		$room_no=$this->input->post('room_no');
		$building=$this->input->post('building');
		echo "lol";
        $result=$this->db->query("UPDATE lb_office set office_code='$ofcode',office_desc='$ofdesc',room_no='$room_no',building='$building' where office_id = '$id'");
	}
}
?>