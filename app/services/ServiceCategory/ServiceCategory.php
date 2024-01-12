<?php

require 'IServiceCategory.php';
class ServiceCategory implements IServiceCategory
{
	private $db;

	public function __construct(){
		$this->db = Database::getInstance();
	}

    public function Add(Category $category)
    {
        // Implement the method here
        try{
            $this->db->query("INSERT INTO Category VALUES(:Category_ID, :Title, :Description)");
            $this->db->bind(':Category_ID', $category->Category_ID);
            $this->db->bind(':Title', $category->Title);
            $this->db->bind(':Description', $category->Description);

            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Update(Category $category)
    {
        // Implement the method here
        try{

            $this->db->query("UPDATE Category SET Title = :Title, Description = :Description WHERE Category_ID = :Category_ID");
            $this->db->bind(':Category_ID', $category->Category_ID);
            $this->db->bind(':Title', $category->Title);
            $this->db->bind(':Description', $category->Description);
            $this->db->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function Delete($Category_ID)
    {
        // Implement the method here
        try{
            $this->db->query("DELETE FROM Category WHERE Category_ID = :Category_ID");
            $this->db->bind(':Category_ID', $Category_ID);
            $this->db->execute();

        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Display()
    {
        // Implement the method here
        try{
            $this->db->query("SELECT c.Category_ID, c.Description, c.Title AS Title, 
                COUNT(w.Wiki_ID) AS Total_Wikis,
                SUM(CASE WHEN w.Archived = 1 THEN 1 ELSE 0 END) AS Archived_Count
                FROM Category c
                LEFT JOIN Wiki w ON c.Category_ID = w.Category_ID
                GROUP BY c.Category_ID, c.Title
            ");
            $count = $this->db->resultSet();
            return $count;

        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>