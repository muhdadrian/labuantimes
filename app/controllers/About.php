<?php

class About extends Controller
{
    public function index()
    {
        // $data['name'] = $name;
        // $data['job'] = $job;
        // $data['age'] = $age;
        // $data["title"] = "About Me";
        $data["title"] = "Labuan Times";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page()
    {
        // $data["title"] = "Pages";
        $this->view("templates/header");
        $this->view("about/page");
        $this->view("templates/footer");
    }
}
