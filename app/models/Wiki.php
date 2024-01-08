<?php

class Wiki {
	private $Wiki_ID;
	private $Title;
	private $Description;
	private $Date;
	private $Archived;
	private $Category_ID;
	private $User_ID;

	public function __construct() {

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
