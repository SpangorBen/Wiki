<?php

class Wiki {
	private $Wiki_ID;
	private $Title;
	private $Contenu;
	private $Created_Date;
	private $Updated_Date;
	private $Archived;
	private $Deleted;
	private $Category_ID;
	private $User_ID;

	public function __construct() {
		$this->Wiki_ID = uniqid();
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
