
<?php


$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = "webdairy";

$conn = mysqli_connect($server,$user,$pass,$dbname);
$sql = "SELECT * FROM milk_order" ;
$result = mysqli_query($conn, $sql);
$a=array();
while($row=mysqli_fetch_array($result))
{
      
 echo 
 '<html>
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
tr{
	overflow-y:auto;
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
    top: 16%;
    left: 49%;
}
.vid{
	top:50%;
	left:60%;
	 position: absolute;
}
.avat2{
    width: 40px;
    height: 40px;
    border-radius: 800%;
    position: absolute;
    top: 25px;
    left: 87%;
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
  top: 14%;
  left: 53%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
  font-size: 15px;
  
}
#title2 {
  color: red;
  position: absolute;
  top: 29%;
  left: 52%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 8px;
  font-family:Arial Unicode MS;
}
input {
  color: white;
  position: absolute;
  top: 110px;
  left: 94%;
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
#
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
    width: 2500px;
    height: 40px;
    background:gray;
    colo r: red  ;
    top: 1%;
    left: 1%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 70px;
}
table{
 
    top: 40%;
    left: 15%;
    position: absolute;
	width: 800;
  
}
#t1{
  color: blue;
  position: absolute;
  top:-135%;
  left: 56%;

}
th{
	background-color:white;
	color:red;
}
td{
	background-color:white;
	color:black;
	text-align:center;
	font-family:verdana;
}
a{
	color:red;
}

</style>
<head>

<img src="images.jpg" class="avatar1">

<div id="title1">Dairy Management System</div>
<div id="title2">MILK FULL OF LOVE</div>

<IMG SRC="animated-cow-image-0104.gif" class="vid">
<table>
<div class="login-box">

<a href="admin.php">HOME</></div>
<img src="download.png" class="avat2"/>

</div>
';
	
array_push($a,(array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7])));
$n=count($a);
for($i=0;$i<$n;$i++)
{
	echo"<tr>";
	echo "<spane><tr><td><b>Order Id: </b>".$i."</td></tr>";
	echo "<spane><tr><td><b>--------------</b><td></tr></spane>";
	echo"<spane><tr><td><b>  Name :  </b>".$a[$i][0]."</td></tr>";
	echo"<spane><tr><td><b>  Phone No. : </b>" .$a[$i][1]."</td></tr>";
	echo"<spane><tr><td width=500><b>Address : </b>" .$a[$i][2]."</td></tr>";
	echo"<spane><tr><td><b>Milk : </b>" .$a[$i][3]."</td></tr>";
	echo"<spane><tr><td><b>Quantity : </b>" .$a[$i][4]."</td></tr>";
	echo"<spane><tr><td><b>Amount per lit. : </b>" .$a[$i][5]."</td></tr>";
	echo"<spane><tr><td><b>Discount : </b>" .$a[$i][6]."</td></tr>";
	echo"<spane><tr><td><b>Total Amount : </b> Rs." .$a[$i][7]."</td></tr>";
    echo"<spane><tr><td></td></tr>";
	echo"<spane><tr><td></td></tr>";
	echo"<spane><tr><td></td></tr>";
	echo"<spane><tr><td></td></tr>";
	echo"<spane><tr><td>_____________________________________________</td></tr>";
	echo"</tr>";
   

		
	
	
	
}

echo '
</table>
</head>

</body>

</html>';
}

?>