<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		.img-div{
		    width: 750px;
		    height: 750px;
		    border: 1px solid red;
		    border-radius: 10px;
		    position: relative;
		    top: 150px;
		    left: 30px;
		    margin-bottom: 50px;			
		}
		.gallery{
		    width: 750px;
		    height: 750px;
		    border: 1px solid red;
		    border-radius: 10px;
		    position: relative;
		    top: 150px;
		    left: 30px;
		    margin-bottom: 50px;
		}
		.gallery img{
			padding: 10px;
			float: left;
    		margin: 13px;
		    width: 170px;
		    height: 170px;
		}
		.friends{
		    width: 750px;
		    height: 750px;
		    border: 1px solid red;
		    border-radius: 10px;
		    position: absolute;
		    top: 608px;
		    right: 30px;
		}


	</style>
	<title>Flashy</title>
	<link rel="stylesheet" type="text/css" href="css/profilestyle.css">
	<link rel="shortcut icon" href="img/ikonica1.png">

	<script type="text/javascript" src="js/profile.js">
		
	</script>
</head>
<body>

<!--navbar -->
<div class="nav-bar">
    <a href="index.php"><img src="img/ikonicaflashy.png" width="40px" height="40px" class="imglink"></a>
    <form>
        <input type="text" name="search-box" class="srcbox" placeholder="Search...">
    </form>


    <form action="includes/logout.inc.php" method="POST">
  <button type="submit" name="logout" class="logout-btn">Log out</button>
</form>

</div>

<!--Slike profila -->
<div class="profile" id="profileid">

		<img src="img/download.jpg" id="headerimg">
		<img src="img/download.jpg" id="profileimg">

<!--Nav za profil(Slike, postovi, dogadjaji, prijatelji...) -->
	<div class="profile-nav" id="profile-navid">
		
	</div>

</div>

<!--Galerija korisnika -->

<div class="gallery">
  <?php  

  include 'includes/database.php';

  $sql = "SELECT * FROM images  ORDER BY id DESC";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){

    echo "<div id='img-div'>";
      echo "<img src='images/".$row['image']."'>";
    echo "</div>";

  }


  ?>

</div>

<!-- Prijatelji -->
<div id="friendsid" class="friends">
	
</div>

<!-- TIMELINE -->
<div class="timeline" id="timelineid">
	<a href="index.php">sssss</a>
	
	<!-- Objava posta(SAMO TEKST) -->
	<div class="publish" id="publishid">
		
	</div>

</div>



</body>
</html>