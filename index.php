<?php

session_start();

/////getting the user 
if(isset($_SESSION["user_id"])){

  $mysqli = require __DIR__ . "/database.php";

  $sql = "SELECT * FROM user
          WHERE id={$_SESSION["user_id"]}";

  $result = $mysqli->query($sql);
  $user=$result->fetch_assoc();

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
    <style>
    body {
        font-family: "Lato", sans-serif;
      }
      
      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }
      
      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .sidenav a:hover {
        color: #f1f1f1;
      }
      
      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }
      
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      </style>


</head>
<body>
   
<!----------------------------------- Nav bar --------------------------------------------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid container">
        <a class="navbar-brand" href="#">Onatrio Tech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <div class="container"></div>
            <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Advisor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Help
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">IT</a></li>
                <li><a class="dropdown-item" href="#">Add/Drop Course</a></li>
                <li><a class="dropdown-item" href="#">Financial Aid</a></li>
                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
            </ul>
            </div>
        </div>
        </div>
    </nav>

  <div class="jumbotron .bg-secondary" >
          <!-- side nav bar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Courses</a>
        <a href="#">Software Design</a>
        <a href="#">Design Analysis</a>
        <a href="#">Database Man.</a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  
    <hr class="my-4">
 
      <!----getting the user name--->  
      <?php if (isset($user)): ?>
        <div class="d-flex justify-content-center">
        <h1>Welcome <?= htmlspecialchars($user["name"])?></h1>
        <br>
  
        <p><a href="logout.php"></a></p>
        </div>
      <?php else: ?>
        <p><a href="login.php">Login in</a> or <a href="login.html">sign up</a></p>
      <?php endif; ?>
        <!--------------------------------------------->  
        <div class="d-flex justify-content-center">
        <p>your engineering courses</p>
        </div>

        <div class="d-flex justify-content-center">
    <a class="btn btn-primary btn-lg" href="#" role="button">TO DO</a>
      </div>
  </p>

</div>



      <div class="container text-center container">
        <div class="row">
        
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="image1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Software Architecture</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;" class="h-75 d-inline-block" >
                <img src="image2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Design Analysis and Algorithms</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="image3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Database Management</p>
                </div>
              </div>
          </div>
        </div>
      </div>


      











      <!-- side nav bar script -->
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>


























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>