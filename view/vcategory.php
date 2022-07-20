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
	else{	
	$today=date('y:m:d');
	// add 3 days to date
	$thisdays=Date('y:m:t');
	$thisnextdays=Date('y:m:01', strtotime('+1 month'));
	$nextdays=Date('y:m:t', strtotime('+1 month ' ));	
	$followingdays=Date('y:m:d', strtotime('+40 years' ));	
	$username=$_SESSION["username"];
	    $pro1 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username' AND `pcategory` = 'Medicines'");
	    $pro2 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username' AND `pcategory` = 'Foods'");
		$pro3 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username' AND `pcategory` = 'Groceries'");
		$pro4 = mysqli_query($con,"SELECT `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`,  `rdetails`, `pdesc` FROM `products` WHERE `username` =  '$username' AND `pcategory` = 'Custom Product'");
		
	    $doc1 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username' AND `dcategory` ='Office Documents'");
        $doc2 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username' AND `dcategory` ='Educational'");
		$doc3 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username' AND `dcategory` ='Personal'");
		$doc4 = mysqli_query($con,"SELECT `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc` FROM `documents`  WHERE `username` =  '$username' AND `dcategory` ='custom Documents'"); 
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	$count4 = 0;
	$count5 = 0;
	$count6 = 0;
	$count7 = 0;
	$count8 = 0;

	$record1=array();
	$record2=array();
	$record3=array();
	$record4=array();
	$record5=array();
	$record6=array();
	$record7=array();
	$record8=array();
		
		 
		while( $row = mysqli_fetch_assoc($pro1))
		{
				$record1[]=$row;
				$count1++;
				
		}
		
		while( $row = mysqli_fetch_assoc($pro2))
		{
				$record2[]=$row;
				$count2++;
		}
		while( $row = mysqli_fetch_assoc($pro3))
		{
				$record3[]=$row;
				$count3++;
				
		}
	while( $row = mysqli_fetch_assoc($pro4))
		{
				$record4[]=$row;
				$count4++;
		}
			while( $row = mysqli_fetch_assoc($doc1))
		{
				$record5[]=$row;
				$count5++;
				
		}
			while( $row = mysqli_fetch_assoc($doc2))
		{
				$record6[]=$row;
				$count6++;
		}
		while( $row = mysqli_fetch_assoc($doc3))
		{
				$record7[]=$row;
				$count7++;
		}
		while( $row = mysqli_fetch_assoc($doc4))
		{
				$record8[]=$row;
				$count8++;
		}
		/*if(!isset($record1)){
			$record1[] =  array("pname"=>"_____","pcategory"=>"______","Quantity"=>"______","price"=>"________","pdate"=>"_______","pedate"=>"______","prdate"=>"______","pdesc"=>"_____");
			$count1++;
		}
		
		if(!isset($record2)){
			$record2[] =  array("dname"=>"_____","dcategory"=>"______","idate"=>"______","dedate"=>"______","drdate"=>"______","ddesc"=>"__________");
			$count1++;
		}
		
		if(!isset($record3)){
			$record3[] =  array("pname"=>"_____","pcategory"=>"______","Quantity"=>"______","price"=>"________","pdate"=>"_______","pedate"=>"______","prdate"=>"______","pdesc"=>"_____");
			$count2++;
		}
		
		if(!isset($record4)){
			$record4[] =  array("dname"=>"_____","dcategory"=>"______","idate"=>"______","dedate"=>"______","drdate"=>"______","ddesc"=>"_______");
			$count2++;
		}
	
		if(!isset($record5)){
			$record5[] =  array("pname"=>"_____","pcategory"=>"______","Quantity"=>"______","price"=>"________","pdate"=>"_______","pedate"=>"______","prdate"=>"______","pdesc"=>"_____");
			$count3++;
		}
	
		if(!isset($record6)){
			$record6[] =  array("dname"=>"_____","dcategory"=>"______","idate"=>"______","dedate"=>"______","drdate"=>"______","ddesc"=>"_______");
			$count3++;
		}*/
		mysqli_close($con);
			
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view reminder Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/style.css">

	</head>
<body>
<?php
include('../php/navbar.php');
?>
             
               <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title"> Medicines</h2>
             <hr>
			   </br>
			 </header>
             </div>
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
	

             <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Foods</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php
	
	foreach($record2 as $rec2){?>
	<div class="card2">	
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec2['prdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec2['pname'];  ?>
                </h2>
				<hr>
				
			</header>
			<div >
	 <p ><b> category  : </b><?Php echo $rec2['pcategory'];  ?></p>
    <p><b> Quantity  : </b><?Php echo $rec2['Quantity'];  ?></p>
    <p><b> price : </b><?Php echo $rec2['price'];  ?></p>
    <p><b> purchase Date : </b><?Php echo $rec2['pdate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec2['pedate'];  ?></p>
	<p><b>Retailer details : </b><?Php echo $rec2['rdetails'];  ?></p>
				<p><b>description about product : </b><?Php echo $rec2['pdesc'];  ?></p></br>
				
<a id="edit" class="clickme"   href = '../pedit.php?pname=<?Php echo $rec2['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec2['pcategory'];?>
				    &Quantity=<?Php echo $rec2['Quantity'];?>
				    &price=<?Php echo $rec2['price'];?>
				    &prdate=<?Php echo $rec2['prdate'];?>
				    &pdate=<?Php echo $rec2['pdate'];?>
				    &pedate=<?Php echo $rec2['pedate'];?>
				    &rdetails=<?Php echo $rec2['rdetails'];?>
				    &pdesc=<?Php echo $rec2['pdesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/delete.php?pname=<?Php echo $rec2['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec2['pcategory'];?>
				    &Quantity=<?Php echo $rec2['Quantity'];?>
				    &price=<?Php echo $rec2['price'];?>
				    &prdate=<?Php echo $rec2['prdate'];?>
				    &pdate=<?Php echo $rec2['pdate'];?>
				    &pedate=<?Php echo $rec2['pedate'];?>
				    &rdetails=<?Php echo $rec2['rdetails'];?>
				    &pdesc=<?Php echo $rec2['pdesc'];?>'><b>delete</b></a>
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

                <div class="container" style="margin-top: 50px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Groceries</h2>
             <hr>
			 <br
			 </header>
             </div>
             </div>
 <div class="card-container2">
	 	<?php
	foreach($record3 as $rec3){?>
	<div class="card2">	
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec3['prdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec3['pname'];  ?>
                </h2>
				<hr>
			</header>
			<div>
    <p><b> category  : </b><?Php echo $rec3['pcategory'];  ?></p>
    <p><b> Quantity  : </b><?Php echo $rec3['Quantity'];  ?></p>
    <p><b> price : </b><?Php echo $rec3['price'];  ?></p>
    <p><b> purchase Date : </b><?Php echo $rec3['pdate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec3['pedate'];  ?></p>
	<p><b>Retailer details : </b><?Php echo $rec3['rdetails'];  ?></p>
				<p><b>description about product : </b><?Php echo $rec3['pdesc'];  ?></p></br>
							
<a id="edit" class="clickme"  href = '../pedit.php?pname=<?Php echo $rec3['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec3['pcategory'];?>
				    &Quantity=<?Php echo $rec3['Quantity'];?>
				    &price=<?Php echo $rec3['price'];?>
				    &prdate=<?Php echo $rec3['prdate'];?>
				    &pdate=<?Php echo $rec3['pdate'];?>
				    &pedate=<?Php echo $rec3['pedate'];?>
				    &rdetails=<?Php echo $rec3['rdetails'];?>
				    &pdesc=<?Php echo $rec3['pdesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/delete.php?pname=<?Php echo $rec3['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec3['pcategory'];?>
				    &Quantity=<?Php echo $rec3['Quantity'];?>
				    &price=<?Php echo $rec3['price'];?>
				    &prdate=<?Php echo $rec3['prdate'];?>
				    &pdate=<?Php echo $rec3['pdate'];?>
				    &pedate=<?Php echo $rec3['pedate'];?>
				    &rdetails=<?Php echo $rec3['rdetails'];?>
				    &pdesc=<?Php echo $rec3['pdesc'];?>'><b>delete</b></a>
    </div>		
        </div>
	<?php }
		
 
		if($count3 < 8){
	
for($i=0;$i<(8-$count3);$i++){
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
      </br></br></br></br> </br></br></br></br></br></br>
    </div>
    </div>
	<?php }
	  }?>
</div> 


             <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Custom Product</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php
	
	foreach($record4 as $rec4){?>
	<div class="card2">	
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec4['prdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec4['pname'];  ?>
                </h2>
				<hr>
				
			</header>
			<div >
	 <p ><b> category  : </b><?Php echo $rec4['pcategory'];  ?></p>
    <p><b> Quantity  : </b><?Php echo $rec4['Quantity'];  ?></p>
    <p><b> price : </b><?Php echo $rec4['price'];  ?></p>
    <p><b> purchase Date : </b><?Php echo $rec4['pdate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec4['pedate'];  ?></p>
	<p><b>Retailer details : </b><?Php echo $rec4['rdetails'];  ?></p>
				<p><b>description about product : </b><?Php echo $rec4['pdesc'];  ?></p></br>
				
<a id="edit" class="clickme"   href = '../pedit.php?pname=<?Php echo $rec4['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec4['pcategory'];?>
				    &Quantity=<?Php echo $rec4['Quantity'];?>
				    &price=<?Php echo $rec4['price'];?>
				    &prdate=<?Php echo $rec4['prdate'];?>
				    &pdate=<?Php echo $rec4['pdate'];?>
				    &pedate=<?Php echo $rec4['pedate'];?>
				    &rdetails=<?Php echo $rec4['rdetails'];?>
				    &pdesc=<?Php echo $rec4['pdesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/delete.php?pname=<?Php echo $rec4['pname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &pcategory=<?Php echo $rec4['pcategory'];?>
				    &Quantity=<?Php echo $rec4['Quantity'];?>
				    &price=<?Php echo $rec4['price'];?>
				    &prdate=<?Php echo $rec4['prdate'];?>
				    &pdate=<?Php echo $rec4['pdate'];?>
				    &pedate=<?Php echo $rec4['pedate'];?>
				    &rdetails=<?Php echo $rec4['rdetails'];?>
				    &pdesc=<?Php echo $rec4['pdesc'];?>'><b>delete</b></a>
    </div>		
        </div>
	<?php }
	
		if($count4 < 8){
	
	for($i=0;$i<(8-$count4);$i++){
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


             <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Office Documents</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php

	foreach($record5 as $rec5){?>
	<div class="card2">
			
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec5['drdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec5['dname'];  ?>
                </h2>
				<hr>
			</header>

	<div style="padding-top:0";>
    <p><b> Category  : </b><?Php echo $rec5['dcategory'];  ?></p>
    <p><b> Issue Date : </b><?Php echo $rec5['idate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec5['dedate'];  ?></p>
		<p><b>Description about product : </b><?Php echo $rec5['ddesc'];  ?></p></br>
		  <a  id="edit" class="clickme"   href = '../dedit.php?dname=<?Php echo $rec5['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec5['dcategory'];?>
				    &idate=<?Php echo $rec5['idate'];?>
				    &dedate=<?Php echo $rec5['dedate'];?>
	                &drdate=<?Php echo $rec5['drdate'];?>
				    &ddesc=<?Php echo $rec5['ddesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/ddelete.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec5['dcategory'];?>
				    &idate=<?Php echo $rec5['idate'];?>
				    &dedate=<?Php echo $rec5['dedate'];?>
	                &drdate=<?Php echo $rec5['drdate'];?>
				    &ddesc=<?Php echo $rec5['ddesc'];?>'><b>delete</b></a>   
		
	</br>
	</br>
	</br>
	</br>
    </div>		
    </div>
	
	<?php }	
		
				if($count5 < 8){
	
	for($i=0;$i<(8-$count5);$i++){
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

		

             <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Educational</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php

	foreach($record6 as $rec6){?>
	<div class="card2">
			
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec6['drdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec6['dname'];  ?>
                </h2>
				<hr>
			</header>

	<div style="padding-top:0";>
    <p><b> Category  : </b><?Php echo $rec6['dcategory'];  ?></p>
    <p><b> Issue Date : </b><?Php echo $rec6['idate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec6['dedate'];  ?></p>
		<p><b>Description about product : </b><?Php echo $rec6['ddesc'];  ?></p></br>
		  <a  id="edit" class="clickme"   href = '../dedit.php?dname=<?Php echo $rec6['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec6['dcategory'];?>
				    &idate=<?Php echo $rec6['idate'];?>
				    &dedate=<?Php echo $rec6['dedate'];?>
	                &drdate=<?Php echo $rec6['drdate'];?>
				    &ddesc=<?Php echo $rec6['ddesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/ddelete.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec6['dcategory'];?>
				    &idate=<?Php echo $rec6['idate'];?>
				    &dedate=<?Php echo $rec6['dedate'];?>
	                &drdate=<?Php echo $rec6['drdate'];?>
				    &ddesc=<?Php echo $rec6['ddesc'];?>'><b>delete</b></a>   
		
	</br>
	</br>
	</br>
	</br>
    </div>		
    </div>
	
	<?php }	
		
				if($count6 < 8){
	
	for($i=0;$i<(8-$count6);$i++){
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


             <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Personal</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php

	foreach($record7 as $rec7){?>
	<div class="card2">
			
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec7['drdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec7['dname'];  ?>
                </h2>
				<hr>
			</header>

	<div style="padding-top:0";>
    <p><b> Category  : </b><?Php echo $rec7['dcategory'];  ?></p>
    <p><b> Issue Date : </b><?Php echo $rec7['idate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec7['dedate'];  ?></p>
		<p><b>Description about product : </b><?Php echo $rec7['ddesc'];  ?></p></br>
		  <a  id="edit" class="clickme"   href = '../dedit.php?dname=<?Php echo $rec7['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec7['dcategory'];?>
				    &idate=<?Php echo $rec7['idate'];?>
				    &dedate=<?Php echo $rec7['dedate'];?>
	                &drdate=<?Php echo $rec7['drdate'];?>
				    &ddesc=<?Php echo $rec7['ddesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/ddelete.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec7['dcategory'];?>
				    &idate=<?Php echo $rec7['idate'];?>
				    &dedate=<?Php echo $rec7['dedate'];?>
	                &drdate=<?Php echo $rec7['drdate'];?>
				    &ddesc=<?Php echo $rec7['ddesc'];?>'><b>delete</b></a>   
		
	</br>
	</br>
	</br>
	</br>
    </div>		
    </div>
	
	<?php }	
		
				if($count7 < 8){
	
	for($i=0;$i<(8-$count7);$i++){
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
       <div class="container" style="margin-top: 90px; width:50%">
             <div class="signup-content">
           <header >
             <h2 class="form-title">Custom Documents</h2>
             <hr>
			   </br>
			 </header>
             </div>
             </div>
<div class="card-container2">
		<?php

	foreach($record8 as $rec8){?>
	<div class="card2">
			
            <header class="article-header" style="margin:0;">
                <div>
                    <div class="category-title">
                        Reminder Date : 
                        <span class="date"><?Php echo $rec8['drdate'];  ?></span>
                    </div>
                </div>
                <h2 class="article-title">
                    <?Php echo $rec8['dname'];  ?>
                </h2>
				<hr>
			</header>

	<div style="padding-top:0";>
    <p><b> Category  : </b><?Php echo $rec8['dcategory'];  ?></p>
    <p><b> Issue Date : </b><?Php echo $rec8['idate'];  ?></p>
    <p><b> Expiry Date : </b><?Php echo $rec8['dedate'];  ?></p>
		<p><b>Description about product : </b><?Php echo $rec8['ddesc'];  ?></p></br>
		  <a  id="edit" class="clickme"   href = '../dedit.php?dname=<?Php echo $rec8['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec8['dcategory'];?>
				    &idate=<?Php echo $rec8['idate'];?>
				    &dedate=<?Php echo $rec8['dedate'];?>
	                &drdate=<?Php echo $rec8['drdate'];?>
				    &ddesc=<?Php echo $rec8['ddesc'];?>'><b>edit</b></a>
				<a  style="float: right" id="edit" class="clickme"   href = '../php/ddelete.php?dname=<?Php echo $rec2['dname'];?>
                    &username=<?php echo $_SESSION['username'];?>
				    &dcategory=<?Php echo $rec8['dcategory'];?>
				    &idate=<?Php echo $rec8['idate'];?>
				    &dedate=<?Php echo $rec8['dedate'];?>
	                &drdate=<?Php echo $rec8['drdate'];?>
				    &ddesc=<?Php echo $rec8['ddesc'];?>'><b>delete</b></a>   
		
	</br>
	</br>
	</br>
	</br>
    </div>		
    </div>
	
	<?php }	
		
				if($count8 < 8){
	
	for($i=0;$i<(8-$count8);$i++){
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
<a href="contact%20us.html" >Contact Us OR Feedback</a><br>
<p style="text-align: center;"> © all rights reserved by EXPIRY TRACKER</p><br>

</div>
 
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php }} ?>