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
                    $dname= $_GET['dname'];
                    $username= $_SESSION['username'];
				    $dcategory= $_GET['dcategory'];
				    $idate= $_GET['idate'];
				    $dedate= $_GET['dedate'];
	                $drdate= $_GET['drdate'];
				    $ddesc= $_GET['ddesc'];

		
		
		$deletequery=" DELETE FROM documents WHERE dname='$dname' AND dcategory='$dcategory'  AND idate='$idate' AND dedate='$dedate' AND drdate='$drdate'  AND ddesc='$ddesc'";
		
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