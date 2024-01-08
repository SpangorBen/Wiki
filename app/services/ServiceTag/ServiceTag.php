<?php

class ServiceTag implements IServiceTag
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Tag $tag)
    {
        // Implement the method here
    }

    public function Update(Tag $tag)
    {
        // Implement the method here
    }

    public function Delete($Tag_ID)
    {
        // Implement the method here
    }

    public function Display()
    {
        // Implement the method here
    }

}

?>