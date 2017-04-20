<?php

class Login extends MY_Controller
{
    public function index()
    {
        //if the user is logged in and user tries to access login page by typing its url
        //then first check this logic and then redirect
        if($this->session->userdata('user_id'))
        {
            return redirect('admin/dashboard');
        }
        $this->load->view('public/admin_login');
    }

    //for validating and logging the user
    public function admin_login()
    {
        //load the form validation library
        //for small number of text fields this works else create arrays in form_validation config file
        //and pass that array inside the run function below
        // $this->form_validation->set_rules('username','User Name','required|alpha_numeric_spaces|trim');
        // $this->form_validation->set_rules('password','Password','required');

        //how to format the errors being displayed
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        //if validation passes
        if($this->form_validation->run('admin_login'))
        {
            //how to take the post data from fields
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('loginmodel');

            // we are retrieving the id of the user who is logged in
            $login_id = $this->loginmodel->login_valid($username,$password);
            if($login_id)
            {
                $this->load->library('session');

                //set the session for this particular user
                $this->session->set_userdata('user_id', $login_id);

                // redirect to admin controller with dashboard function
                return redirect('admin/dashboard');
            }
            else
            {
                //after the login validation has been checked and is found to be false
                //the user is redirected to login page through login controller
                //and by default the index function is called
                //the data from this session is sent along
                $this->session->set_flashdata('login_failed','Invalid Username/Password Combination');
                return redirect('login');
            }
        }
        else
        {
            // if the validation fails, then load the login page again
            $this->load->view('public/admin_login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }
}

 ?>
