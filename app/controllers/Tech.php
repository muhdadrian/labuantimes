<?php

class Tech extends Controller
{
    public function index()
        {
            $blogModel = $this->model("Blogs_model");  // Load the model
            $data["blg"] = array_reverse($blogModel->getAllBlogs());  // Fetch all blogs from the model
            // $data["title"] = "Local";
            $this->view("templates/header", $data);
            $this->view("tech/index", $data);
            $this->view("templates/footer");
        }
    
    
        public function category($category)
    {
        $blogModel = $this->model("Blogs_model");  // Load the Blogs_model
        $data["blg"] = $blogModel->getBlogByCategory($category);  // Fetch filtered blogs by category
        $data["category"] = $category;  // Optional: pass the current category to the view
        $this->view("templates/header", $data);
        $this->view("tech/index", $data);
        $this->view("templates/footer");
    }
}
