<?php

class Blogs_model
{
    private $table = "blog";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // public function getAllBlogs()
    // {
    //     $this->db->query("SELECT * FROM " . $this->table);
    //     return $this->db->resultSet();
    // }

    // public function getBlogById($id)
    // {
    //     $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
    //     $this->db->bind("id", $id);
    //     return $this->db->single();
    // }

    public function getAllBlogs()
    {
        $this->db->query("SELECT id, title, content, category, photo FROM blog");
        return $this->db->resultSet();
    }
    
    public function getBlogById($id)
    {
        // $this->db->query("SELECT id, title, content, category, photo FROM blog WHERE id = :id");
        $this->db->query("SELECT * FROM blog WHERE id = :id");
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

//     public function getBlogById($id)
// {
//     // Use the query() method from the Database class to prepare the query
//     $this->db->query("SELECT * FROM blog WHERE id = :id");
    
//     // Bind the ID parameter to the query
//     $this->db->bind(':id', $id);
    
//     // Return the result as a single row
//     return $this->db->single();
// }


    public function getBlogByCategory($category) {
        // Fetch all blogs that match the provided category
        $this->db->query("SELECT * FROM blog WHERE category = :category");
        $this->db->bind(':category', $category);
        
        // Return the result as an array of blogs
        return $this->db->resultSet();
    }
    
    public function getLatestBlogs($limit = 3) {
        // Fetch the latest blogs ordered by ID in descending order
        $this->db->query("SELECT id, title, content, category, photo FROM blog ORDER BY id DESC LIMIT :limit");
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
    }
    

    
    

}
