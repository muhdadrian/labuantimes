<?php

class People extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "People";
        $this->view("templates/header", $data);
        $this->view("people/index", $data);
        $this->view("templates/footer");
    }
}
