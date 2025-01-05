<?php

class Local extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "Local";
        $this->view("templates/header", $data);
        $this->view("local/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        $data["blg"] = $this->model("Blogs_model")->getBlogById($id);
        $this->view("templates/header", $data);
        $this->view("local/detail", $data);
        $this->view("templates/footer");
    }
}
