<?php

class Modelusers extends CI_Model
{
    public function can_log_in()
    {
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',sha1($this->input->post('password')));

        $q = $this->db->get('users');

        if($q->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

 ?>
