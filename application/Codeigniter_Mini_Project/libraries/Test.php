<?php

class Test
{
    public function abc()
    {
        //we cannot call the load functions here because the super-object is not in scope of this function
        $ci = &get_instance();
        //the super-object will be made available Now

        $ci->load->helper('array');
        echo 'Abc function of Test library';
    }
}
?>
