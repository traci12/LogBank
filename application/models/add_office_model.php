<?php
class add_office_model extends CI_Model{
	function insert_office(){
		$building=$this->input->post('building');
		$ofcode=$this->input->post('ofcode');
		$ofdesc=$this->input->post('ofdesc');
		$roomnum=$this->input->post('roomnum');
		$this -> db -> select('*');
	    $this -> db -> from('lb_office');
	    $this -> db -> where('office_code', $ofcode);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query->num_rows()>=1){
			//redirect('login_alert','refresh');
		}
		else
		{
			$this->db->query("INSERT INTO lb_office(office_code,office_desc,room_no,building,is_archived) 
						VALUES('$ofcode','$ofdesc','$roomnum','$building',0)");
		}
	}
}
?>