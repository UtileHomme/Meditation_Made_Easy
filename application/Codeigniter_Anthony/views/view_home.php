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

            echo '<h3>element()</h3>';
            $ci_array = array('name'=>'Codeigniter','size'=>'3.9mb','lang'=>'en');

            //echo the value if value of key is found
            echo element('name',$ci_array).'<br />';

            //echo null if the key is not present
            echo element('url',$ci_array).'echoing Null echoes empty string..<br />';

            //default value as third parameter
            echo element('url',$ci_array,'not there');

            echo '<br />';
            echo '<h3>random_element()</h3>';

            $cards = array(
                9,
                10,
                "Jack",
                "Queen",
                "King",
                "Ace"
            );

            echo random_element($cards).'<br />';

            echo '<br />';

            echo '<h3>elements()</h3>';

            $new_array = elements(array('name','size','language'),$ci_array);

            print_r($new_array);

            $value = $new_array['language']? 'returned true':'returned false';
            echo '<br />'.$value.'<br />';


             ?>
        </div>
    </div>
</body>
</html>
