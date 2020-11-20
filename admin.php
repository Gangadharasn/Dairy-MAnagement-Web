<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'webdairy';

$conn = mysqli_connect($server,$user,$pass,$dbname);
$sql = "SELECT * FROM admin WHERE name = '$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
if($row['name'] == $username && $row['password'] == $password)
{
     echo '<html>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<style type="text/css">
body{
    margin: 0;
    padding: 0;
    color:#fff
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}		
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: "Josefin Sans", sans-serif;
}

body{
   background-color: white;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: white;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}


.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
.avatar1{
    width: 70px;
    height: 70px;
    border-radius: 70%;
	position:absolute;
    top: 50px;
    left: 30%;
}
.cow{
	position:absolute;
    top: 50px;
    left: 16.5%;
}
</style>
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
       
        <ul>
		     <img src="images.jpg" class="avatar1">
			 <li><a href="#"><i class="fas fa-user"></i></a></li>
			 <li><a href="#"><i class="fas fa-user"></i></a></li>
        		 <li><a href="#"><i class="fas fa-user"></i></a></li>
			<li><a href="#"><i class="fas fa-user"></i></a></li>
            <li><a href="vieworder.php"><i class="fas fa-user"></i>Milk orders</a></li>
            
         
            <li><a href="milkcollection.html"><i class="fas fa-blog"></i>Milk Data Entry</a></li>
			<li><a href="colreport.php"><i class="fas fa-blog"></i>Milk Collection Report</a></li>

            <li><a href="index.html"><i class="fas fa-map-pin"></i>logout</a></li>
			
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        
        <div class="info">
         </div>
    </div>
</div>
<img src="cows.gif" class="cow">

</body>
</html> '; 
}

else
{ echo'<html>
<body>
</body>
</html>';}
?>


