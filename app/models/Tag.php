<?php

class Tag {
	private $Tag_ID;
	private $Title;

	public function __construct() {
		$this->Tag_ID = uniqid();
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
