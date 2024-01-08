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
            $this->db->query("INSERT INTO Users(User_ID, Name, Email, Password) VALUES (:User_ID, :Name, :Email, :Password, :Role)");
            $this->db->bind(':User_ID', $user->User_ID);
            $this->db->bind(':Name', $user->Name);
            $this->db->bind(':Email', $user->Email);
            $this->db->bind(':Password', $user->Password);

            $this->db->execute();
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
        try {
            $this->db->query("SELECT * FROM Users WHERE Role = 1");
            $Auteurs = $this->db->resultSet();
            return $Auteurs;
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>