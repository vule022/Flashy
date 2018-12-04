<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>

    <style type="text/css">
      .regg-link{
      color: red;
      position: absolute;
      left: 12%;
      background-color: white;
      text-decoration: none;
    }


    </style>
    <meta charset="utf-8">
    <title>Flashy</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <link rel="shortcut icon"  href="img/ikonica1.png">
  </head>
  <body>



    <form action="includes/login.inc.php" method="POST">

      <div class="container">
        <div class="fields">
          <input type="text" name="username" placeholder="Your Username/ Email..." class="username"><br><br><br>
          <input type="password" name="password" placeholder="Your Password..." class="password"><br>
          <input type="submit" name="loginbtn" value="Login" class="btn-login"><br><br><br><br><br><br><br><br>
          <a href="register.php" class="regg-link"> Create Account </a>
          <!--<a href="register.php" class="reg-link"> Create Account </a>-->
        </div>
      </div>

    </form>

  </body>
</html>
