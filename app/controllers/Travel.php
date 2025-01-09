<?php

class Travel extends Controller
{
    public function index()
    {
        $blogModel = $this->model("Blogs_model");  // Load the model
        $data["blg"] = array_reverse($blogModel->getAllBlogs());  // Fetch all blogs from the model
        // $data["title"] = "National";
        $data["title"] = "Labuan Times";
        $this->view("templates/header", $data);
        $this->view("travel/index", $data);
        $this->view("templates/footer");
    }

    public function category($category)
    {
        $blogModel = $this->model("Blogs_model");  // Load the Blogs_model
        $data["blg"] = $blogModel->getBlogByCategory($category);  // Fetch filtered blogs by category
        $data["category"] = $category;  // Optional: pass the current category to the view
        $this->view("templates/header", $data);
        $this->view("travel/index", $data);
        $this->view("templates/footer");
    }
    

    public function detail($id)
    {
        $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
        $this->view("templates/header", $data);
        $this->view("travel/detail", $data);
        $this->view("templates/footer");
    }
}
