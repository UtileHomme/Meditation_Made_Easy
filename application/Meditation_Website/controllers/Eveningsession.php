<?php

class Eveningsession extends MY_Controller
{
    public function evening_dashboard()
    {
        $this->load->model('eveningsessionmodel','evening');

        //pagination implementation

        $this->load->library('pagination');

        $config = [
            'base_url' => base_url('eveningsession/evening_dashboard'),
            'per_page' => 5,
            'total_rows' => $this->evening->num_rows(),
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'first_link' => 'First',
            'last_link' => 'Last',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => "<li class='active'><a>",
            'cur_tag_close' => "</a></li>"
        ];
        $this->pagination->initialize($config);

        $evening = $this->evening->evening_session_list($config['per_page'],$this->uri->segment(3));
        $show_count = $this->evening->show_count();
        //the above variable with all the values fetched from the table is passed as an array
        $this->load->view('admin/evening_dashboard',['evening'=>$evening,'show_count'=>$show_count]);
    }

    public function search()
    {
        $this->form_validation->set_rules('query', 'Query', 'required');
        if(!$this->form_validation->run())
        {
            //if validatiion fails, simply call the above evening dashboard function
            $this->evening_dashboard();
        }

        $query = $this->input->post('query');
        return redirect("eveningsession/search_results/$query");

        // Search without pagination
        // $this->load->model('eveningsessionmodel','evening');
        // $evening = $this->evening->search($query);
        //
        // $this->load->view('admin/search_evening_dashboard',['evening'=>$evening]);

    }

    public function search_results($query)
    {
        $this->load->model('eveningsessionmodel','evening');

        //pagination implementation

        $this->load->library('pagination');

        $config = [
            'base_url' => base_url("eveningsession/search_results/$query"),
            'per_page' => 5,
            'total_rows' => $this->evening->count_search_results($query),
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'first_link' => 'First',
            'last_link' => 'Last',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => "<li class='active'><a>",
            'cur_tag_close' => "</a></li>"
        ];
        $this->pagination->initialize($config);

        $evening = $this->evening->search($query,$config['per_page'],$this->uri->segment(4));
        $this->load->view('admin/search_evening_dashboard',['evening'=>$evening]);
    }

    public function add_session()
    {
        $this->load->view('admin/add_evening_session');
    }

    public function store_session()
    {
        $this->form_validation->set_rules('esession_name', 'Session Name', 'required|trim|alpha_dash|is_unique[evening_session.esession_name]');
        $this->form_validation->set_rules('esession_date', 'Session Date', 'required|trim|callback_date_valid');
        $this->form_validation->set_rules('esession_start_time', 'Session Start Time', 'required|trim|callback_validate_starttime');
        $this->form_validation->set_rules('esession_end_time', 'Session End Time', 'required|trim|callback_validate_endtime|callback_compareTime');

        if($this->form_validation->run())
        {
            $post = $this->input->post();

            //since submit button is also getting sent in the array, remove it
            unset($post['submit']);

            //add the corresponding AM to the time
            $post['esession_start_time'] = $post['esession_start_time'].' PM';
            $post['esession_end_time'] = $post['esession_end_time']. ' PM';

            $this->load->model('eveningsessionmodel','evening');

            //this post data is sent as an array into the model for updation
            if($this->evening->add_session($post))
            {
                $this->session->set_flashdata('feedback','Great!! Your Session has been Added');
                $this->session->set_flashdata('feedback_class', 'alert-success');
            }
            else
            {
                $this->session->set_flashdata('feedback','Your Session Failed to Add, Please try again');
                $this->session->set_flashdata('feedback_class', 'alert-danger');
            }
            return redirect('eveningsession/evening_dashboard');
        }
        else
        {
            $this->load->view('admin/add_evening_session');
        }
    }

    //the parameter passed here is the id for which the article is to be edited
    public function edit_session($session_id)
    {
        $this->load->model('eveningsessionmodel','evening');
        $evening = $this->evening->find_session($session_id);

        //pass the received table data into view so that it can be accessed there
        $this->load->view('admin/edit_evening_session',['evening'=>$evening]);
    }

    public function update_session($session_id)
    {
        $this->form_validation->set_rules('esession_name', 'Session Name','required|trim|alpha_dash');
        $this->form_validation->set_rules('esession_date', 'Session Date', 'required|trim|callback_date_valid');
        $this->form_validation->set_rules('esession_start_time', 'Session Start Time', 'required|trim|callback_validate_starttime');
        $this->form_validation->set_rules('esession_end_time', 'Session End Time', 'required|trim|callback_validate_endtime|callback_compareTime');


        if($this->form_validation->run())
        {
            $post = $this->input->post();

            //since submit button is also getting sent in the array, remove it
            unset($post['submit']);

            $post['esession_start_time'] = $post['esession_start_time'].' PM';
            $post['esession_end_time'] = $post['esession_end_time']. ' PM';

            $this->load->model('eveningsessionmodel','evening');

            //this post data is sent as an array into the model for updation

            if($this->evening->update_session($session_id,$post))
            {
                $this->session->set_flashdata('feedback','Great!! Your Session has been Updated');
                $this->session->set_flashdata('feedback_class', 'alert-success');
            }
            else
            {
                $this->session->set_flashdata('feedback','Your Session Failed to Update, Please try again');
                $this->session->set_flashdata('feedback_class', 'alert-danger');
            }
            return redirect('eveningsession/evening_dashboard');
        }
        else
        {
            //when the validation fails we have to send the earlier retrieved data again and load it along with the view
            $this->load->model('eveningsessionmodel','evening');
            $evening = $this->evening->find_session($session_id);
            $this->load->view('admin/edit_evening_session',['evening'=>$evening]);
        }
    }

    //the session id is being received through the hidden form
    public function delete_session()
    {
        $session_id = $this->input->post('session_id');
        $this->load->model('eveningsessionmodel','evening');

        if($this->evening->delete_session($session_id))
        {

            $this->session->set_flashdata('feedback','Session Deleted Successfully');
            $this->session->set_flashdata('feedback_class', 'alert-success');
        }
        else
        {
            $this->session->set_flashdata('feedback','Session Failed to Delete, Please try again');
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
        return redirect('eveningsession/evening_dashboard');

    }

    //function for date validation
    public function date_valid($date)
    {
        //extract the separater
        $sep1 = substr($date,2,1);
        $sep2 = substr($date,5,1);


        //check if the field is empty or not
        if(empty($date))
        {
            $this->form_validation->set_message('date_valid', 'The Session Date field is required');
            return FALSE;
        }

        //check if the separaters match with the one typed
        //to ensure only numerical characters and dash is typed
        if($sep1!='-' || $sep2!='-'  || preg_match('/[^0-9\-]/i',$date))
        {
            $this->form_validation->set_message('date_valid', 'The Session Date field can only have - separater and numeric data');
            return FALSE;
        }
        else
        {
            //convert the non-separater part into an array and convert all elements to an array
            $date1 = explode('-',$date);


            foreach($date1 as $index=>$value)
            {
                $date1[$index] = (int)$value;
            }

            $day = $date1[0];
            $month = $date1[1];
            $year = $date1[2];

            $check = checkdate($month, $day, $year);

            if($check==FALSE)
            {
                $this->form_validation->set_message('date_valid', 'The Session Date Field does not contain a Valid Date ');
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
    }

    //function for start time validation
    public function validate_starttime($time)
    {
        $sep1 = substr($time,2,1);

        if(empty($time))
        {
            $this->form_validation->set_message('validate_starttime', 'The Session Start Time field is required');
            return FALSE;
        }

        //check if the separater is correct and only numeric data is typed
        if($sep1!=':' || preg_match('/[^0-9\:]/i',$time))
        {
            $this->form_validation->set_message('validate_starttime', 'The Session Start Time Field can only have : separater and numeric data');
            return FALSE;
        }
        else
        {
            $time1 = explode(':',$time);

            foreach($time1 as $index=>$value)
            {
                $time1[$index] = (int)$value;
            }
            $hour = $time1[0];
            $minutes = $time1[1];

            if (!is_int($hour) || !is_int($minutes))
            {
                $this->form_validation->set_message('validate_starttime', 'The Session Start Time Field should be numeric');
                return FALSE;
            }
            else if ($hour > 12 || $minutes > 59)
            {
                $this->form_validation->set_message('validate_starttime', 'You can only enter hour less than 12 and minutes not more than 59');
                return FALSE;
            }
            else if (mktime($hour,$minutes) === FALSE)
            {
                $this->form_validation->set_message('validate_starttime', 'The Session Start Time Field does not contain valid time');
                return FALSE;
            }

            return TRUE;
        }
    }

    //function for end time validation
    public function validate_endtime($time)
    {
        $sep1 = substr($time,2,1);

        if(empty($time))
        {
            $this->form_validation->set_message('validate_endtime', 'The Session End Time field is required');
            return FALSE;
        }

        //check if the separater is correct and only numeric data is typed
        if($sep1!=':' || preg_match('/[^0-9\:]/i',$time))
        {
            $this->form_validation->set_message('validate_endtime', 'The Session End Time Field can only have : separater and numeric data');
            return FALSE;
        }
        else
        {
            $time1 = explode(':',$time);

            foreach($time1 as $index=>$value)
            {
                $time1[$index] = (int)$value;
            }
            $hour = $time1[0];
            $minutes = $time1[1];

            if (!is_int($hour) || !is_int($minutes))
            {
                $this->form_validation->set_message('validate_endtime', 'The Session End Time Field should be numeric');
                return FALSE;
            }
            else if ((int)$hour > 12 || (int)$minutes > 59)
            {
                $this->form_validation->set_message('validate_endtime', 'You can only enter hour less than 12 and minutes not more than 59');
                return FALSE;
            }
            else if (mktime((int)$hour,(int)$minutes) === FALSE)
            {
                $this->form_validation->set_message('validate_endtime', 'The Session End Time Field does not contain valid time');
                return FALSE;
            }

            return TRUE;
        }
    }

    public function compareTime()
    {
        $time1 = $this->input->post('esession_start_time');
        $time2 = $this->input->post('esession_end_time');

        $time1 = date('H:i',strtotime($time1));
        $time2 = date('H:i',strtotime($time2));


        if($time2>$time1)
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('compareTime', 'The Session End Time Field should be greater than the Session Start Time Field');
            return false;
        }
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
