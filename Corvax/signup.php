<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="scss/main2.css" rel="stylesheet" type="text/css">
    <title>Sign Up | Corvax</title>
</head>
<body>

    <div class="forum"> 
        <div class="bg">
            <div class="reg"> 
            <h1 class="head">Corvax</h1>
            <h3 class="slog"> Sign Up to witness your friend's and Families photos </h3>
                <form action="reg.php" method="post"> 
                    <div class="typeIn"> 
                        <input type="text" name="email" placeholder="Email" required>
                        <br>
                        <input type="text" name="f_name" placeholder="Full Name" required>
                        <br>
                        <input type="text" name="username" placeholder="Username" required>
                        <br> 
                        <input type="password" name="password" placeholder="Password" required>
                        <br> 
                        <input type="password" name="conPass" placeholder="Confirm Password" required>
                        <br>  
                    </div>
                    <input type="submit" class="btn" name="submit" value="Sign Up">
                </form>
            </div>
            <div class="opt2"> 
                    <p>Already Have an Account? <a href="index.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>