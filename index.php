<?php

// $_SERVER['REQUEST_URI']

require_once 'config.php';
require_once 'App.php';


    App::dir_name('inc');
    App::init();

    $url = App::base_url();
    $id = App::get_id();

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $url; ?></title>
        <style>
            nav li {
                display: inline-block;
            }
        </style>
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="<?php echo ROOT; ?>home">Home</a></li>
            <li><a href="<?php echo ROOT; ?>test">Test</a></li>
            <li><a href="<?php echo ROOT; ?>about">About</a></li>
        </ul>
    </nav>

    <a href="<?php echo ROOT . $url . '/1'  ; ?>">Post № 1</a>
    <a href="<?php echo ROOT . $url . '/2'  ; ?>">Post № 2</a>
    <a href="<?php echo ROOT . $url . '/3'  ; ?>">Post № 3</a>

    <?php // print_r($id) ; ?>

    </body>
    </html>









