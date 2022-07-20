<?php
	$username=$_POST["uname"];
	$password=$_POST["password"];

	$query = " Select * from users where username = '$username' and password= '$password'" ;

	$con = mysqli_connect("localhost","root","","demo");
	
	if(!$con)
	{
		die("Connt connet to Database");
	}
	else
	{	
	
		if($result = mysqli_query($con, $query))
		{	
			
			if(mysqli_num_rows($result) > 0)
			{	
				
				
				while($row = mysqli_fetch_array($result)){
					include('loader.php');
					session_start();
					$_SESSION['username']=$username;
					
					header('refresh: 3; url=../addproducts.php');
					
				}
			}
			else
			{
				
				include('invalidloader.php');	
				header('refresh: 3; url=../login.php');
			
			}
		}
		else{
		  mysqli_close($con);;
		}
	}
		

?>