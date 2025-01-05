<?php

class Blogs_model
{
    private $table = "blog";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllBlogs()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
