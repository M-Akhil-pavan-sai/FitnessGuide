<?php 
 session_start();
	
$Username=$_COOKIE['U'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT EmailId, Password, Name,BMI FROM logindetails where EmailId='$Username'";
$result = $conn->query($sql);
$x="";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	$x=$row["BMI"];
  	$x=$x. ",". $_COOKIE['BMIVALUE'];
  	echo "Successfully stored to<br/>";
    echo "id: " . $row["EmailId"]. " - Name: " . " " . $row["Name"]. "<br>";
  }
} else {
  echo "0 results";
}
$sql = "update logindetails set BMI='$x' where EmailId='$Username'";
$result = $conn->query($sql);
$conn->close();
?>