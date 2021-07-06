<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password']; 
    if($username=="Irfan" or $username=="Sufian")
    {
        $username = stripcslashes($username);  
        $password = stripcslashes($password);   
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from admin where password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: admin.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
    }
    else{
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: user.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
    }      
             
?>  