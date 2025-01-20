<?php

class Admin_model
{
    private $table = "admin";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Fetch all admins
    public function getAllAdmins()
    {
        try {
            $this->db->query("SELECT * FROM " . $this->table);
            return $this->db->resultSet();
        } catch (Exception $e) {
            // Handle the exception (log it, or return false)
            return false;
        }
    }

    // Fetch an admin by ID
    public function getAdminById($id)
    {
        try {
            $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
            $this->db->bind("id", $id);
            return $this->db->single();
        } catch (Exception $e) {
            // Handle the exception (log it, or return false)
            return false;
        }
    }

    // Fetch an admin by username
    public function getAdminByUsername($username)
    {
        try {
            $this->db->query("SELECT * FROM " . $this->table . " WHERE username=:username");
            $this->db->bind("username", $username);
            return $this->db->single();
        } catch (Exception $e) {
            // Handle the exception (log it, or return false)
            return false;
        }
    }

    // Register a new admin or update an existing admin's password
    public function registerAdmin($data)
    {
        try {
            // Check if the admin already exists (by username)
            $this->db->query("SELECT * FROM " . $this->table . " WHERE username=:username");
            $this->db->bind("username", $data['username']);
            $existingAdmin = $this->db->single();

            // If the admin exists, update their password
            if ($existingAdmin) {
                $this->db->query("UPDATE " . $this->table . " SET password=:password WHERE username=:username");
            } else {
                // Otherwise, insert a new admin
                $this->db->query("INSERT INTO " . $this->table . " (username, password) VALUES (:username, :password)");
            }

            // Bind the parameters (hash the password)
            $this->db->bind("username", $data['username']);
            $this->db->bind("password", password_hash($data['password'], PASSWORD_DEFAULT));

            // Execute the query and return the result
            return $this->db->execute();
        } catch (Exception $e) {
            // Handle the exception (log it, or return false)
            return false;
        }
    }

    // Validate admin login by checking username and password
    public function validateLogin($username, $password)
    {
        try {
            $admin = $this->getAdminByUsername($username);
            if ($admin && password_verify($password, $admin['password'])) {
                return $admin;
            }
            return false;
        } catch (Exception $e) {
            // Handle the exception (log it, or return false)
            return false;
        }
    }
}
