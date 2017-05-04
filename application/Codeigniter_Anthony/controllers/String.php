<?php

class String extends CI_Controller
{
    public function index()
    {
        $this->string_helper();
    }

    public function string_helper()
    {
        $this->load->model('model_users');

        $data['title'] = 'String Helper Title';
        $data['page_header'] = 'String Helpers in Codeigniter';
        $this->load->view('view_string',$data);
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
