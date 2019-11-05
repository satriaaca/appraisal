<?php
    define('_HOST','localhost');
    define('_USER','root');
    define('_PASS','') ;
    define('_DB_NAME','db_apprasial');

    $link = mysqli_connect(_HOST, _USER, _PASS, _DB_NAME);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    //echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    //echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL

?>