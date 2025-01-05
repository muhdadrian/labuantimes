<?php

class Business extends Controller
{
    public function index()
    {
        $data["blg"] = $this->model("Blogs_model");
        $data["title"] = "Business";
        $this->view("templates/header", $data);
        $this->view("business/index", $data);
        $this->view("templates/footer");
    }
}
