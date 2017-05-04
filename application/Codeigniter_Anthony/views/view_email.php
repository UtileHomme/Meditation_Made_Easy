<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <div id="container">
        <h2><?php echo $page_header ?></h2>
        <div id="body">
            <?php

            function isValidEmail($email)
            {
                return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email);
            }

            echo '<h3>preg_match() function first</h3>';

            $result1 = isValidEmail('pksk@hotmail.com')?'valid':'not valid';
            echo 'pksk@hotmail.com is '.$result1;

            echo '<br />';

            $result2 = isValidEmail('jatins368@gmail.travel1')?'valid':'not valid';
            echo 'jatins368@gmail.travel is '.$result2;

            echo '<br />';

            echo '<h3>valid_email() function first</h3>';

            $result3 = valid_email('pksk@hotmail.com')?'valid':'not valid';
            echo 'pksk@hotmail.com is '.$result3;

            echo '<br />';

            $result4 = valid_email('jatins368@gmail.travel1')?'valid':'not valid';
            echo 'jatins368@gmail.travel is '.$result4;


             ?>
        </div>
    </div>
</body>
</html>
