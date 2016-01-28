<?php
# projects.collection.php

class Tasks_Collection extends Collection{
	protected $table = 'tasks';
	public function __construct($where = false, $order_by = false){
		parent::__construct($this->table, $where, $order_by);
	}
}