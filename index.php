<?php 

  //Connect to the database 

  include 'includes/database.php';

  session_start();

    //if upload button is pressed

  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);

    // Get all submited data from the form

    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";

    mysqli_query($conn, $sql); // Stores Data in Database

    // Move uploaded images to the folder

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded sccsc";
    }else{
      $msg = "There was a problem uploading the file";
    }
  }



?>

<!DOCTYPE html>
<html>
<head>
    <title>Flashy</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon"  href="img/ikonica1.png">
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<script type="text/javascript">
  


</script>

<style type="text/css">

  .logout-btn {
    width: 80px;
    height: 40px;
    background-color: white;
    color: grey;
    font-size: 20px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 5px;
}

.username{
    width: 80px;
    height: 40px;
    background-color: white;
    color: grey;
    font-size: 30px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    position: absolute;
    right: 400px;
    top: 8px;
}

</style>

<div class="nav-bar">
    <a href="index.php"><img src="img/ikonicaflashy.png" width="40px" height="40px" class="imglink"></a>
    <form>
        <input type="text" name="search-box" class="srcbox" placeholder="Search...">
    </form>

      <a href="profile.php" id="usernameid" class="username">
        
        <?php  

        //include_once 'includes/login.inc.php';

          //get_user_by( $row['id'], $row['username'] );
          echo $_SESSION['username'];
          

        ?>

      </a>

      <form action="index.php" method="POST">
        <input type="submit" name="profile">
      </form>

      <?php 


    echo '<form action="includes/logout.inc.php" method="POST">
  <button type="submit" name="logout" class="logout-btn">Log out</button>
</form>';

  ?>
</div>



<!-- Header -->
<div class="header">

  <p>Click on the buttons to change the grid view.</p>
  <button onclick="four()" class="button1">4</button>
  <button onclick="two()" class="button1">2</button>
  <button onclick="one()" class="button1">1</button>
</div>

<hr>

  <form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    <div>
      <textarea name="text" cols="40" rows="4"></textarea>
    </div>
    <div>
      <input type="submit" name="upload" value="upload image">
    </div>
  </form>

<!-- Fotografije -->
<div id="content"> 

  <?php  

  //session_start();

  include 'includes/database.php';

  if (isset($_SESSION['id'])) {

  $sql = "SELECT * FROM images  ORDER BY id DESC";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
 
    //echo $_SESSION['username'];
    echo "<div id='img-div'>";
      echo "<img src='images/".$row['image']."'>";
      echo "<p>".$row['text']."</p>";
    echo "</div>";

  }
}else {
    echo "Log in";
  }


  ?>



    

</body>
</html>
