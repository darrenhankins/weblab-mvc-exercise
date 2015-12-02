<?php

/*
* Role Object
*/

class Role{

	private $_id;
	private $_name;

	public function getId(){return $this->_id;}
	public function setId($arg){$this->_id = $arg;}

	public function getName(){return $this->_name;}
	public function setName($arg){$this->_name = $arg;}

	public function hydrate($arr){
		$this->setId(isset($arr["id"])?$arr["id"]:'');
		$this->setName(isset($arr["name"])?$arr["name"]:'');

	}

}
