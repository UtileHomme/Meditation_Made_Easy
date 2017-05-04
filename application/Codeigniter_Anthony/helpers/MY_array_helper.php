<?php

function test()
{
    echo "Test function of array helper";
}

/*
this function is already present in array helper but we are over writing it
how the original function works
$arr = ['abc'=>'ABC', 'xyz'=>'XYZ'];
echo element('abc',$arr,'Not found');
returns value of abc if it is found else Not Found
*/


function element()
{
    echo 'Element function overridden';
}


?>
