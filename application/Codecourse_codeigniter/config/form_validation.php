<?php

$config = [
    'add_article_rules' =>
    [
        [
            'field' => 'title',
            'label' => 'Article Title',
            'rules' => 'required|alpha_numeric_spaces'
        ],
        [
            'field' => 'body',
            'label' => 'Article Body',
            'rules' => 'required'
        ]
    ],
    'admin_login' =>
    [
        [
            'field'=>'username',
            'label'=>'User Name',
            'rules'=>'required|alpha_numeric_spaces|trim'
        ],
        [
            'field'=>'password',
            'label'=>'Password',
            'rules'=>'required'
        ]
    ],
    // 'add_session' =>
    // [
    //     [
    //         'field' => 'msession_name',
    //         'label' => 'Session Name',
    //         'rules' => 'required|alpha_numeric_spaces'
    //     ],
    //     [
    //         'field' => 'msession_date',
    //         'label' => 'Session Date',
    //         'rules' => 'required'
    //     ],
    //     [
    //         'field' => 'msession_start_time',
    //         'label' => 'Session Start Time',
    //         'rules' => 'required|alpha'
    //     ],
    //     [
    //         'field' => 'msession_end_time',
    //         'label' => 'Session End Time',
    //         'rules' => 'required|alpha'
    //     ]
    // ]

];

?>
