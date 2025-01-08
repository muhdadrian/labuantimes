<?php

class Business extends Controller
{
    public function index()
    {
        $blogModel = $this->model("Blogs_model");  // Load the model
        $data["blg"] = array_reverse($blogModel->getAllBlogs());  // Fetch all blogs from the model
        // $data["title"] = "Local";
        $this->view("templates/header", $data);
        $this->view("business/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
        $this->view("templates/header", $data);
        $this->view("business/detail", $data);
        $this->view("templates/footer");
    }
}
