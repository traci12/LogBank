<?php

class ChatUser extends ChatBase{
	
	protected $name = '', $gravatar = '', $uid='';
	
	public function save(){
		
		DB::query("
			INSERT INTO webchat_users (user_id, name, gravatar)
			VALUES (
				'".DB::esc($this->uid)."',
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
		)");
		
		return DB::getMySQLiObject();
	}
	
	public function update(){
		DB::query("
			INSERT INTO webchat_users (user_id, name, gravatar)
			VALUES (
				'".DB::esc($this->uid)."',
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
			) ON DUPLICATE KEY UPDATE last_activity = NOW()");
	}
}

?>
