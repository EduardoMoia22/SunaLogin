<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">

    <title>Suna. | Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="logo">
                <span>Suna.</span>
            </div>
            <div class="formLogin">
                <form action="testLogin.php" method="post">
                    <input type="text" name="User" placeholder="Username" autocomplete="off">
                    <input type="password" name="Password" placeholder="Password" autocomplete="off">

                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
        <div class="image">
            <img src="assets/image.jpg">
        </div>
    </div>
</body>
</html>