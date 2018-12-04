<?php 


?>

<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      .regspan a{
        position: absolute;
        text-decoration: none;
        color: red;
        background-color: white;
        left: 38%;
        top: 10px;
      }
    </style>
    <meta charset="utf-8">
    <title>Register to Flashy</title>
    <link rel="stylesheet" type="text/css" href="css/registerstyle.css">
    <link rel="shortcut icon"  href="img/ikonica1.png">
  </head>
  <body>

      <form action="includes/register.inc.php" method="POST">
        <div class="container">
          <span class="regspan"><a href="login.php"> Back to Login Page</a></span>
            <div class="fields">
                <input type="text" name="username" class="usern" placeholder="Your Username..."><br><br><br>
                <input type="text" name="password1" class="pass1" placeholder="Your Password..."><br><br><br>
                <input type="text" name="password2" class="pass2" placeholder="Repeat your Password.."><br><br><br>
                <input type="email" name="email1" class="email1" placeholder="Your Email..."><br><br><br>
                <input type="email" name="email2" class="email2" placeholder="Repeat your Email..."><br><br><br>
                <input type="submit" name="registerbtn" class="reg-btn" value="Register">
            </div>
        </div>
      </form>

  </body>
</html>
