<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/circular.css">
    <link rel="stylesheet" href="css/circular2.css">
    <script  src="js/circular.js" async></script>
</head>
<body>
    <div class="bar">
        <a class="headref" href="index.php"><h1 class="cse">Department of Computer Science and Engineering</h1></a>
        <ul>
            <a class="headref" href="introduction.html"><li>Introduction</li></a>
            <li>Vision and Mission</li>
            <li>Time Table</li>
            <li>Mentor List</li>
            <li>Circular</li>
            <li>Achievements</li>
            <!-- <li>Admin Login  <i class="fas fa-user-lock"></i></li> -->
        </ul>
    </div>
    <main>
      <header>
        <h1>Recent Circulars</h1>
        <p>
          <span>&#139;</span>
          <span>&#155;</span>
        </p>
      </header>
      <section>
        <!-- display uploaded image/pdf -->
        <?php 
          $db_server_name = "localhost";
          $db_user_name = "root";
          $db_password = "!VEN@db118";
          $db_name = "admin_login";

          $conn = mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);

          $sql = "SELECT * FROM pdf_files ORDER BY upload_date_time DESC";
          $data = mysqli_query($conn,$sql);
          $image = mysqli_fetch_assoc($data);
          
          // echo "File name: ",$image["name"];
          // mysqli_close();
        ?>

        <div class="product card">
          <span class = "date"><?php echo "UPLOADED ON<br>".$image['upload_date_time']; ?></span>
          <div class="detail">
              
              <embed type="image/png" src="./uploads/<?php echo $image["name"];?>"  width="300px" height="300px" />
          </div>
          <div class="button">
            <a href="#">Download</a>
          </div>
        </div>


        <div class="product card">
          <div class="detail content">
            <p>
              <b>Hi I'm Second</b><br>
            </p>
          </div>
          <div class="button">
            <a href="#">Download</a>
          </div>
        </div>


        <div class="product card">
          <div class="detail content">
            <p>
              <b>Hi I'm Third</b><br>
            </p>
          </div>
          <div class="button">
            <a href="#">Download</a>
          </div>
        </div>


        <div class="product card">
          <div class="detail content">
            <p>
              <b>Hi I'm Fourth</b><br>
            </p>
          </div>
          <div class="button ">
            <a href="#">Download</a>
          </div>
        </div>


        <div class="product card">
          <div class="detail content">
            <p>
              <b>Hi I'm Fifth</b><br>
            </p>
          </div>
          <div class="button">
            <a href="#">Download</a>
          </div>
        </div>



      </section>
    </main>
    <script src="https://kit.fontawesome.com/482c085e13.js" crossorigin="anonymous"></script>
</body>
</html>