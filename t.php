<?php
// Server credentials 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdairy";
 
// Creating mysql connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Checking mysql connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// Writing a mysql query to retrieve data 
$sql = "SELECT name,ph_no FROM milk_order";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>
	
	<style>
	p{

    color:red;
	top:50%;
	left:60%;
   
}	
<table width="500" cellpadding=5celspacing=5 border=1>
<tr>
<th>Name</th>
<th>Phone</th>
</tr>
</style>
	<!-- USING HTML HERE : Here I am using php within html tags -->
	<tr>
	<td>Name : <?php echo $row["name"]; ?> </td>
	<td> ph_no: <?php echo $row["ph_no"]; ?> </td>
    </tr>
</table>	 
<?php
  }
} else {
  echo "0 results";
}
 
// Closing mysql connection
$conn->close();
?>













