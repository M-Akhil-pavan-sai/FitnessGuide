<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="loginpage";
	$conn=new mysqli($servername,$username,$password,$database_name);
	if(!$conn)
		{
			die("Connection failed " .mysqli_connect_error());
		}
	if(isset($_POST['submit']))
	{
		$Name=$_POST['name'];
		$email = $_POST['username'];
		$password = $_POST['password'];
		$sql_query = "INSERT INTO logindetails (EmailId,Password,Name) VALUES ('$email','$password','$Name')";
		if(mysqli_query($conn,$sql_query))
		{
			echo "Login Details Entered successfully!";
		}
		else
		{
			echo "Error:"."".mysqli_error($conn);
		}
	}
	mysqli_close($conn);
?>