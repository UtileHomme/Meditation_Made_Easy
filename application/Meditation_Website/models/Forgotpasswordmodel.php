<?php

class Forgotpasswordmodel extends CI_Model
{

    //checking whether the email id entered by the user is valid to him/her
    public function email_exists($email)
    {
        $q = $this->db->select(['id','username','password','firstname','lastname','forgot_password'])
        ->where('email', $email)
        ->from('users')
        ->get();

        return $q->num_rows();
    }

    public function update_emailcode($data, $email1)
    {
        return $this->db->update('users', $data, ['email'=>$email1]);
    }

    public function code_match($data,$email)
    {
        $q = $this->db->select(['id','username','password','firstname','lastname','forgot_password','email'])
        ->where(['forgot_password'=>$data,'email'=>$email])
        ->from('users')
        ->get();

        return $q->num_rows();
    }

    public function update_password($data, $email)
    {
        return $this->db->update('users', $data, ['email'=>$email]);
    }

}


 ?>
