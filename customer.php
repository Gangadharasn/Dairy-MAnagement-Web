
<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = "webdairy";
$a=array();
$conn = mysqli_connect($server,$user,$pass,$dbname);
$sql = "SELECT * FROM customer WHERE id = '$username' AND password='$password'";
$sql1 = "SELECT * FROM milk_data_entry WHERE c_id = '$username'";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$i=0;

while($row1=mysqli_fetch_array($result1))
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
 
    top: 40%;
    left: 50%;
	text-align:left;
    position: absolute;
	width: 900;
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
	background-color:white;
	color:red;
}
td{
	background-color:white;
	color:blue;
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
<table border=5 top=100% left=50% cellpadding=\ "5\" cellspacing=\"0\" style=\"border-collapse:collapse\" width=\"100&#37;\" id=\"AutoNumber2\"><tr>
<th width=100>Date</th>
<th width=100>Time</th>
<th width=100>Shift</th>
<th width=100>Milk</th>
<th width=100>Fat</th>
<th width=100>Quantity</th>
<th width=100>Amount per lit</th>
<th width=100>Total Amount</th>
</tr>

<div class="login-box">
<div id="title3"><a href="index.html">Home</a></div>
<div id="title4"><a href="index.html">Contact Us</a></div>
<div id="title5"><a href="index.html">About Us</a></div>
<div id="title6"><a href="customerlog.html">Customer</a></div>
<div id="title7"><a href="adminlog.html">Admin</a></div>
<img src="download.png" class="avat2"/>';
array_push($a,(array($row1[0],$row1[1],$row1[2],$row1[3],$row1[4],$row1[5],$row1[6],$row1[7],$row1[8],$row1[9])));
$n=count($a);

for($i=0;$i<$n;$i++)
{
	
	
	echo "<tr>";
	
	echo"<td>" .$a[$i][2]."</td>";
	echo"<td>" .$a[$i][3]."</td>";
	echo"<td>" .$a[$i][4]."</td>";
	echo"<td>" .$a[$i][5]."</td>";
	echo"<td>" .$a[$i][6]."</td>";
	echo"<td>" .$a[$i][7]."</td>";
	echo"<td>" .$a[$i][8]."</td>";
	echo"<td><b>Rs.</b>" .$a[$i][9]."</td>";
    echo"</tr>";
	
}
echo "<b class='id'> Customer Id:".$row1[0]."</b>";
echo '</table>
</head>

</body>

</html>';
}

?>