<?php

	session_start();
	
if(!$_SESSION["username"])
	{
		header('location:../index.html');
	}
	else{
	$con = mysqli_connect("localhost","root","","demo");
	if(!$con)
	{
		die("Connt connet to Database");
	}
	else
	{	
		if(isset($_POST['btn']))
           {
			unset($pro1);
			 unset($doc1);
           $search=$_POST['search'];
		   $username=$_SESSION["username"];
		   $pro1 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username' AND `pname`= '$search' ");
	       $doc1 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username'");
		   }
		
		elseif(isset($_POST['btn2']))
           {
			unset($pro1);
			 unset($doc1);
           $search2=$_POST['search2'];
		   $username=$_SESSION["username"];
		   $pro1 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username'");
	       $doc1 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username'  AND `dname` = '$search2' ");
		   }
	  else
		{
            
	       $username=$_SESSION["username"];
	       $pro1 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username'");
	       $doc1 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username' ");
		}
		
	$count1 = 0;
		$count2 = 0;

	$record1=array();
	$record2=array();

		 
		while( $row = mysqli_fetch_assoc($pro1))
		{
				$record1[]=$row;
				$count1++;
				
		}
		
		while( $row = mysqli_fetch_assoc($doc1))
		{
				$record2[]=$row;
				$count2++;
		}

		
		mysqli_close($con);
			
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view  expired</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/style.css">
<style type="text/css">
	
	.form-titles{
		text-align: left;
	}
	</style>
	</head>
<body>
<?php
include('../php/navbar.php');
?>
	    
              <div class="container" style="margin-top: 90px; width:700px;">
             <div   style="margin-bottom: 72px;"class="signup-content">
           <header >
             <h2 class="form-title">Search for product</h2>
             <hr>
			   </br>
			 </header>
             </div>
	
	<form style="margin-left: 190px;" method="POST" action="sname.php" autocomplete="off">

<div class="search">
<input class="inputs" type="text" name="search" placeholder="Enter name of product" required>
<button  type="submit" class="buttons" name="btn"><i  class="fa fa-search"></i></button>
</div>
</form>
         
             </div>
<div class="card-container2">
	<?php
			foreach($record1 as $rec1){?>
	<div class="card2">	
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec1['prdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec1['pname'];  ?>
                </h2>
				<hr>
			</header>
			<div>
    <p><b> Category  : </b><?Php echo $rec1['pcategory'];?></p>
    <p><b> Quantity  : </b><?Php echo $rec1['Quantity'];?></p>
    <p><b> Price : </b><?Php echo $rec1['price'];?></p>
    <p><b> Purchase Date : </b><?Php echo $rec1['pdate'];?></p>
    <p><b> Expiry Date : </b><?Php echo $rec1['pedate'];?></p>
	<p><b>Retailer details : </b><?Php echo $rec1['rdetails'];?></p>
				<p><b>Description about product : </b><?Php echo $rec1['pdesc'];?></p></br>
				
<a id="edit" class="clickme"  href = '../pedit.php?pname=<?Php echo $rec1['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec1['pcategory'];?>
				    &Quantity=<?Php echo $rec1['Quantity'];?>
				    &price=<?Php echo $rec1['price'];?>
				    &prdate=<?Php echo $rec1['prdate'];?>
				    &pdate=<?Php echo $rec1['pdate'];?>
				    &pedate=<?Php echo $rec1['pedate'];?>
				    &rdetails=<?Php echo $rec1['rdetails'];?>
				    &pdesc=<?Php echo $rec1['pdesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/delete.php?pname=<?Php echo $rec1['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec1['pcategory'];?>
				    &Quantity=<?Php echo $rec1['Quantity'];?>
				    &price=<?Php echo $rec1['price'];?>
				    &prdate=<?Php echo $rec1['prdate'];?>
				    &pdate=<?Php echo $rec1['pdate'];?>
				    &pedate=<?Php echo $rec1['pedate'];?>
				    &rdetails=<?Php echo $rec1['rdetails'];?>
				    &pdesc=<?Php echo $rec1['pdesc'];?>'><b>delete</b></a>
    </div>		
        </div>

	<?php }	 
		if($count1 < 8){
	for($i=0;$i<(8-$count1);$i++){
	?>
	<div class="card2">
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                     
                        <span class="date"></span>
                    </div>
                </div>
                <h2 class="article-title">
                     empty
					 
                </h2>
				</br>
				<hr>
			</header>
	<div >
    <p><b> empty </b></p>
      </br></br></br></br> </br></br> </br></br></br></br>
    </div>
    </div>
	<?php }
		}?>
	</div>
	 


              <div class="container" style="margin-top: 90px; width:700px;">
             <div   style="margin-bottom: 72px;"class="signup-content">
           <header >
             <h2 class="form-title">Search for document</h2>
             <hr>
			   </br>
				 
			 </header>
				  
             </div>
								   
<form  style="margin-left: 190px;"  method="POST" action="sname.php" autocomplete="off">

<div class="search">
<input class="inputs" type="text" name="search2" placeholder="Enter name of document" required>
<button  type="submit" class="buttons" name="btn2"><i  class="fa fa-search"></i></button>
</div>
</form>
             </div>
<div class="card-container2">
	
	<?php }
		
	foreach($record2 as $rec2){?>
	<div class="card2">
			
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec2['drdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec2['dname'];  ?>
                </h2>
				<hr>
			</header>

			<div>
    <p><b> Category  : </b><?Php echo $rec2['dcategory'];  ?></p>
    <p><b> Issue Date : </b><?Php echo $rec2['idate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec2['dedate'];  ?></p>
				<p><b>Description about product : </b><?Php echo $rec2['ddesc'];  ?></p></br>
      <a  id="edit" class="clickme"    href = '../dedit.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec2['dcategory'];?>
				    &idate=<?Php echo $rec2['idate'];?>
				    &dedate=<?Php echo $rec2['dedate'];?>
	                &drdate=<?Php echo $rec2['drdate'];?>
		 &ddesc=<?Php echo $rec2['ddesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/ddelete.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec2['dcategory'];?>
				    &idate=<?Php echo $rec2['idate'];?>
				    &dedate=<?Php echo $rec2['dedate'];?>
	                &drdate=<?Php echo $rec2['drdate'];?>
				    &ddesc=<?Php echo $rec2['ddesc'];?>'><b>delete</b></a>    
				
	</br>
	</br>
	 </br>
	 </br>
	</div>		
    </div>
	
	<?php }	 
		if($count2 < 8){
	
	for($i=0;$i<(8-$count2);$i++){
	?>
	<div class="card2">
            <header class="article-header" style="margin:0;">
                <div>
                   <div class="category-title">
                     
                        <span class="date"></span>
                    </div>
                </div>
                <h2 class="article-title">
                     empty
					 
                </h2>
				</br>
				<hr>
			</header>
	<div >
    <p><b> empty </b></p>
      </br></br></br></br></br></br> </br></br></br></br>
    </div>
    </div>
	<?php }
	  }?>
</div> 



  <div class="navbar2" style="margin-top:50px;" >
<p style="text-align: center; margin-bottom: 0pt;"> We hope all your requirements will fullfil with expiry tracker, you can contact us by using below link.</p> 

<a href="https://www.facebook.com/" class="fa fa-facebook"></a> 
<a href="https://twitter.com" class="fa fa-twitter"></a> 
<a href="https://wa.me/" class="fa fa-whatsapp"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="https://in.pinterest.com" class="fa fa-pinterest"></a>
<p style="clear: left; margin-top: 0pt;"></p> <hr>
<a href="../contact%20us.html" >Contact Us OR Feedback</a><br>
<p style="text-align: center;"> © all rights reserved by EXPIRY TRACKER</p><br>

</div>
 
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php } ?>