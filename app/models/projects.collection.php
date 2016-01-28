<?php
# projects.collection.php

class Projects_Collection extends Collection{
	protected $table = 'projects';
	public function __construct($where = false, $order_by = false){
		parent::__construct($this->table, $where, $order_by);
	}
}