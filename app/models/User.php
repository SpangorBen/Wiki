<?php

class User {
	private $User_ID;
	private $Name;
	private $Email;
	private $Password;
	private $Role;

	public function __construct() {
		$this->User_ID = uniqid();
	}

	public function __set($property, $value) {
		 if (property_exists($this, $property)){
			$this->$property = $value;
		}
	}

	public function __get($property) {
		 if (property_exists($this, $property)){
			return $this->$property;
		}
	}

}
?>
