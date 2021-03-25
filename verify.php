<?php
session_start();
 $con=mysqli_connect("localhost","root","","loginpage");
 if(!$con)
 {
	 die("connection failed :".mysqli_connect_error());
 }
 if(isset($_POST['submit']))
 {
	 $Username=$_POST['username'];
	 $Password=$_POST['password'];
	 $q="select * from logindetails  where EmailId='$Username' && Password='$Password' ";
	 $result=mysqli_query($con,$q);
	 $num=mysqli_num_rows($result);
	 if($num==1){
	 	setcookie("U",$Username,time()+(60*60*24*7*30),"/","","",true);
		header('location:HomePage.php');
	 }
	 else{
		header('location:index.php');
	 }
 }
 ?>