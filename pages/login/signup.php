<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $user = filter_input(INPUT_POST, 'User', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['Password'];


        $result = mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES ('$user','$email','$password')");
    
        header('Location: login.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cadastrar.css">

    <title>Suna. | SignUp</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="logo">
                <span>Suna.</span>
            </div>
            <div class="formLogin">
                <form action="signup.php" method="post">
                    <input type="text" name="User" placeholder="Username" autocomplete="off">
                    <input type="email" name="Email" placeholder="Email" autocomplete="off">
                    <input type="password" name="Password" placeholder="Password" autocomplete="off">

                    <input type="submit" name="submit" value="SignUp">
                </form>
            </div>
        </div>
        <div class="image">
            <img src="assets/image.jpg">
        </div>
    </div>
</body>
</html>