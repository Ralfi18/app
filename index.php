<?php

// $_SERVER['REQUEST_URI']

require_once 'config.php';
require_once 'App.php';


    App::dir_name('inc');
    App::init();


?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo App::base_url(); ?></title>
        <style>
            nav li {
                display: inline-block;
            }
        </style>
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="test">Test</a></li>
        </ul>
    </nav>

    <?php


    echo App::get_id();

    ?>

    </body>
    </html>









