<?php

class Text extends CI_Controller
{

    public function index()
    {
        $this->text_helper();
    }

    public function text_helper()
    {


        $data['title'] = 'Text Helper Title';
        $data['page_header'] = 'Text Helpers in Codeigniter';
        $this->load->view('view_text',$data);
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
