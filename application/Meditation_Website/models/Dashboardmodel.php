<?php

class Dashboardmodel extends CI_Model
{
    public function retrieve_names()
    {
        //retrieve the set session user id
        $user_id = $this->session->userdata('user_id');

        $query = $this->db
        ->select(['firstname','lastname'])
        ->from('users')
        ->where('id',$user_id)
        ->get();

        return $query->result();

    }
}

 ?>
