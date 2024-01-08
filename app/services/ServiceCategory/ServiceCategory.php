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
            $this->db->query("SELECT * FROM Category");
            $categories = $this->db->resultSet();
            return $categories;

        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}

?>