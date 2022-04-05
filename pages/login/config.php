<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'login';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_errno){
        echo "erro";
    }
    else{
        echo "sucesso";
    }
?>