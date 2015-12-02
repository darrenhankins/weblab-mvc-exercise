<?php

/**
 * Plant Object
 */

class Plant{
  
  private $_id;
  private $_date;
  private $_name;
  private $_user_id;
  private $_location;
  private $_weather_id;
  private $_soil_id;
  private $_temperature;
  private $_notes;


  public function getId(){return $this->_id;}
  public function setId($arg){$this->_id = $arg;}

  public function getDate(){return $this->_date;}
  public function setDate($arg){$this->_date = $arg;}
  
  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}

  public function getUserId(){return $this->_user_id;}
  public function setUserId($arg){$this->_user_id = $arg;}

  public function getLocation(){return $this->_location;}
  public function setLocation($arg){$this->_location = $arg;}

  public function getWeatherId(){return $this->_weather_id;}
  public function setWeatherId($arg){$this->_weather_id = $arg;}

  public function getSoilId(){return $this->_soil_id;}
  public function setSoilId($arg){$this->_soil_id = $arg;}

  public function getTemperature(){return $this->_temperature;}
  public function setTemperature($arg){$this->_temperature = $arg;}

  public function getNotes(){return $this->_notes;}
  public function setNotes($arg){$this->_notes = $arg;}
      
  
  public function hydrate($arr) {
    $this->setID(isset($arr["id"])?$arr["id"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setUserid(isset($arr["user_id"])?$arr["$user_id"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setWeatherId(isset($arr["weather_id"])?$arr["weather_id"]:'');
    $this->setSoildId(isset($arr["soil_id"])?$arr["soil_id"]:'');
    $this->setTemperature(isset($arr["temperature"])?$arr["temperature"]:'');
    $this->setNotes(isset($arr["notes"])?$arr["notes"]:'');
    
  }
  
}

