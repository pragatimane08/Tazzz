<?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tazz";

    //create connection 
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_errno()){
        die ("Connection Error ".mysqli_connect_errno($conn));
    }else{
        echo "";
    }
?>

                                