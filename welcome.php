<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      *{
        font-family: "Fredoka",sans-serif;
      }
    </style>
</head>

  <body>
  <?php
    include "navbar.php";
    ?>
    <br><br><br>

    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    <div class="logo">
    <img src="logo.jpg" height=auto width=98% style="margin-left:0.5%;z-index:-1;top:0 ;position :absolute">
  </div><br>
  <a href="userpage.php"><input  type="submit" id="color" value="Get Started" name = "submit" style="width: 10%;margin-left:44%;margin-top:28%;background-color:#b7e3f9;"></a>
  </body>
</html>