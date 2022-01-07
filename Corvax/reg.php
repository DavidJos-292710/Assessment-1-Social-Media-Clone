<link href="scss/main2.css" rel="stylesheet" type="text/css">

<?php
    include_once "db.php";

    if($_POST['password'] == $_POST['conPass'])
    {
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $sql = "SELECT * FROM signup WHERE email='$email'";
            $res = mysqli_query($conn, $sql);
           
            if(mysqli_num_rows($res) > 0) 
            {
                echo "<h2>Email is already Entered</h2>";
            }
            else
            {
                $email=$_POST['email'];
                $f_name=$_POST['f_name'];
                $username=$_POST['username'];
                $pword=$_POST['password'];
                $pw = md5($pword);
                $sql = "insert into signup (email,f_name,username,password) values('$email','$f_name','$username','$pw')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<h2>Resgistration is COMPLETED</h2>";
                }
                else
                {
                    echo "Error when inserting information:" .$sql. "" .mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
    }
    else
    {
        echo "Password must be the Same";
    }
?>

<?php
    include 'signup.php'
?>