<?php

if( isset($_POST['time']) && !empty($_POST['time']))
{
    // $date = $_POST['data'];
    // $date = DateTime::createFromFormat('d/m/Y', $date);;
    // $date = $date->format('Y-m-d');
    // echo $date;

    $time = $_POST['time'];
    if(preg_match('/[^0-9\:]/i',$time))
    {
        echo 'invalid data';
    }
    else
    {
        echo 'valid data';
    }
}

?>
<form action="test.php" method="POST">
    <input type="text" name="time" />
    <input type="submit" value="submit" />
</form>
