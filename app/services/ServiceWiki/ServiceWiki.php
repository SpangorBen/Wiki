<?php

class ServiceWiki implements IServiceWiki
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Wiki $wiki)
    {
        // Implement the method here
    }

    public function Update(Wiki $wiki)
    {
        // Implement the method here
    }

    public function Delete($Wiki_ID)
    {
        // Implement the method here
    }

    public function Display()
    {
        // Implement the method here
    }

}

?>