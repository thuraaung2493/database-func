<?php

    define("DD", realpath("../"));
    // file include
    require DD . '/wpa28/functions.php';
    require DD . '/wpa28/database.php';
    require DD . '/app/controller/controllers.php';



    // check user request page
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else {
        $page = 'home';
    }
    // load_view($page);
    $controller = ucfirst($page) . "Controller";
    if (function_exists($controller)) {
        call_user_func($controller);
    }
    else {
        echo "404 Not Found";
    }

 ?>