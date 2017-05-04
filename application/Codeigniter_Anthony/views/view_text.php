<?php echo doctype('html5'); ?>
<html lang="en">
<head>

    <title><?php echo $title; ?></title>

    <?php
    echo link_tag('assets/css/styles.css');
     ?>
</head>

<body>
    <div id="container">
        <h2><?php echo $page_header ?></h2>
        <div id="body">
            <?php

            echo heading('word_limiter()',3);
            $string = "This is a string with lots of words";
            echo $string = word_limiter($string,4).'<br /><br />';

            echo heading('character_limiter()',3);
            $string2 = "Here is some nice text string consisting of eleven words";
            echo $string2 = character_limiter($string2,20).'<br /><br />';

            //or use star_censor with 2 parameter
            echo heading('word_censor()',3);
            $disallowed = array('darn','shucks','golly','phoney');
            $string3 = "Golly! KIds these days have no darn respect for their elders";
            echo word_censor($string3,$disallowed,'***').'<br /><br />';

            echo heading('highlight_phrase()',3);
            $string4 = "Here is some nice text about nothing in particular";
            echo highlight_phrase($string4,"nice text", '<span style = "color:red">','</span>').'<br /><br />';

            //function is for email or file.. adds a new line
            echo heading('word_wrap()',3);
            $string5 = "Here is a simple string of text that will help us demonstrate this function";
            echo word_wrap($string5,25).'<br /><br />';

            echo heading('ellipsize()',3);
            $string6 = "This string is way too long and we have to do something about it";
            echo ellipsize($string6,29,1).'<br /><br />';

             ?>
        </div>
    </div>
</body>
</html>
