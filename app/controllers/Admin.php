<?php

session_start(); // Place this at the top of your controller


class Admin extends Controller
{
// Admin Controller: index method (login)
public function index()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize input data
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Load the Admin model
        $adminModel = $this->model("Admin_model");

        // Fetch admin data by username
        $admin = $adminModel->getAdminByUsername($username);

            // Debug: Check if admin data is fetched correctly
        // if ($admin) {
        //     echo "<pre>";
        //     var_dump($admin); // Debug to see fetched admin data
        //     echo "</pre>";
        // } else {
        //     echo "No admin found with this username!";
        // }


        // Check if admin exists and password is correct
        if ($admin && password_verify($password, $admin['password'])) {
            // Set session variables for logged-in admin
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['success'] = "Login successful!";
            
            // Redirect to the admin dashboard
            header("Location: " . BASEURL . "/admin/dashboard");
            exit;
        } else {
            // Invalid login credentials
            $_SESSION['error'] = "Invalid username or password!";
            header("Location: " . BASEURL . "/admin");
            exit;
        }
    } else {
        // Load the Admin model
        $adminModel = $this->model("Admin_model");
        $data["admin"] = $adminModel->getAllAdmins(); // Fetch all admins from the database

        // Set the page title
        $data["title"] = "Labuan Times - Admin Login";

        // Load the views with the data
        $this->view("templates/header", $data);
        $this->view("admin/login", $data);
        $this->view("templates/footer");
    }
}

// Admin Controller: dashboard method
public function dashboard()
{
    // Check if the user is logged in
    if (!isset($_SESSION['admin_id'])) {
        $_SESSION['error'] = "You must be logged in to access the dashboard.";
        header("Location: " . BASEURL . "/admin");
        exit;
    }

    // Set the page title
    $data["title"] = "Labuan Times - Admin Dashboard";

    // Load the views with the data
    $this->view("templates/header", $data);
    $this->view("admin/dashboard", $data);
    $this->view("templates/footer");
}

// Admin Controller: register method
public function register()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize input data
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Prepare data array for model
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Hash the password before storing it
        ];

        // Load the Admin model
        $adminModel = $this->model("Admin_model");

        // Check if admin already exists
        $existingAdmin = $adminModel->getAdminByUsername($username);
        if ($existingAdmin) {
            $_SESSION['error'] = "Username already taken!";
            header("Location: " . BASEURL . "/admin/register");
            exit;
        }

        // Call the model's register method to create or update the admin
        if ($adminModel->registerAdmin($data)) {
            // Registration successful, redirect to login page
            $_SESSION['success'] = "Admin registered successfully!";
            header("Location: " . BASEURL . "/admin");
            exit;
        } else {
            // Registration failed
            $_SESSION['error'] = "Registration failed!";
            header("Location: " . BASEURL . "/admin/register");
            exit;
        }
    } else {
        // Load the registration view if the request method is GET
        $data["title"] = "Labuan Times - Register Admin";
        $this->view("templates/header", $data);
        $this->view("admin/register", $data);
        $this->view("templates/footer");
    }
}

} 
