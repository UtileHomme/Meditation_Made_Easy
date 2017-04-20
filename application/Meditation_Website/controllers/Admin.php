<?php

class Admin extends MY_Controller
{
    public function dashboard()
    {
        $this->load->model('dashboardmodel','dashboard');
        $dashboard = $this->dashboard->retrieve_names();
        $this->load->view('admin/dashboard',['dashboard'=>$dashboard]);
    }

    public function __construct()
    {
        parent::__construct();
        //if the user is not logged in, redirect to login page
        $this->load->library('session');
        if(!$this->session->userdata('user_id'))
        {

            return redirect('login');
        }
    }
}

 ?>
