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

            if(isset($email) && isset($password))
            {
                echo validation_errors();
                echo 'Your username is '.$email.'<br />';
                echo 'Your password is '.$password.'<br />';
                echo 'Your password length is '.$pass_length.'<br />';
                echo 'Form submitted from '.$url.'<br />';
                print_r($_POST);
            }
            else
            {
                echo validation_errors();
                echo form_open('form/form_helper');
                echo '<label for="username">Email:</label><br />'.form_input('email',set_value('email')).'<br />';
                echo '<label for="password">Password:</label><br />'.form_password('password','').'<br /><br />';
                $url_sent_from = current_url();

                echo form_hidden('url', $url_sent_from);
                echo form_submit('mysubmit','Login!');
                echo form_close();
            }
             ?>
        </div>
    </div>
</body>
</html>
