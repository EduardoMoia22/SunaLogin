<?php
session_start();
    if(isset($_POST['submit']) && !empty($_POST['User']) && !empty($_POST['Password'])){
        include_once('config.php');

        $user = $_POST['User'];
        $password = $_POST['Password'];

        $sql = "SELECT * FROM users WHERE user = '$user' and pass = '$password'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['User']);
            unset($_SESSION['Password']);
            header('Location: login.php');
        }else{
            $_SESSION['User'] = $user;
            $_SESSION['Password'] = $password;
            header('Location: ../dashboard/dashboard.php');
        }
    }else{
        header('Location: login.php');
    }
