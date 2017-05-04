<?php

class Loginmodel extends CI_Model
{
    public function login_valid($username, $password)
    {

        $password = sha1($password);
        $q = $this->db
        ->where(['username'=>$username,'password'=>$password])
        ->get('users');

        if($q->num_rows()>=1)
        {
            //will return the matching id
            /*
            $row = $q->row();
            return $row->id;
            */

            //this will return a value more than 0.. therefore always true
            return $q->row()->id;
        }
        else
        {
            return FALSE;
        }

    }
}

?>
