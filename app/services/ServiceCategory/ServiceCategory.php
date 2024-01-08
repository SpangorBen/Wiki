<?php

class ServiceCategory implements IServiceCategory
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Category $category)
    {
        // Implement the method here
    }

    public function Update(Category $category)
    {
        // Implement the method here
    }

    public function Delete($Category_ID)
    {
        // Implement the method here
    }

    public function Display()
    {
        // Implement the method here
    }

}

?>