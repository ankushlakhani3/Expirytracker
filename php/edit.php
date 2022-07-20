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
				
	$username=$_SESSION["username"];
	$pnameold=$_POST["pnameold"];
	$pname=$_POST["pname"];
    $pcategory=$_POST["pcategory"];
	$Quantity=$_POST["Quantity"];
	$price=$_POST["price"];
    $prdate=$_POST["prdate"]; 
	$pdate=$_POST["pdate"];
	$pedate=$_POST["pedate"];
	$rdetails=$_POST["rdetails"];
	$pdesc=$_POST["pdesc"];
		
		
		$editquery=" UPDATE products SET pname='$pname', pcategory='$pcategory',Quantity ='$Quantity', price='$price',pdate='$pdate', pedate='$pedate', prdate='$prdate', rdetails='$rdetails', pdesc='$pdesc' WHERE
		username= '$username' AND pname='$pnameold'  AND pdate='$pdate' ";
		
		if(!mysqli_query($con, $editquery))
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