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
		die("Connt connet to Database");
	}
	else{

	$username=$_SESSION["username"];
		
	$pro1 = mysqli_query($con,"SELECT pname FROM `products` WHERE `username` =  '$username' and `prdate` > 'Current_Date' and pcategory = 'Medicines'");
	$pro2 = mysqli_query($con,"SELECT pname FROM `products` WHERE `username` =  '$username' and `prdate` > 'Current_Date' and pcategory = 'Foods'");
	$pro3 = mysqli_query($con,"SELECT pname FROM `products` WHERE `username` =  '$username' and `prdate` > 'Current_Date' and pcategory = 'Groceries'");
	$pro4 = mysqli_query($con,"SELECT pname FROM `products` WHERE `username` =  '$username' and `prdate` > 'Current_Date' and pcategory = 'Custom Product'");
	$doc1 = mysqli_query($con,"SELECT dname FROM `documents` WHERE `username` =  '$username' and `drdate` > 'Current_Date' and dcategory = 'Office Documents'");
	$doc2 = mysqli_query($con,"SELECT dname FROM `documents` WHERE `username` =  '$username' and `drdate` > 'Current_Date' and dcategory = 'Educational'");
	$doc3 = mysqli_query($con,"SELECT dname FROM `documents` WHERE `username` =  '$username' and `drdate` > 'Current_Date' and dcategory = 'Personal'");
	$doc4 = mysqli_query($con,"SELECT dname FROM `documents` WHERE `username` =  '$username' and `drdate` > 'Current_Date' and dcategory = 'Custom Documents'");	
				
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
	include('php/navbar.php');
	?>
 <div class="card-container" style=" margin-left:21.5%";>
  <div class="card">
    <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>Medicines</b></h3>
    <div class="bar"  >
      <div class="emptybar"></div>
		<div class="filledbar"></div>
		<?php
			 $record1=array();
		while( $row = mysqli_fetch_assoc($pro1))
		{
				$record1[]=$row;
				
				
		}
		if (empty($record1))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record1 as $rec1)
		{	?>
<p><?php echo ucfirst($rec1['pname']); ?> </p>
	
		<?php	}} ?>

		 
	 
 </div>
  </div>
  <div class="card">
  
    <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>Foods</b></h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
	  <?php
		 $record2=array();
		while( $row2 = mysqli_fetch_assoc($pro2))
		{
				$record2[]=$row2;
				
				
		}
			if (empty($record2))
		{
		?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record2 as $rec2)
		{	?>
	<p><?php echo ucfirst($rec2['pname']); ?> </p>
	
		<?php	}} ?>
		
    </div>
  </div>
  
     <div class="card">
      <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>groceries</b></h3>
    <div class="bar"  >
      <div class="emptybar"></div>
		<div class="filledbar"></div>
		<?php
			 $record3=array();
		while( $row3 = mysqli_fetch_assoc($pro3))
		{
				$record3[]=$row3;
				
				
		}
		if (empty($record3))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record3 as $rec3)
		{	?>
	<p><?php echo ucfirst($rec3['pname']); ?> </p>
	
		<?php	}} ?>

		
	 
 </div>
  </div>
  <div class="card">
    <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>custom product</b></h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
	  <?php
		 $record4=array();
		while( $row4 = mysqli_fetch_assoc($pro4))
		{
				$record4[]=$row4;
				
				
		}
			if (empty($record4))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record4 as $rec4)
		{	?>
<p><?php echo ucfirst($rec4['pname']); ?> </p>
	
		<?php	}} ?>
		
    </div>
  </div>
   </div>
    
	
	 <div class="card-container" style=" margin-left:21.5%";>
  <div class="card">
      <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>office document</b></h3>
    <div class="bar"  >
      <div class="emptybar"></div>
		<div class="filledbar"></div>
		<?php
			 $record5=array();
		while( $row5 = mysqli_fetch_assoc($doc1))
		{
				$record5[]=$row5;
				
				
		}
		if (empty($record5))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record5 as $rec5)
		{	?>
	<p><?php echo ucfirst($rec5['dname']); ?> </p>
	
		<?php	}} ?>

		
	 
 </div>
  </div>
  <div class="card">
      <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>educational</b></h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
	  <?php
		 $record6=array();
		while( $row6 = mysqli_fetch_assoc($doc2))
		{
				$record6[]=$row6;
				
				
		}
			if (empty($record6))
		{
		?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record6 as $rec6)
		{	?>
	<p><?php echo ucfirst($rec6['dname']); ?> </p>
	
		<?php	}} ?>
		
    </div>
  </div>
  
     <div class="card">
      <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>personal document</b></h3>
    <div class="bar"  >
      <div class="emptybar"></div>
		<div class="filledbar"></div>
		<?php
			 $record7=array();
		while( $row7 = mysqli_fetch_assoc($doc3))
		{
				$record7[]=$row7;
				
				
		}
		if (empty($record7))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record7 as $rec7)
		{	?>
	<p><?php echo ucfirst($rec7['dname']); ?> </p>
	
		<?php	}} ?>

		
	 
 </div>
  </div>
  <div class="card">
     <h3 class="title1" style="font-size:15px; text-transform:uppercase; font-weight:900;"><b>custom document</b></h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
	  <?php
		 $record8=array();
		while( $row8 = mysqli_fetch_assoc($doc4))
		{
				$record8[]=$row8;
				
				
		}
			if (empty($record8))
		{
			?><b><p>empty</b></p><?php
		}
		else
		{
		foreach($record8 as $rec8)
		{	?>
	<p><?php echo ucfirst($rec8['dname']); ?> </p>
	
		<?php	}} ?>
		
    </div>
  </div>
   </div>
    
	
<div class="navbar2" >
<p style="text-align: center; margin-bottom: 0pt;"> We hope all your requirements will fullfil with expiry tracker, you can contact us by using below link.</p> 

<a href="https://www.facebook.com/" class="fa fa-facebook"></a> 
<a href="https://twitter.com" class="fa fa-twitter"></a> 
<a href="https://wa.me/917359359602" class="fa fa-whatsapp"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="https://in.pinterest.com" class="fa fa-pinterest"></a>
<p style="clear: left; margin-top: 0pt;"></p> <hr>
<a href="contact%20us.html" >Contact Us OR Feedback</a><br>
<p style="text-align: center;"> © all rights reserved by EXPIRY TRACKER</p><br>

</div>
 
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>	
	<?php }} ?>