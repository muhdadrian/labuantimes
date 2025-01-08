<?php

class About extends Controller
{
    public function index()
    {
        // $data['name'] = $name;
        // $data['job'] = $job;
        // $data['age'] = $age;
        // $data["title"] = "About Me";
        $this->view("templates/header");
        $this->view("about/index");
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
