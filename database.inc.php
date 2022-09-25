<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "rail";

    $con = mysqli_connect($host,$user,$pass,$db);

    if(!$con){
        die("Database Connection Error");
    }
?>