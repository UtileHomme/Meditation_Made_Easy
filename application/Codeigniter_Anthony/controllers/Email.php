<?php

class Email extends CI_Controller
{

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->helper('email');
        $this->load->model('model_users');
        $data['title'] = 'Email Helper Title';
        $data['page_header'] = 'Email Helpers in Codeigniter';
        $data['firstnames'] = $this->model_users->getUsers();

        $this->load->view('view_email',$data);
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
