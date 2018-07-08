<?php
class add_user_model extends CI_Model{
	function insert_userinfo(){
		$uid=$this->input->post('uid');
		$fname=$this->input->post('firstname');
		$mname=$this->input->post('middlename');
		$lname=$this->input->post('lastname');
		$address1=$this->input->post('address1');
		$address2=$this->input->post('address2');
		$address3=$this->input->post('address3');
		$birthday=$this->input->post('birthday');
		$gender=$this->input->post('gender');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$office=$this->input->post('office');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$gravatar=md5($email);
		$usertype=$this->input->post('usertype');
		$this -> db -> select('user_id');
	    $this -> db -> from('lb_user');
	    $this -> db -> where('username', $username);
	    $this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query->num_rows()>=1){
			//redirect('login_alert','refresh');
		}
		else
		{
			$this->db->query("INSERT INTO webchat_users(user_id,name,gravatar) VALUES('$usertype','$username','$gravatar')");
			$this->db->query("INSERT INTO lb_user(username,password,is_active,user_type_id) VALUES('$username','$password',1,'$usertype')");
			$this -> db -> select('user_id');
	    	$this -> db -> from('lb_user');
	    	$this -> db -> where('username', $username);
	    	$this -> db -> limit(1);
			$query = $this -> db -> get();
			$result=$query->result();
			foreach($result as $row){
			$uid=$row->user_id;
		}
       	$this->db->query("INSERT INTO  lb_userinfo(user_id,fname,mname,lname,address1,address2,address3,birthday,gender,email,
        					contact) VALUES('$uid','$fname','$mname','$lname','$address1','$address2','$address3','$birthday','$gender','$email',
        					'$contact')");

		}
	}
}
?>