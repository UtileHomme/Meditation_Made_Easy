<?php

class Loginmodel extends CI_Model
{
    public function login_valid($username, $password)
    {
        $password = sha1($password);
        //load the database
        $q = $this->db
            ->where(['username'=>$username,'password'=>$password])
            ->get('users');

        if($q->num_rows()>=1)
        {
            return $q->row()->id;
        }
        else
        {
            return false;
        }
    }
}


 ?>
