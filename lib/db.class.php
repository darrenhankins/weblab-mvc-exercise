<?php

	class Db implements db_interface{

		/*
		* Connect to the database
		*/

		public function connect() {

			// get Db information from ini file
			if(!isset(self::$connection)) {
				$config = parse_ini_file('../config/config.ini');
				self::$connection = new mysqli($config['host'],$config['username'],$config['password'],$config['dbname']);

			}

			if(self::$connection == false) {
				return false;

			}

			return self::$connection;

		}

		/*
		* Query the database
		*/

		public function query($query) {
			$connection = $this->connect();
			$result = $connection->query($query);
			return $result;

		}

		/*
		* Fetch rows from the database
		*/

		public function select($query){
			$rows = array();
			$result = $this->query($query);
			if($result == false) {
				return false;
			}
			while ($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
		}

		/* 
		* Fetch error from the Database
		*/

		public function error() {
			$connection = $this->connect();
			return $connection->error;

		}

		/*
		* Quote and escape value for use in a database query
		*/

		public function quote($value){
			$connection = $this->connect();
			return "'".$connection->real_escape_string($value)."'";
		}


	}