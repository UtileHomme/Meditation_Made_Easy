<?php

class Url extends CI_Controller
{

    public function index()
    {
        $this->url_helper();
    }

    public function url_helper()
    {
        $this->load->model('model_users');

        $data['title'] = 'URL Helper Title';
        $data['page_header'] = 'URL Helpers in Codeigniter';
        $this->load->view('view_url',$data);
    }


    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
