<?php

class Welcome extends MY_Controller
{
    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->model('model_users');

        //this will be accessible in the view as 'title'
        $data['title']='MVC Cool title';
        $data['page_header'] = 'Intro to MVC Design';
        $data['firstnames'] = $this->model_users->getFirstNames();

        $data['users'] = $this->model_users->getUsers();

        $this->load->view('welcome_message',$data);
    }
}


 ?>
