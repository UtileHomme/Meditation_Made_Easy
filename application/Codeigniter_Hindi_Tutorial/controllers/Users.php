<?php

//class Users extends MY_Controller
class Users extends CI_Controller
{
    public function index()
    {
        /*
        //how to add/load in-built classes
        $this->load->library('form_validation');

        //how to add multiple classes
        $this->load->libary(array('form_validation','email'));
        $this->form_validation;
        $this->email;
        */

        /*Helper functions

        $this->load->helper('helper_name');
        //use this in controller or view
        */

        $this->load->model('usermodel');

        //this is done to make the users accessible on the view page
        // the 'users' variable will act as an array and will fetch the data

        $data['users'] = $this->usermodel->getUsers();

        /*How to load custom helpers*/

        // $this->load->helper('abc');
        // $this->load->helper('array');
        test();
        echo '<br />';
        element();          //this is the overridden function
        echo '<br />';

        /*How to load custom or normal library*/
        $this->load->library('test');
        $this->test->abc();
        echo '<br />';

        /*How to extend libraries */
        $this->load->library('email');
        $this->email->test();

        /*How to load views   */
        $this->load->view('users_list',$data);
        /*
        Inside, config/autoload.php , set different attributes for autoloads
        eg.
        $autoload['libraries']=array('form_validation');

        Now whereever we wish to use form_validation
        we won't have to load it every time

        */

        /*How to call functions from core classes
        */
        //$this->test();
    }
}

?>
