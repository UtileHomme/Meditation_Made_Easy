<?php

class User extends MY_Controller
{
    public function index()
    {
        $this->load->view('public/main_page.php');
    }

    public function about()
    {
        $this->load->view('public/about.php');
    }
}

 ?>
