
<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = "webdairy";
$a=array();
$conn = mysqli_connect($server,$user,$pass,$dbname);
$sql = "select date,sum(quantity) from milk_data_entry GROUP BY date ";

$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

$i=0;

while($row=mysqli_fetch_array($result))
{
     echo'<html>
<body>  
<style type="text/css">
body{
    margin: 0;
    padding: 0;
    color:#fff
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.avatar{
    width: 400px;
    height: 500px;
    position: absolute;
    top: 30%;
    left:35%;
}
.avatar1{
    width: 70px;
    height: 70px;
    border-radius: 70%;
    position: absolute;
    top: 60px;
    left: 49%;
}
.avat2{
    width: 40px;
    height: 40px;
    border-radius: 900%;
    position: absolute;
    top: 40px;
    left: 74.3%;
}

#title {
  color: blue;
  position: absolute;
  top: 25%;
  left: 52%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 30px;
   font-family:Brush Script MT;
}
#title1 {
  color: blue;
  position: absolute;
  top: 7%;
  left: 53%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 15px;
  font-family:verdana;
  
}
#title2 {
  color: red;
  position: absolute;
  top: 22%;
  left: 52%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 8px;
  font-family:verdana;
}
#title3 {
  color: white;
  position: absolute;
  top: 25%;
  left: 75%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 15px;
  font-family:verdana;
}
#title4 {
  color: white;
  position: absolute;
  top: 35%;
  left: 75%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
font-size: 15px;
  font-family:verdana;
}
#title5 {
  color: white;
  position: absolute;
  top: 45%;
  left: 75%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
font-size: 15px;
  font-family:verdana;
}
#title6 {
  color: white;
  position: absolute;
  top: 55%;
  left: 75%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
font-size: 15px;
  font-family:verdana;
}
#title7 {
  color: white;
  position: absolute;
  top: 65%;
  left: 75%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
font-size: 15px;
  font-family:verdana;
}
.login-box{
    width:198%;
    height: 420px;
    background:black;
    colo r: red  ;
    top: 150%;
    left: 1%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 70px;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-family:verdana;
  font-color:white;
  font-size:15px;

}
@media (max-width:620px)
{
.login-box,.box,table,#t1{
width:auto;
}
}
table{
 
    top: 60%;
    left: 50%;
	text-align:left;
    position: absolute;
	width: 300;
	font-family:verdana;
	  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
#t1{
  color: blue;
  position: absolute;
  top:-278%;
  left: 55%;
  	  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);

}
th{
	background-color:gray;
	color:red;
}
td{
	background-color:pink;
	color:blue;
}
td:hover{
	background-color:red;
}
.img{
top:20%;
left:20%;
left:20%;
position:absolute;
}
.id{
  position: absolute;
  top: 24%;
  left: 47%;
}

</style>
<head>

<img src="images.jpg" class="avatar1">

<div id="title1">Dairy Management System</div>
<div id="title2">MILK FULL OF LOVE</div>
<img src="blue.gif" class="img">
<table border=1 top=100% left=50% ><tr>
<th width=100>Date</th>

<th width=100>Quantity</th>

</tr>

<div class="login-box">
<div id="title3"><a href="admin.php">Home</a></div>
<div id="title4"><a href="index.html">Contact Us</a></div>
<div id="title5"><a href="about.html">About Us</a></div>
<div id="title6"><a href="customerlog.html">Customer</a></div>
<div id="title7"><a href="adminlog.html">Admin</a></div>
<img src="download.png" class="avat2"/>';
array_push($a,(array($row[0],$row[1])));
$n=count($a);

for($i=0;$i<$n;$i++)
{
	
	
	echo "<tr>";
	
	echo"<td>" .$a[$i][0]."</td>";
	echo"<td>" .$a[$i][1].  " lit.</td>";

    echo"</tr>";
	
}

echo '</table>
</head>

</body>

</html>';
}

?>