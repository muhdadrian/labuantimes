<?php

class World extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "World";
        $this->view("templates/header", $data);
        $this->view("world/index", $data);
        $this->view("templates/footer");
    }
}
