<?php
#user.model.php

class User extends Model{

	protected $table = 'user';

	public function authenticate(){

		$user = $this->db->select('*')
			->from($this->table)
			->where('username', $this->username)
			->get_one();

		if(!$user){
			return false;
		}
		if(password_verify($this->password, $user['password'])){
				$this->fill($user);
				return true;
		}else{
				return false;
		}
	}
}
