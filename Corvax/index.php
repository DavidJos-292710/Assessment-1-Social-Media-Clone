<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Login | Corvax</title>
</head>
<body>

    <!-- Setting the background for the login menu -->
        <div class="bg1">             
            <div class="main">
            <div class="menu">
                    <!-- Creating the forum where the user types down the requirements  -->
                    <h1 class="heading"> Corvax </h1>
                    <form method="post" action="locode.php"> 
                        <input class="log" type="text" name="email" placeholder="email or username" required>

                        <br> <br>

                        <input class="log" type="password" name="password" placeholder="password" required>

                        <br><br>

                        <input class="btn" type="submit" name="login" value="Login">
                    </form>

                    <div class="option2"> 
                        <p> Don't have an account? <a href="signup.php"> Sign-up </a> </p>
                    </div>
            </div>
        </div>
</body>
</html>