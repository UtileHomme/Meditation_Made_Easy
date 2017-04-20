<?php

class Registermodel extends CI_Model
{
    public function register_user($user)
    {
        return $this->db->insert('users',$user);
    }
}



 ?>
