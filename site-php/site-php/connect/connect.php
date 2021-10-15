<?php 
    $host = "localhost";
    $user = "alsdk9879";
    $pass = "ghaekt2016417!";
    $db = "alsdk9879";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if( mysqli_connect_errno() ){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>