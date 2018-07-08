<?php 
class Get_checklist_model extends CI_Model {

	function getChecklist($id){
		$this -> db -> select('*');
	    $this -> db -> from('lb_act_type');
	    $this -> db -> where('inc_id', $id);
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