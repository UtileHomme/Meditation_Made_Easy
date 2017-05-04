<?php

class Login extends MY_Controller
{
    public function index()
    {
        //if user is logged in and tries to access login page .. redirect to dashboard
        if($this->session->userdata('user_id'))
        {
            return redirect('admin/dashboard');
        }

        $this->load->view('public/admin_login');
    }

    public function admin_login()
    {
        $this->load->library('form_validation');

        //placeholder, what should be displayed, rules
        $this->form_validation->set_rules('username','User Name','required|alpha|trim');
        $this->form_validation->set_rules('password','Password','required');

        //to apply same structure to all errors
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        //if validation passes
        if($this->form_validation->run())
        {
            //to check and assign after submit
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('loginmodel');

            $login_id = $this->loginmodel->login_valid($username,$password);
            if($login_id)
            {
                $this->load->library('session');
                $this->session->set_userdata('user_id',$login_id);
                return redirect('admin/dashboard');
            }
            else
            {
                //for displaying error message when wrong username, password combination
                $this->session->set_flashdata('login_failed','Invalid Username/Password');
                return redirect('login');

            }
        }
        else
        {
            //if it fails, then reload the same page
            $this->load->view('public/admin_login');

        }
    }

    public function logout()
    {
        //how to destroy session
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }

}

?>
