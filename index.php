<?php
session_start();
require('db.php');
$username="";
$errors = array(); 

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  if (count($errors) == 0) {
    $query = "SELECT * FROM login WHERE uname='$username' AND pwd='$pwd'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $username;
      header("location:home.php?info=add_gym");
    }else {
      array_push($errors, "<div class='alert alert-warning'><b>Wrong username/password combination</b></div>");
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Gym Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style type="text/css">
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      color: #ffffff;
      background: rgba(0, 0, 0, 0.5);
    }
    .background {
      position: fixed;
      z-index: -1000;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
    }
    .background img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .navbar {
      background-color: rgba(0, 0, 0, 0.7) !important;
      box-shadow: 0px 0px 15px 0px white;

    }
    .navbar-brand h3 {
      font-weight: 600;
    }
    .container-fluid {
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    .form {
      width: 30%;
      margin: 7% auto;
      padding: 2rem;
      background-color: transparent;
      border-radius: 10px;
      box-shadow: 0px 0px 15px 0px white;
      backdrop-filter: blur(20px);

    }
    .form input, .form button {
      border-radius: 5px;
      height: 45px;
      font-size: 1rem;
    }
    .form button {
      width: 100%;
      font-weight: 600;
      transition: background-color 0.3s ease-in-out;
    }
    .form button:hover {
      background-color: #ffffff;
      color: #000000;
    }
    
    h2 {
      text-align: center;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fas fa-dumbbell"></i> GYM MANAGEMENT SYSTEM</a>
    </div>
  </nav>
  <hr>
  <h2>Access Only To Admin</h2>
  <hr>
  <form class="form" action="" method="post">
    <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="USERNAME" required> <br/>
    <input type="password" class="form-control mb-2 mr-sm-2" name="pwd" placeholder="PASSWORD" required> <br/>
    <button type="submit" class="btn btn-outline-light mb-2" name="login_user">Login</button>
  </form>
  <div class="background">
    <img src="bg3.jpg" alt="Gym Background">
  </div>
</body>
</html>
