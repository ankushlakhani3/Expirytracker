<?php

	session_start();
if(!$_SESSION["username"])
	{
		header('location:index.html');
	}
	else{
?>

<!DOCTYPE html>
<html lang="en">
<head>  
	
   
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Document Page</title>
	
 <!-- jQuery JS Includes -->
 <script type="text/javascript" src="jquery/jquery-1.3.2.js"></script>
 <script type="text/javascript" src="jquery/ui/ui.core.js"></script>
 <script type="text/javascript" src="jquery/ui/ui.datepicker.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>


 <!-- jQuery CSS Includes -->
 <link type="text/css" href="jquery/themes/base/ui.core.css" rel="stylesheet" />
 <link type="text/css" href="jquery/themes/base/ui.datepicker.css" rel="stylesheet" />
 <link type="text/css" href="jquery/themes/base/ui.theme.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">




    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
$(function(){
  $('.datepicker').pickadate();
});

 </script>
</head>
	
<body>



<?php
	include('php/navbar.php');
	?>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container"style="margin-top:135px; margin-bottom:25px;">
                <div class="signup-content">
                    <form action="php/addd.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">ADD DOCUMENTS</h2>
                        <hr><div class="form-group"><p><b>Enter Name of document</b><b style="color:red;" > *</b></p>
                            <input type="text" class="form-input" name="name" id="name" style="background-color: #FFFFFF; padding: 12px;" placeholder="document Name" required/>
                        </div>
                        <div class="form-group"><p><b>Enter category of document</b><b style="color:red;" > *</b></p>
                            <select class="form-input" name="category" required>
								  <option value="">Select Category</option>
								  <option value="Office Documents">Office Documents</option>
								  <option value="Educational">Educational</option>
						          <option value="Personal">Personal</option>
								<option value="Custom Documents">Custom Documents</option>
							</select>
                        </div>

                        
                        <div class="form-group"><p><b>Enter issue Date</b></p>
                        <input type="date" class="form-input" name="idate" />
                        </div>
                       <div class="form-group"> <p><b>Enter expiry Date</b><b style="color:red;" > *</b></p>
                           <input type="date" class="form-input" name="dedate" required/>
                       </div>
                       <div class="form-group"> <p><b>set reminder</b><b style="color:red;" > *</b></p>
						  <input type="date" class="form-input" name="drdate" required/>
                  <!--        <input id="datepicker"  class="form-input"type="text" readonly="true" name="drdate" required/>-->
                       </div>
						
                        <div class="form-group"><p><b>Enter description about document</b></p>
                        <input type="text" class="form-input" name="ddescription" placeholder="Decription" Value="Empty"/>
                        </div>
                        
 
                        <div class="form-group" style="margin-bottom:20px;">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="ADD DOCUMENTS"/>
                        </div>
                    </form>



                </div>
            </div>
        </section>

    </div>
<div class="navbar2" >
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
<?php }?>