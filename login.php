<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
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

	 <div class="message">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "text" id ="pass" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
            <p>
            	No account?? <a href="register.php">Sign up</a>
            </p>
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
	<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://kit.fontawesome.com/865d153eae.js" crossorigin="anonymous"></script>


</body>
</html>