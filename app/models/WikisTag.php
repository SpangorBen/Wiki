<?php

class WikisTag {
	private $id;
	private $Tag_ID;
	private $Wiki_ID;

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
