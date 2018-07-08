<?php 
class Get_office_model extends CI_Model {

	function getOffice($id){
		$this -> db -> select('*');
	    $this -> db -> from('lb_office');
	    $this -> db -> where('office_id', $id);
	    $this -> db -> where('is_archived', 0);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1){
	    return $query->result();
		}
	   else
	   {
	     return false;
   }
	}
}
?>	