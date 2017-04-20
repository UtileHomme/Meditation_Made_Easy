<?php

class Register extends MY_Controller
{
    public function index()
    {
        $this->load->view('public/registration');
    }

    public function register_page()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric_spaces|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password_again', 'Confirm Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email Id', 'required|trim|valid_email');


                if($this->form_validation->run())
                {
                    $post = $this->input->post();

                    //since submit button is also getting sent in the array, remove it
                    unset($post['submit']);
                    unset($post['password_again']);

                    $post['password'] = sha1($post['password']);
                    $this->load->model('registermodel','register');

                    //this post data is sent as an array into the model for updation

                    if($this->register->register_user($post))
                    {
                        $this->session->set_flashdata('feedback','Great!! You have been Registered. Please Login');
                        $this->session->set_flashdata('feedback_class', 'alert-success');
                    }
                    else
                    {
                        $this->session->set_flashdata('feedback','Sorry!! We failed to Register you, Please try again');
                        $this->session->set_flashdata('feedback_class', 'alert-danger');
                    }
                    return redirect('login/admin_login');
                }
                else
                {
                    $this->load->view('public/registration');
                }
    }
}


 ?>
