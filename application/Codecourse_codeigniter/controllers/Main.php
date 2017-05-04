<?php

class Main extends MY_Controller
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function signup()
    {
        $this->load->view('signup');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email|trim|callback_validateCredentials');
        $this->form_validation->set_rules('password','Password','required|sha1|trim');



        if($this->form_validation->run())
        {
            $data = array(
                    'email'=>$this->input->post('email'),
                    'is_logged_in'=> 1
            );
            $this->session->set_userdata($data);
            redirect('main/members');
        }
        else
        {
            $this->load->view('login');
        }

    }

    public function signup_validation()
    {
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('cpassword','Password','required|trim|matches[password]');

        //for overriding preset rules messages

        $this->form_validation->set_message('is_unique','That email address already exists');

        if($this->form_validation->run())
        {

        }
        else
        {
            echo 'you shall not pass >:';
            $this->load->view('signup');
        }
    }

    public function validateCredentials()
    {
        $this->load->model('modelusers');

        if($this->modelusers->can_log_in())
        {
            return true;
        }
        {
            $this->form_validation->set_message('validateCredentials','Incorrect username/password');
            return false;
        }
    }

    public function members()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $this->load->view('members');
        }
        else
        {
            redirect('main/restricted');
        }
    }

    public function restricted()
    {
        $this->load->view('restricted');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main/login');
    }
}

?>
