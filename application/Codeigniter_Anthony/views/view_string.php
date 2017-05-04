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

            echo heading("random_string()",4);
            echo random_string();

            echo heading('random_string("alpha")',4);
            echo random_string('alpha').'<br />';
            echo random_string('alpha',16);

            echo heading('random_string("alnum")',4);
            echo random_string("alnum");

            echo heading('random_string("numeric")',4);
            echo random_string('numeric');

            //same as numeric but without zeros
            echo heading('random_string("nozero")',4);
            echo random_string('nozero');

            //gives md5 hash - 32 chars
            echo heading('random_string("unique")',4);
            echo random_string('unique').'<br />';
            echo 'Length: '.strlen(random_string('unique'));

            //gives sha1 hash - 40 chars
            echo heading('random_string("sha1")',4);
            echo random_string('sha1').'<br />';
            echo 'Length: '.strlen(random_string('sha1'));

            echo br();
            for($i=0;$i<10;$i++)
            {
                echo alternator('one','two').' ';
            }

            echo br();
            echo heading('repeater()',4);
            echo repeater('Z',10).'<br />';

            echo heading('reduce_multiples()',4);
            $string = "FRED,,Bill,,Joe,Jimmy";
            echo reduce_multiples($string,',');

            echo heading('quotes_to_entities()',4);
            $string = "Joe's \"dinner\" ";
            $string = quotes_to_entities($string);

            echo $string;

            echo heading('reduce_double_slashes()',4);
            $string = "http://exmaple.com//index.php";
            echo reduce_double_slashes($string);
             ?>
        </div>
    </div>
</body>
</html>
