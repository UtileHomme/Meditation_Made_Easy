<?php

class Blog extends CI_Controller
{
    public function index()
    {
        //these are inbuilt functions obtained using inheritance
        // $this->load->model('abc');
        // $this->abc->test();
        //we have passed 'facebook' as the preferred name for the object
        //this can be used for calling functions of that class
        $this->load->model('authenticate','facebook');
        $data = $this->facebook->getData();
        print_r($data);
        $this->load->view('blog_index');
    }

    public function add()
    {
        echo 'add function of blog controller';
    }
}
 ?>
