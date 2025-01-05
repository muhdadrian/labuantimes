<?php

class National extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "National";
        $this->view("templates/header", $data);
        $this->view("national/index", $data);
        $this->view("templates/footer");
    }
}
