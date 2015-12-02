<?php

/**
 * User Object
 */

class User{
  
  private $_id;
  private $_name;
  private $_email;
  private $_role;


  public function getId(){return $this->_id;}
  public function setId($arg){$this->_id = $arg;}
  
  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}

  public function getEmail(){return $this->_email;}
  public function setEmail($arg){$this->_email = $arg;}

  public function getRole(){return $this->_role;}
  public function setRole($arg){$this->_role = $arg;}
      
  
  public function hydrate($arr) {
    $this->setId(isset($arr["id"])?$arr["id"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setEmail(isset($arr["email"])?$arr["email"]:'');
    $this->setRole(isset($arr["role"])?$arr["role"]:'');
  
  }
  
}

