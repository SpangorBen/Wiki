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
        $this->db->query("UPDATE Category SET Title = :Title, Description = :Description");
        $this->db->bind(':Title', $category->Title);
        $this->db->bind(':Description', $category->Description);
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
            // $this->db->query("SELECT * FROM Category");
            // $categories = $this->db->resultSet();
            // $this->db->query("SELECT Category.*, count(*) AS countWikis FROM Wiki INNER JOIN Category ON Category.Category_ID = Wiki.Category_ID GROUP BY Wiki.Category_ID");
            $this->db->query("SELECT c.Category_ID, c.Title AS Category_Title, 
                COUNT(w.Wiki_ID) AS Total_Wikis,
                SUM(CASE WHEN w.Archived = 1 THEN 1 ELSE 0 END) AS Archived_Count
                FROM Category c
                LEFT JOIN Wiki w ON c.Category_ID = w.Category_ID
                GROUP BY c.Category_ID, c.Title
            ");
            $count = $this->db->resultSet();
            // $data = [
            //     'category' => $categories,
            //     'count' => $count
            // ];
            return $count;

        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>