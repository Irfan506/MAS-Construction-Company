<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Customer</title>
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
                            <li><a href="rate.php">Rate_Us</a></li>
                            <li><a href="index.php">LogOut</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['Cement'])&&!empty($_POST['Stone'])&&!empty($_POST['Ispat'])&&!empty($_POST['Bathroom_fittings'])&&!empty($_POST['Tiles'])&&!empty($_POST['Wire'])&&!empty($_POST['Switch'])&&!empty($_POST['customer_id'])&&!empty($_POST['project_name'])) {
        $customer_id = $_POST['customer_id'];
        $cement = $_POST['Cement'];
        $stone = $_POST['Stone'];
        $ispat = $_POST['Ispat'];
        $bathroom_fittings = $_POST['Bathroom_fittings'];
        $tiles = $_POST['Tiles'];
        $wire = $_POST['Wire'];
        $switch = $_POST['Switch'];
        $project= $_POST['project_name'];
        $host="localhost";
        $user="root";
        $password="";
        $database="expo";
        $connect=mysqli_connect($host, $user,$password, $database);
        if($connect==true)
        {
            $insert="INSERT INTO item (`Customer_ID`, `Cement`, `Stone`, `Ispat`,`Bathroom_fittings`,`Tiles`,`Wire`,`Switch`,`Project_Name`) values('$customer_id','$cement','$stone','$ispat','$bathroom_fittings','$tiles','$wire','$switch','$project')";
            $runquery=mysqli_query($connect,$insert);
        }
     
    } 
    }
?>


<div class="Choose-item">
    <h3>Choose item for your dream</h3>
    <form action="" method="post">
        <div class="item">
            <img src="image/cement.png">
            <img src="image/cement1.jpg">
            <img src="image/cement3.png">
            <select name="Cement">
                <option value="" disabled selected>Choose Cement</option>
                <option value="Holcim">Holcim</option>
                <option value="Crown">Crown</option>
                <option value="Supercrete">Supercrete</option>
            </select>

        </div>
        <div class="item">
            <img src="image/stone1.jpg">
            <img src="image/stone2.jpg">
            <img src="image/stone3.jpg">
            <select name="Stone">
                <option value="" disabled selected>Choose Stone</option>
                <option value="Belgium">Belgium</option>
                <option value="Egypt">Egypt</option>
                <option value="UAE">UAE</option>
            </select>
        </div>
         <div class="item">
            <img src="image/ispat1.jpg">
            <img src="image/ispat2.jpg">
            <img src="image/ispat3.jpg">
            <select name="Ispat">
                <option value="" disabled selected>Choose Ispat</option>
                <option value="Rebar">Rebar</option>
                <option value="CSRM">CSRM</option>
                <option value="Reinforcement">Reinforcement</option>
            </select>
        </div>
        <div class="item">
            <img src="image/bath_fittings1.jpg">
            <img src="image/bath_fittings2.jpg">
            <img src="image/bath_fittings3.jpg">
            <select name="Bathroom_fittings">
                <option value="" disabled selected>Choose Bathroom Fittings</option>
                <option value="Acura">Acura</option>
                <option value="jaquar">jaqurar</option>
                <option value="Haibali">Haibali</option>
            </select>
        </div>
        <div class="item">
            <img src="image/tiles1.jpg">
            <img src="image/tiles2.jpg">
            <img src="image/tiles3.jpg">
            <select name="Tiles">
                <option value="" disabled selected>Choose Tiles Quality</option>
                <option value="Turkish">Turkish</option>
                <option value="Chineese">Chineese</option>
                <option value="Italian">Italian</option>
            </select>
        </div>
        <div class="item">
            <img src="image/wire1.png">
            <img src="image/wire2.jpg">
            <img src="image/wire3.jpg">
            <select name="Wire">
                <option value="" disabled selected>Choose Wire</option>
                <option value="Okonite">Okonite</option>
                <option value="Sumitomo">Sumitomo</option>
                <option value="Bhuwal">Bhuwal</option>
            </select>
        </div>
        <div class="item">
            <img src="image/switch3.jpg">
            <img src="image/switch2.jpg">
            <img src="image/switch1.jpg">
            <select name="Switch">
                <option value="" disabled selected>Choose Switch Company</option>
                <option value="Philips">Philips</option>
                <option value="Havells">Havells</option>
                <option value="Legrand">Legrand</option>
            </select>
        </div>
            <h4>Your Info</h4>
        <div class="item-">
            <input type="text" name="customer_id" placeholder="Enter Your Customer ID please...">
            <input type="text" name="project_name" placeholder="Project Name">
        </div>
    
    <input type="submit" name="submit" vlaue="Choose options">
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
            <p>&copy; All Rights Reserved by <a href="#">MAS Construction Corporation</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://kit.fontawesome.com/865d153eae.js" crossorigin="anonymous"></script>
</body>
</html>