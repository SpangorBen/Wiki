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
        try {
            $this->db->query("INSERT INTO Wiki VALUES(:Wiki_ID, :Title, :Contenu, :Created_Date, :Updated_Date, :Archived, :Deleted, :Category_ID, :User_ID)");
            $this->db->bind(':Wiki_ID', $wiki->Wiki_ID);
            $this->db->bind(':Title', $wiki->Title);
            $this->db->bind(':Contenu', $wiki->Contenu);
            $this->db->bind(':Created_Date', $wiki->Created_Date);
            $this->db->bind(':Updated_Date', $wiki->Updated_Date);
            $this->db->bind(':Archived', $wiki->Archived);
            $this->db->bind(':Deleted', $wiki->Deleted);
            $this->db->bind(':Category_ID', $wiki->Category_ID);
            $this->db->bind(':User_ID', $wiki->User_ID);

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
            $this->db->query("SELECT * FROM Wiki");
            $Wikis = $this->db->resultSet();
            return $Wikis;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}

?>