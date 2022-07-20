	<?php

	session_start();
if(!$_SESSION["username"])
	{
		header('location:index.html');
	}
	else{
		
	$con = mysqli_connect("localhost","root","","demo");
	if(!$con)
	{
		die("Connot connet to Database :" . mysqli_connect_errno());
	}
	else
	{	
    $username=$_GET['username'];
    $pname=$_GET['pname'];
    $pcategory=$_GET['pcategory'];
	$Quantity=$_GET['Quantity'];
	$price=$_GET['price'];
    $prdate=$_GET['prdate']; 
	$pdate=$_GET['pdate'];
	$pedate=$_GET['pedate'];
	$rdetails=$_GET['rdetails'];
	$pdesc=$_GET['pdesc'];		
	$username=$_SESSION["username"];

		
		
		$deletequery=" DELETE FROM products WHERE pname='$pname' AND pcategory='$pcategory' AND Quantity ='$Quantity' AND price='$price' AND pdate='$pdate' AND pedate='$pedate' AND prdate='$prdate' AND rdetails='$rdetails' AND pdesc='$pdesc'";
		if(!mysqli_query($con, $deletequery))
		{
			echo "<b> Server is down try after sometimes... </b>";
		}
		else
		{
			
			include("loader.php");
			header('refresh: 3; url=http://localhost/Expirytracker/view/vexpirydate.php');
		}
		mysqli_close($con);
	}
	
	}
	
	?>