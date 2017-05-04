<?php

class Usermodel extends CI_Model
{
    public function getUsers()
    {

        $this->load->database();
        // $q is an object
        //Conventional ways of writing queries
        $q = $this->db->query("SELECT * from codeigniter_db_hindi");

        /*ACTIVE RECORDS - New way of writing queries

        //Select 'firstname', 'lastname'
        $this->db->select('firstname','lastname');

        // Select * from codeigniter_db_hindi;
        or $this->db->get("codeigniter_db_hindi");



        //To take 'where' also into consideration use this

        //Select * from codeigniter_db_hindi where id=1;
        $this->db->where('id',1);            //means where id = 1
        $this->db->get("codeigniter_db_hindi");


        // Supports method chaining

        //Select firstname, lastname from codeigniter_db_hindi where id=1

        $q = $this->db->select('firstname','lastname')
        ->where('id',1)
        ->get("codeigniter_db_hindi");



        $result is an array of objects.. for every row there is an object
        $result = $q->result();

        echo '<pre>';
        print_r($result);
        return $q->result();                //returning an array of objects
        */

        return $q->result_array();        //for returning data as an array of data and not objects

        /*
        return [
        ['firstname'=>'First User', 'lastname'=>'First Name'],
        ['firstname'=>'Second User', 'lastname'=>'Second Name'],
        ['firstname'=>'Third User', 'lastname'=>'Third Name']
    ];
    */
}
}
?>
