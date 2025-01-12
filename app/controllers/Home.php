<?php

class Home extends Controller
{
    public function index()
    {
        // $data["title"] = "Home";
        $blogModel = $this->model("Blogs_model");  

        // Fetch the latest three blogs for the carousel
        $data["latest_blogs"] = $blogModel->getLatestBlogs(3);
        
        // $data["blg"] = array_reverse($blogModel->getAllBlogs());
        $data["title"] = "Labuan Times";
        // $data['name'] = $this->model('User_model')->getUser();
    
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        // $blogModel = $this->model("Blogs_model"); 
        $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
        $data['title'] = 'Labuan Times'; 
        $this->view("templates/header", $data);
        $this->view("home/travel[$id]", $data);
        $this->view("templates/footer");         
    }

    // public function detail($category, $id)
    // {
    //     // $blogModel = $this->model("Blogs_model"); 
    //     $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
    //     $data['category'] = $category;
    //     $data['title'] = 'Labuan Times'; 
    //     // $this->view('blog_detail', $data);
    //     $this->view("templates/header", $data);
    //     $this->view("home/", $data);
    //     $this->view("templates/footer");         
    // }

    
}


