<?php

// class Local extends Controller
// {
//     public function index()
//     {
//         $data["blg"] = $this->model("Blogs_model");
//         $data["title"] = "Local";
//         $this->view("templates/header", $data);
//         $this->view("local/index", $data);
//         $this->view("templates/footer");
//     }

//     public function detail($id)
//     {
//         $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
//         $this->view("templates/header", $data);
//         $this->view("local/detail", $data);
//         $this->view("templates/footer");
//     }
// }

class Local extends Controller
{
    public function index()
    {
        $blogModel = $this->model("Blogs_model");  // Load the model
        $data["blg"] = array_reverse($blogModel->getAllBlogs());  // Fetch all blogs from the model
        // $data["title"] = "Local";
        $data["title"] = "Labuan Times";
        $this->view("templates/header", $data);
        $this->view("local/index", $data);
        $this->view("templates/footer");
    }
    
    // public function category($category)
    // {
    //     $data["blg"] = $this->model("Blogs_model")->getBlogByCategory($category);
    //     $this->view("templates/header", $data);
    //     $this->view("local/index", $data);
    //     $this->view("templates/footer");

    // }

    public function category($category)
{
    $blogModel = $this->model("Blogs_model");  // Load the Blogs_model
    $data["blg"] = $blogModel->getBlogByCategory($category);  // Fetch filtered blogs by category
    $data["category"] = $category;  // Optional: pass the current category to the view
    $this->view("templates/header", $data);
    $this->view("local/index", $data);
    $this->view("templates/footer");
}


    public function detail($id)
    {
        // $blogModel = $this->model("Blogs_model"); 
        $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
        $data['title'] = 'Labuan Times'; 
        $this->view("templates/header", $data);
        $this->view("local/detail", $data);
        $this->view("templates/footer");         
    }
}

