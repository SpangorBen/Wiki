<?php

class Category {
	private $Category_ID;
	private $Title;
	private $Description;

	public function __construct() {
		$this->Category_ID = uniqid();
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
