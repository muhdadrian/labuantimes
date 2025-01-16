<?php

class Contact extends Controller
{
    public function index()
    {
        $data["title"] = "Labuan Times";
        $this->view("templates/header", $data);
        $this->view("contact/index", $data);
        $this->view("templates/footer");
    }
}
