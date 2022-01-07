<?php

   include_once 'db.php';
   if (isset($_POST['login'])) 
   {
        $email = $_POST['email'];
        $pas= $_POST['password'];
        $pass = md5($pas);
        $sql = "SELECT * FROM signup WHERE email='$email' && password='$pass'";
        $res = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($res) > 0) 
        {
            header('Location:home.php');
        }
        else
        {
            echo "This is invalid";
        }
   }
    
?>