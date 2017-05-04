<?php

class Form extends CI_Controller
{

    public function index()
    {
        $this->form_helper();
    }

    public function form_helper()
    {
        $data['title'] = 'Form Helper Title';
        $data['page_header'] = 'Form Helpers in Codeigniter';

        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('url','URL','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('view_form',$data);
        }
        else
        {
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['pass_length']= strlen($this->input->post('email'));
            $data['url']=$this->input->post('url');
            $this->load->view('view_form',$data);

        }
    }

    public function form_helper2()
    {
        $data['title'] = 'Form Helper Title';
        $data['page_header'] = 'Form Helpers in Codeigniter';

        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('shirt_size','Shirt Size','required|alpha');
        $this->form_validation->set_rules('stripe_choice[]','Stripes','required');
        $this->form_validation->set_rules('terms','Terms and Conditions','callback_accept');
        $this->form_validation->set_rules('free_shipping','Shipping Choice','callback_accept');


        $this->load->model('model_orders');

        if($this->form_validation->run()==FALSE)
        {
            $data['title']='Form Helper - Part 2';
            $data['page_header'] = 'Form Helpers Part 2';
            $this->load->view('view_form2',$data);
        }
        else
        {
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['pass_length']= strlen($this->input->post('email'));
            $data['url']=$this->input->post('url');
            $this->load->view('view_form2',$data);

        }
    }

    public function __construct()
    {
        //this line must be included first
        parent::__construct();
    }
}



 ?>
