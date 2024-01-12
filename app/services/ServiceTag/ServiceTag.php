<?php

require 'IServiceTag.php';

class ServiceTag implements IServiceTag
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Tag $tag)
    {
        // Implement the method here
        try{
            $this->db->query("INSERT INTO Tags VALUES(:Tag_ID, :Title)");
            $this->db->bind(':Tag_ID', $tag->Tag_ID);
            $this->db->bind(':Title', $tag->Title);

            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Update(Tag $tag)
    {
        // Implement the method here
        print_r($tag->Title);
        echo "asd";
        try{
            $this->db->query("UPDATE Tags SET Title = :Title WHERE Tag_ID = :Tag");
            $this->db->bind(':Tag', $tag->Tag_ID);
            $this->db->bind(':Title', $tag->Title);

            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Delete($Tag_ID)
    {
        // Implement the method here
        try{
            $this->db->query("DELETE FROM Tags WHERE Tag_ID = :Tag_ID");
            $this->db->bind(':Tag_ID', $Tag_ID);

            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Display()
    {
        // Implement the method here
        try {
            $this->db->query("SELECT * FROM Tags");
            $Tags = $this->db->resultSet();

            return $Tags;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}

?>