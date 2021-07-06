<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Order</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_3.css">
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
							<li><a href="admin.php">Back</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
</header>

<div class="feedback_">
		<h1><u>Inbox</u></h1>
		<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "expo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><td><h6>O_ID_____</h6></td><td><h6>C_ID_________</h6></td><td><h6>Cement_________</h6></td><td><h6>Stone_________</h6></td><td><h6>Ispat_________</h6></td><td><h6>Fittings_________</h6></td><td><h6>Tiles_________</h6></td><td><h6>Wire____________</h6></td><td><h6>Switch_________</h6></td><td><h6>Project______________</h6></td><td><h6>Date_____________</h6></td></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Order_NO"]."</td><td>".$row["Customer_ID"]."</td><td>".$row["Cement"]."</td><td>".$row["Stone"]."</td><td>".$row["Ispat"]."</td><td>".$row["Bathroom_fittings"]."</td><td>".$row["Tiles"]."</td><td>".$row["Wire"]."</td><td>".$row["Switch"]."</td><td>".$row["Project_Name"]."</td><td>".$row["Date and time"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
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
			<p>&copy; All Rights Reserved by <a href="#">MAS Construction Corporation</a></p>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://kit.fontawesome.com/865d153eae.js" crossorigin="anonymous"></script>
</body>
</html>