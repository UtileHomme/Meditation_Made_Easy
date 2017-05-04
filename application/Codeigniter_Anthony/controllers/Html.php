<?php

class Html extends CI_Controller
{

    public function index()
    {
        $this->html_helper();
    }

    public function html_helper()
    {
        $this->load->model('model_users');

        $data['title'] = 'HTML Helper Title';
        $data['page_header'] = 'HTML Helpers in Codeigniter';
        $this->load->view('view_html',$data);
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
