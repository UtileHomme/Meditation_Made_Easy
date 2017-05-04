<?php

class Forgotpassword extends MY_Controller
{
    public function index()
    {
        $this->load->view('public/email_check');
    }

    public function forgot_password()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');
        if($this->form_validation->run())
        {
            $email = $this->input->post('email');

            $this->load->model('forgotpasswordmodel','forgot');
            $num_rows = $this->forgot->email_exists($email);

            if($num_rows==1)
            {
                $code = mt_rand('5000','200000');
                $data = array('forgot_password'=>$code);

                if($this->forgot->update_emailcode($data,$email))
                {
                    $url = base_url("forgotpassword/new_password/{$code}");
                    $body = "\nPlease click the following link to reset your password:\n\n".$url."\n\n";

                    if (mail($email, 'Password reset', $body, 'From: jatins368@gmail.com'))
                    {
                        $this->session->set_flashdata('feedback','An Email with password reset link has been sent to your email. Please Check!!');
                        $this->session->set_flashdata('feedback_class', 'alert-success');

                        $this->load->view('public/email_check');
                    }
                }
            }
            else
            {
                $this->session->set_flashdata('feedback','Sorry this is not your email id. Please feed in the correct email id');
                $this->session->set_flashdata('feedback_class', 'alert-danger');

                $this->load->view('public/email_check');
            }
        }
        else
        {
            $this->load->view('public/email_check');
        }
    }

    public function new_password()
    {
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('password_again', 'Confirmation Password', 'required|min_length[5]|max_length[15]|matches[password]');

        if($this->input->post()) {
            $data['code']= $this->input->post('code');
        } else {
            $data['code'] = $this->uri->segment(3);
        }
        $email = $this->input->post('email');

        if($this->form_validation->run()==false)
        {
            // return redirect("forgotpassword/new_password/".$data['code']);
            $this->load->view('public/reset_password',$this->uri->segment(3));
        }
        else
        {
            $this->input->post('email');
            $this->input->post('code');
            $this->load->model('forgotpasswordmodel','forgot');
            $num_rows = $this->forgot->code_match($this->input->post('code'),$email);
            if($num_rows == 1)
            {

                $password = $this->input->post('password');
                $password = sha1($password);

                $pass = array(
                    'password' => $password
                );

                if($this->forgot->update_password($pass, $email))
                {
                    $this->session->set_flashdata('feedback1','Your Password has been reset. Please login with new password');
                    $this->session->set_flashdata('feedback_class', 'alert-success');
                    return redirect('login/admin_login');
                }
                else
                {
                    $this->session->set_flashdata('feedback1','Something went wrong. Please enter your email id again');
                    $this->session->set_flashdata('feedback_class', 'alert-danger');

                    $this->load->view('public/email_check');
                }
            }
            else
            {
                $this->session->set_flashdata('feedback1','The Email id you entered isn\'t correct');
                $this->session->set_flashdata('feedback_class', 'alert-danger');
                return redirect("forgotpassword/new_password/".$data['code']);
            }

        }
    }


    public function __construct()
    {
        parent::__construct();
    }
}


?>
