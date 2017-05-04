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

            echo site_url().'<br />';
            echo site_url('news/local/123').'<br />';

            $segments = array('controller','funciton','param1');
            echo site_url($segments).'<br />';

            echo base_url().'<br />';

            echo base_url('images/icons/edit.png').'<br /><br />';
            echo 'current url '.current_url().'<br /><br />';
            echo 'uri_string '.uri_string().'<br /><br />';

            $segments2 = array('html','html_helper');

            
            echo anchor($segments2, 'HTML Helper Page','rel="nofollow"').'<br /><br />';

             ?>
        </div>
    </div>
</body>
</html>
