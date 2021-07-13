<?php
    $serverName ="localhost";
    $dbUsername ="root";
    $dbPassword="";
    $dbName="pizzeria";

    $conn = mysqli_connect('localhost','root','','pizzeria');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>