<?php

class Home extends Controller
{
    public function index()
    {
        // $data["title"] = "Home";
        // $blogModel = $this->model("Blogs_model");  
        // $data["blg"] = array_reverse($blogModel->getAllBlogs());
        $data["title"] = "Labuan Times";
        // $data['name'] = $this->model('User_model')->getUser();
    
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}


