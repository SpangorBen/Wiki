<?php

class ServiceUser implements IServiceUser
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(User $user)
    {
        // Implement the method here
        try {
            $this->db->query("INSERT INTO users");

        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function Update(User $user)
    {
        // Implement the method here
    }

    public function Delete($User_ID)
    {
        // Implement the method here
    }

    public function Display()
    {
        // Implement the method here
    }

}

?>