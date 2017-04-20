<?php

class Morningsessionmodel extends CI_Model
{
    public function morning_session_list($limit,$offset)
    {
        //retrieve the set session user id
        $user_id = $this->session->userdata('user_id');

        $query = $this->db
        ->select(['id','msession_name', 'msession_date','msession_start_time','msession_end_time'])
        ->from('morning_session')
        ->where('user_id',$user_id)
        ->limit($limit,$offset)
        ->get();

        return $query->result();
    }

    //array parameter is received from the store_session function in controller
    public function add_session($array)
    {
        return $this->db->insert('morning_session',$array);
    }

    //this will help in finding the session corresponding to the id of the present session
    public function find_session($session_id)
    {
        $q = $this->db->select(['id','msession_name','msession_date','msession_start_time','msession_end_time'])
        ->where('id', $session_id)
        ->from('morning_session')
        ->get();

        //here we are only fetching one session from the table so only one object is required and not an array of objects
        return $q->row();
    }

    //we are passing the session id and the array of the fields that we want updated
    public function update_session($session_id,Array $sessioninfo)
    {
        //last parameter is where clause
        return $this->db->update('morning_session', $sessioninfo, "id=$session_id");
    }

    public function delete_session($session_id)
    {
        return $this->db->delete('morning_session',['id'=>$session_id]);
    }

    //for pagination to return no. of rows
    public function num_rows()
    {
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $user_id = intval($user_id);
        // or we can pass an array of fields ['title','id']
        $query = $this->db
                    ->select(['id','msession_name','msession_date','msession_start_time','msession_end_time'])
                    ->where('user_id',$user_id)
                    ->from('morning_session')
                    ->get();

        return $query->num_rows();
    }

    public function show_count()
    {
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $user_id = intval($user_id);
        // or we can pass an array of fields ['title','id']
        $query = $this->db
                    ->select(['id','msession_name','msession_date','msession_start_time','msession_end_time'])
                    ->where('user_id',$user_id)
                    ->from('morning_session')
                    ->get();

        return $query->result();
    }

    //without pagination
    public function search($query,$limit,$offset)
    {
        $q = $this->db
        ->from('morning_session')
        ->or_like(['msession_name'=>$query,'msession_date'=>$query])
        ->limit($limit,$offset)
        ->get();

        return $q->result();
    }

    //with pagination
    public function count_search_results($query)
    {
        $q = $this->db
        ->from('morning_session')
        ->or_like(['msession_name'=>$query,'msession_date'=>$query])
        ->get();

        return $q->num_rows();
    }

}

 ?>
