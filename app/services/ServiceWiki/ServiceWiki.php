<?php

require 'IServiceWiki.php';
class ServiceWiki implements IServiceWiki
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Wiki $wiki)
    {
        // Implement the method here
        try {
            $this->db->query("INSERT INTO Wiki(Wiki_ID, Title, Contenu, Category_ID, User_ID, Description) VALUES(:Wiki_ID, :Title, :Contenu, :Category_ID, :User_ID, :Description)");
            $this->db->bind(':Wiki_ID', $wiki->Wiki_ID);
            $this->db->bind(':Title', $wiki->Title);
            $this->db->bind(':Contenu', $wiki->Contenu);
            $this->db->bind(':Category_ID', $wiki->Category_ID);
            $this->db->bind(':User_ID', $wiki->User_ID);
            $this->db->bind(':Description', $wiki->Description);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Update(Wiki $wiki)
    {
        // Implement the method here
        try{
            $this->db->query("UPDATE Wiki SET Title = :Title, Contenu = :Contenu, Category_ID = :Category_ID");
            $this->db->bind(':Title', $wiki->Title);
            $this->db->bind(':Contenu', $wiki->Contenu);
            $this->db->bind(':Category_ID', $wiki->Category_ID);

            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Delete($Wiki_ID)
    {
        // Implement the method here
        try {
            $this->db->query("DELETE FROM Wiki WHERE Wiki_ID = :Wiki_ID");
            $this->db->bind(':Wiki_ID', $Wiki_ID);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Display()
    {
        // Implement the method here
        try {
            $this->db->query("SELECT Wiki.*, Category.Title AS Category_Title, Users.Name AS Name
            FROM Wiki
            INNER JOIN Category ON Category.Category_ID = Wiki.Category_ID
            INNER JOIN Users ON Users.User_ID = Wiki.User_ID
            WHERE Wiki.Deleted = 0 AND Wiki.Archived = 0
            ORDER BY Wiki.Updated_Date DESC");
            $Wikis = $this->db->resultSet();
            return $Wikis;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function GetWiki($Wiki_ID){
        $this->db->query("SELECT Wiki.*, Category.Title AS Category_Title, Users.Name AS Name
        FROM Wiki
        INNER JOIN Category ON Category.Category_ID = Wiki.Category_ID
        INNER JOIN Users ON Users.User_ID = Wiki.User_ID
        WHERE Wiki.Wiki_ID = :id");
        $this->db->bind(':id', $Wiki_ID);
        return $this->db->single();
    }

    public function WikiTag($Wiki_ID, $Tag_ID)
    {
        try{
            $this->db->query("INSERT INTO WikisTag VALUES(:WikiTag_ID, :Tag_ID, :Wiki_ID)");
            $this->db->bind(':WikiTag_ID', uniqid());
            $this->db->bind(':Tag_ID', $Tag_ID);
            $this->db->bind(':Wiki_ID', $Wiki_ID);
            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function AuthorWikis($User_ID){
        try{
            $this->db->query("SELECT Wiki.*, Category.Title AS Category_Title, Users.Name AS Name
            FROM Wiki
            INNER JOIN Category ON Category.Category_ID = Wiki.Category_ID
            INNER JOIN Users ON Users.User_ID = Wiki.User_ID
            WHERE Wiki.User_ID = :User_ID");
            $this->db->bind(':User_ID',$User_ID);
            $data = $this->db->resultSet();
            return ($data);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>