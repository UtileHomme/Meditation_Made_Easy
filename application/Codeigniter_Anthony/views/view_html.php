<?php echo doctype('html5'); ?>
<html lang="en">
<head>
    <?php echo meta('description','My CI site');
    $meta = array(
        array('name' =>'robots','content'=>'no-cache '),
        array('name'=> 'keywords','content'=>'php,mysql,oop,MVC'),
        array('name'=>'Content-type','content'=>'text/html; charset=utf-8','type'=>'equiv')
    );

    echo meta($meta);
    ?>
    <title><?php echo $title; ?></title>

    <?php
    echo link_tag('assets/css/styles.css');
     ?>
</head>

    <!-- Advantages of html helpers
    - we don't need to break out of php to write HTML
    - content inside tags can be generated dynamically -->

<body>
    <div id="container">
        <h2><?php echo $page_header ?></h2>
        <div id="body">
            <?php

            echo heading('Hello world',3);
            echo heading('Hello world',5);
            echo heading('Important Message',4,'class="importnat"');

            echo img('assets/images/med1.jpg');

            $image_attr = array(
                'src' => 'assets/images/med1.jpg',
                'alt' => 'dog',
                'height' =>135,
                'title' =>'Hey dooggy'
            );

            //an integer inside the br() function will output that many break tags
            echo br(3);
            echo img($image_attr);

            echo nbs(5).'I have 5 spaces before me <br />';

            $list = array(
                'red',
                'yellow',
                'green',
                'blue'
            );

            $attributes = array(
                'class'=>'list',
                'id'=>'mylist'
            );

            echo ul($list,$attributes);

             ?>
        </div>
    </div>
</body>
</html>
