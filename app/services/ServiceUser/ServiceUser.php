<?php

require 'IServiceUser.php';
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
            $this->db->query("INSERT INTO Users(User_ID, Name, Email, Password) VALUES (:User_ID, :Name, :Email, :Password)");
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

    public function authenticate($email, $password) {
        try {
            $this->db->query("SELECT * FROM Users WHERE Email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
            $result = $this->db->single();
        } catch(PDOException $e){
            die("Error:" . $e->getMessage());
        }

        if ($result) {
            if (password_verify($password, $result->Password)) {
                if($result->Role == 0){
                    $_SESSION['user'] = 'admin';
                    $_SESSION['user_id'] = $result->ID_User;
                }
                if($result->Role == 1){
                    $_SESSION['user'] = 'author';
                    $_SESSION['user_id'] = $result->ID_User;
                }
            } else {
                echo "<script>alert('Wrong Password')</script>";
            }
        }
        return false;
    }

    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM Users WHERE Email = :email");
        $this->db->bind(':email', $email);

        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>