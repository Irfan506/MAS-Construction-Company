<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_1.css">
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
	<div class="banner1">
		<div class="text">
			<p>It is easy to build a good building when the designers and workers are expert</p>
		</div>
	</div>
	<div class="ongoing">
		<h2>Ongoing Project</h2>
		<?php 
// Include the database configuration file  
require_once 'connection.php'; 
 
// Get image data from database 
$result = $con->query("SELECT image FROM image"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

	</div>
	<div class="products-area">
		<div class="container">
			<div class="section-title">
				<h2>Recently completed</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-4">
					<div class="product-button button-group filter-button-group">
				    	<button data-filter="*">All photo</button>
				    	<button data-filter=".bedroom">Bedroom</button>
				    	<button data-filter=".kitchen">Kitchen</button>
				    	<button data-filter=".bathroom">Bathroom</button>
					</div>
				</div>
				<div class="col-md-9 col-7">
					<div class="row grid" id="grid">
						<div class="col-md-4 grid-item bedroom">
							<div class="single-product">
								<img src="image/bed_1.jpg" alt="product1" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bedroom">
							<div class="single-product">
								<img src="image/bed_2.jpg" alt="product2" class="img-fluid">
							</div>	
						</div>
						<div class="col-md-4 grid-item bedroom">
							<div class="single-product">
								<img src="image/bed_3.jpg" alt="product3" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_1.jpg" alt="product4" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_2.jpg" alt="product5" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_3.jpg" alt="product6" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_4.jpg" alt="product7" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_5.jpg" alt="product8" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_6.jpg" alt="product9" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_7.jpg" alt="product10" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_8.jpg" alt="product11" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_9.jpg" alt="product12" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_10.jpg" alt="product13" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_11.jpg" alt="product14" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_12 .jpg" alt="product15" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_13.jpg" alt="product16" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_14.jpg" alt="product17" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_15.jpg" alt="product18" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_16.jpg" alt="product19" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item kitchen">
							<div class="single-product">
								<img src="image/kitch_17.jpg" alt="product20" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_1.jpg" alt="product21" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_2.jpg" alt="product22" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_3.jpg" alt="product23" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_4.jpg" alt="product24" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_5.jpg" alt="product25" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_6.jpg" alt="product26" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_7.jpg" alt="product27" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_9.jpg" alt="product29" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 grid-item bathroom">
							<div class="single-product">
								<img src="image/bath_10.jpg" alt="product30" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="top">
			<i class="fas fa-angle-double-up"></i>
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
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://kit.fontawesome.com/865d153eae.js" crossorigin="anonymous"></script>
</body>
</html>