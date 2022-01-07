<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="scss2/main3.css" rel="stylesheet" type="text/css">
    <title>Home | Corvax</title>

    <script>
        function view()
        {
            pic.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</head>
<body>
    <div> 
        <header> 
                <div class="logo_title"> 
                    <h1>Corvax</h1>
                </div>
                <nav> 
                    <div> 
                        <div class="nav_links"> 
                            <ul>
                                <div> 
                                    <li><a href="home.php"> Home </a></li>
                                    <li><a href="profile.php"> Profile </a></li>
                                    <li><a href="#"> Messages </a></li>
                                    <li><a href="#"> Activity </a></li>
                                </div> 
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
    </div>

    <br> <br>

    <!-- The first php is used for the user to post and comment their own images which will move to their profile -->
    <?php
        include_once 'db.php';
        $msg = ' ';
        error_reporting(0);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $cmt = $_POST['comment']; //Getting the user's comment
            $imge = $_FILES['image']['tmp_name']; //Getting the user's selected picture
            $fimg = file_get_contents($imge);

            $sqli = "insert into post (image, comment) values(?, '$cmt')";
            $get = mysqli_prepare($conn,$sqli);
            mysqli_stmt_bind_param($get, "s", $fimg);
            mysqli_stmt_execute($get);
            $check = mysqli_stmt_affected_rows($get);
            
            if($check == 1)
            {
                $msg = 'Image succesfully posted';
            }
            else
            {
                $msg = 'An error has been occured';
            }
            mysqli_close($conn);
        }
    ?>

    <div class="upld"> 
        <form action="#" method="post" enctype="multipart/form-data"> 
            <input class="uploader" type="text" name="comment" placeholder="Type in...."> <br>
            <img id="pic" src="img/bg/bg.jpg"> <br> <br>
            <label for="user_posts" class="postit"> Find Pic </lable> <button class="upld"><a href="profile.php">Post</a></button>
            <input id="user_posts" type="file" name="image" onchange="view()"> <br>
        </form>
    </div>

    <br> <br>

    <?php 
        include_once 'db.php';
        // Second php table that displays the users comment to followers post
        if(isset($_POST['submit']))
        {
            $coment = $_POST['cmnt']; //To get comment from the followers form.
            $sqli = "INSERT INTO commental(comment) VALUES ('$coment')";
            $result = mysqli_query($conn, $sqli);
        }
    ?>

    <div id="center_post"> 
        <form method="post" action=" " class="form"> 
            <div id="followers_user"> 
                <h3> Japanese art </h3>
            </div> 
            <img src="img/3dwave.jpg" id="followers_post"> 

            <div class="bg20"> 
                <div class="input_group"> 
                    <input class="input_1" name="cmnt" type="text" id="comments" placeholder="Enter your comment....">
                </div>
                <div class="input_comment"> 
                    <button name="submit" class="btn"> Comment </button>
                </div>
            </div>
            <!-- Displaying the comments -->
            <div id="previous_comment"> 
                <p><?php echo $coment?></p>
                <?php
                    $sql = "SELECT * FROM 'commental' ";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
                    <div class="followers_comment"> 
                        <p class="cmt"><?php echo $row['comment']; ?></p>
                    </div>
                <?php
                        }
                    }
                ?>

                <br> <br>

                <h4> Mira Jane </h4><p> I LOVE YOUR ART!!!</p><br>
                <h4> John  </h4><p> I'm loving the digital art my dude #DIGITALARTFORLIFE </p>
            </div>
        </form>
    </div>

    <br> <br>

</body>
</html>