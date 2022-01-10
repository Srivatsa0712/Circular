<?php 
    $execute_sign_in = 0;
    $admin_invalid = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["admin_name"]))
    {
        $db_server_name = "localhost";
        $db_user_name = "root";
        $db_password = "!VEN@db118";
        $db_name = "admin_login";
    
        $conn = mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);
    
        $admin = $_POST["admin_name"];
        $pass = $_POST["admin_password"];
    
        $query = "SELECT sno,admin_name,pass FROM admins WHERE admin_name = '$admin' AND pass = '$pass'";
    
        // $db_data = $conn->query($query);     //OOPs paradigm
        $db_data = mysqli_query($conn,$query);  //Procedural paradigm
    
        // $row = $db_data->fetch_assoc();      //OOPs paradigm
        $row =  mysqli_fetch_assoc($db_data);   //Procedural paradigm
       
        mysqli_close($conn);
    
        if($row != NULL){
            if(!strcmp($row["user_name"],$user) and !strcmp($row["pass"],$pass)){
                session_start();
                $_SESSION['admin_name'] = $admin;
                header("location: ./admin.php");
            }
        }
        else{
            $admin_invalid = 1;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science and Engineering</title>
    <link rel="stylesheet" href="css/style.css">
    <script  src="js/signInModal.js" async></script>
</head>
<body>
    <div class="bar">
        <a href="#"><h1 class="cse">CSE Department</h1></a>
        <ul>
            <li>Time Table</li>
            <li>Mentor List</li>
            <a href="circular.php"><li>Circular</li></a>
            <li><a href="about.html">About</a></li>
            <li id="admin">Admin Login<i class="fas fa-user-lock"></i></li></ul>
        </ul>
    </div>
    <!-- <br class="barbr"> -->
    <div id="overlay"></div>
           
    <!-- ADMIN MODAL  -->
    <div id="admin-modal">
        <div id="admin-modal-close">
            <span id = "admin-modal-close-btn">&times;</span> 
        </div>
        <form  action="./index.php" method="post" id="admin-form" autocomplete="off">

            <input type="text" name="admin_name" placeholder="Enter username" maxlength="4" required/>
            <input type="password" name="admin_password"  placeholder="Enter password" minlength="8" required/>
            <div >
                <button  id="admin-sign-in-btn">Sign In</button>
            </div>
            <hr>
            <p>New Admin?</p>
        </form>
        <div>
            <button  id="admin-register-btn">&#43; Add Admin</button>
        </div>
    </div>


    <!-- <script src="https://kit.fontawesome.com/482c085e13.js" crossorigin="anonymous"></script> -->

</body>
</html>

