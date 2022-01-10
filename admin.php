<?php 
    // session_start();
    // // echo $_SESSION['admin_name'];
    // if(!isset($_SESSION['admin_name'])){
    //     header("location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science and Engineering</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="bar">
        <a href="index.php"><h1 class="cse">Department of Computer Science and Engineering</h1></a>
        <div id = "log-out">
        <ul>
            <li>Time Table</li>
            <li>Mentor List</li>
            <a href="circular.php"><li>Circular</li></a>
            <li>Achievements</li>
            <a href="admin_logout.php" >Logout</a>
        </ul>
            
        </div>
    </div>
    <br class="barbr">
    <div id="overlay"></div>
           
    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input id="file-box" name="file" type="file" accept="image/*,.pdf">
            <button id="upload-box" type="submit" >Upload</button>
            <?php 

                if(isset($_POST['submit']))
                {
                    include "upload.php";
                    // $res = 1;
                    // upload();
                    // if($uploaded){
                    //     echo "File upload to circular";
                    // }
                    // else{
                    //     echo "Unable to upload file";
                    // }
                }
            ?>
        </form>
    </main>



</body>
</html>




<?php 
    // if()
    // session_destroy();
?>