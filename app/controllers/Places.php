<?php

class Places extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "Places";
        $this->view("templates/header", $data);
        $this->view("places/index", $data);
        $this->view("templates/footer");
    }
}
