<?php

class Eveningsessionmodel extends CI_Model
{
    public function evening_session_list($limit,$offset)
    {
        //retrieve the set session user id
        $user_id = $this->session->userdata('user_id');

        $query = $this->db
        ->select(['id','esession_name', 'esession_date','esession_start_time','esession_end_time'])
        ->from('evening_session')
        ->where('user_id',$user_id)
        ->limit($limit,$offset)
        ->get();

        return $query->result();
    }

    //array parameter is received from the store_session function in controller
    public function add_session($array)
    {
        return $this->db->insert('evening_session',$array);
    }

    //this will help in finding the session corresponding to the id of the present session
    public function find_session($session_id)
    {
        $q = $this->db->select(['id','esession_name','esession_date','esession_start_time','esession_end_time'])
        ->where('id', $session_id)
        ->from('evening_session')
        ->get();

        //here we are only fetching one session from the table so only one object is required and not an array of objects
        return $q->row();
    }

    //we are passing the session id and the array of the fields that we want updated
    public function update_session($session_id,Array $sessioninfo)
    {
        //last parameter is where clause
        return $this->db->update('evening_session', $sessioninfo, "id=$session_id");
    }

    public function delete_session($session_id)
    {
        return $this->db->delete('evening_session',['id'=>$session_id]);
    }

    //for pagination to return no. of rows
    public function num_rows()
    {
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $user_id = intval($user_id);
        // or we can pass an array of fields ['title','id']
        $query = $this->db
                    ->select(['id','esession_name','esession_date','esession_start_time','esession_end_time'])
                    ->where('user_id',$user_id)
                    ->from('evening_session')
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
                    ->select(['id','esession_name','esession_date','esession_start_time','esession_end_time'])
                    ->where('user_id',$user_id)
                    ->from('evening_session')
                    ->get();

        return $query->result();
    }

    public function search($query,$limit,$offset)
    {
        $q = $this->db
        ->from('evening_session')
        ->or_like(['esession_name'=>$query,'esession_date'=>$query])
        ->limit($limit,$offset)
        ->get();

        return $q->result();
    }

    //with pagination
    public function count_search_results($query)
    {
        $q = $this->db
        ->from('evening_session')
        ->or_like(['esession_name'=>$query,'esession_date'=>$query])
        ->get();

        return $q->num_rows();
    }

}

 ?>
