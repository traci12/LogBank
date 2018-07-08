<?php

/* Chat line is used for the chat entries */

class ChatLine extends ChatBase{
	
	protected $text = '', $author = '', $gravatar = '', $uid='';
	
	public function save(){
		DB::query("
			INSERT INTO webchat_lines (user_id, author, gravatar, text)
			VALUES (
				'".DB::esc($this->uid)."',
				'".DB::esc($this->author)."',
				'".DB::esc($this->gravatar)."',
				'".DB::esc($this->text)."'
		)");
		
		// Returns the MySQLi object of the DB class
		
		return DB::getMySQLiObject();
	}
}

?>
