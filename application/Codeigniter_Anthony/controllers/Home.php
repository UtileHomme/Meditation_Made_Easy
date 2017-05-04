<?php

class Home extends CI_Controller
{

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->model('model_users');

        $data['title'] = 'Array Helper Title';
        $data['page_header'] = 'Array Helpers in Codeigniter';
        $data['firstnames'] = $this->model_users->getUsers();

        $this->load->view('view_home',$data);
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
