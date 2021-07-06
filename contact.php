<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Contact</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-3">
					<div class="logo">
						<a href="#">
							<img src="image/logo.png" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-md-10 col-9">
					<div class="menu-icon">
						<i class="fas fa-bars"></i>
					</div>
					<nav class="menu">
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="project.php">Project</a></li>
							<li><a href="rating.php">Rating</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<?php
	if( (isset($_POST["email"]) && trim($_POST["email"]) != "" &&(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) && (isset($_POST["message"]) && trim($_POST["message"]) != "")){
  $Email=$_REQUEST["email"];
  $Message=$_REQUEST["message"];
  $host="localhost";
  $user="root";
  $password="";
  $database="expo";
  $connect=mysqli_connect($host, $user,$password, $database);
  if($connect==true)
  {
	  $insert="INSERT INTO contact (`Email`, `Message`) values('$Email','$Message')";
	  $runquery=mysqli_query($connect,$insert);
  }
	 
  }

?>


	<div class="message">
			 <h1>Mesage us</h1>
			<form action="" method="POST">
				<input type="email" name="email" placeholder="Email">
				<input type="text" name="message" placeholder="Type here">
				<input type="submit" id="submit" value="Send"> 
			</form>
	</div>

			<footer>
		<div class="footer-area">
		<div classs="container">
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<div class="footer-logo">
					<img src="image/logo.png">
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="address">
						<div class="maps">
							<i class="fas fa-map-marker-alt"></i>
							<h2>Address</h2>
						</div>
					<p>564 E 4 street Apt# 1D<br>Brooklyn, NY, 11218</p>	
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="contact">
						<div class="maps">
							<i class="fas fa-phone-alt"></i>
							<h2>Contact</h2>
						</div>
					<p>TEL: 347 350 8923<br>Cell: 718 675 0115</p>	
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="rights">
			<p>&copy; All Rights Reserved by <a href="#">MAS Contracting Corporation</a></p>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://kit.fontawesome.com/865d153eae.js" crossorigin="anonymous"></script>
</body>
</html>