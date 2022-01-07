<?php
    include_once 'db.php';
    
    $resulto = mysqli_query($conn, "SELECT * FROM post");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="scss2/main3.css" rel="stylesheet" type="text/css">
    <title>Profile</title>
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
                                    <li><a href="#"> Profile </a></li>
                                    <li><a href="#"> Messages </a></li>
                                    <li><a href="#"> Activity </a></li>
                                </div> 
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
    </div>

    <div class="center_profile"> 
        <div class="profile_imge">
            <a class="logout" href="logot.php"> Logout </a>
            <form method="post" action="#" enctyp="multipart/form-data">
                <div>
                    <img src="img/cover/banner.jpg" class="cover_image" alt="cover" name="cov">
                </div> 
                <img src="img/cover/prof.jpg" class="user_profile" alt="profile" name="pfp"> 
            </form>
        </div>
    </div>

    
    <table class="center">
        <tr>
            <td class="none">Images</td> <td class="none">Comments</td> <td class="none">Delete</td>
        </tr>
            <?php
                $i=0;

                while($row = mysqli_fetch_array($resulto)) 
                {
            ?>
                <tr>
                    <td class="none"><?php echo $row["id"]; ?></td>
                    <td><?php echo '<img class="user_photo" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'; ?></td>
                    <td class="cmt"><?php echo $row["comment"]; ?></td>
                    <td><a class="delto" href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
                </tr>
            <?php
                $i++;
                }
            ?>
    </table>
</body>
</html>