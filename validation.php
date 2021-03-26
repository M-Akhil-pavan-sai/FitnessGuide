<?php
 session_start();
 $con=mysqli_connect("localhost","root","","loginpage");
 if(!$con)
 {
	 die("connection failed :".mysqli_connect_error());
 }
 if(isset($_POST['submit']))
 {
	 $Name=$_POST['name'];
	 $Username=$_POST['username'];
	 $Password=$_POST['password'];
	 $q="select * from logindetails  where EmailId='$Username' ";
	 $result=mysqli_query($con,$q);
	 $num=mysqli_num_rows($result);
	 if($num==1){
		 echo "Duplicate Data";
		 echo "<br>";
		 echo "Username Has already Entered!";
	 }
	 else{
		 $qy="insert into logindetails (EmailId,Password,Name) values ('$Username','$Password','$Name')";
		 echo "Successfully entered details";
		 mysqli_query($con,$qy);
	 }
 }
 ?>