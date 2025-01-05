<?php

class Sports extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "Sports";
        $this->view("templates/header", $data);
        $this->view("sports/index", $data);
        $this->view("templates/footer");
    }
}
