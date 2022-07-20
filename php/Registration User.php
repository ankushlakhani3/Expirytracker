
<?php
	$email=$_POST["email"];
	$username=$_POST["uname"];
	$password=$_POST["passwd"];

	$insertquery="INSERT INTO `users`(`email`, `username`, `password`) VALUES ('$email','$username','$password')";

	$con = mysqli_connect("localhost","root","","demo");
	if(!$con)
	{
		die("Connot connet to Database :" . mysqli_connect_errno());
	}
	else
	{	
		if(!mysqli_query($con,$insertquery))
		{
			echo "<b> Already Registered email id or username </b>";
		}
		else
		{
			header('location:../login.php');
		}
		mysqli_close($con);
	}
?>