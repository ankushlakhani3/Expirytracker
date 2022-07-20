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
    <title>Add Product Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
	include('php/navbar.php');
	?>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin-top:135px; margin-bottom:25px;">
                <div class="signup-content">
					
					
                    <form action="php/addp.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">ADD PRODUCTS</h2>
						<hr> <div class="form-group"><p><b>Enter Name of product</b><b style="color:red;" > *</b></p>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Product Name" required/>
                        </div>
                        <div class="form-group"><p><b>Enter category of product</b><b style="color:red;" > *</b></p>
							<select class="form-input" name="category" required>
								  <option value="">Select Category</option>
								  <option value="Medicines">Medicines</option>
								  <option value="Foods">Foods</option>
								  <option value="Groceries">Groceries</option>
								  <option value="Custom Product">Custom Product</option>
							</select>
                        </div>
                        <div class="form-group"><p><b>Enter Quantity of product</b></p>
                        <input type="text" class="form-input" name="quality"  placeholder=" Quantity"/>
                        </div>
                        <div class="form-group"><p><b>Enter price of product</b></p>
                        <input type="text" class="form-input" name="price"  placeholder="Price"/>
                        </div>
                        <div class="form-group"><p><b>Enter purchase Date</b></p>
                        <input type="date" class="form-input" name="pdate" />
                        </div>
                       <div class="form-group"> <p><b>Enter Expiry Date</b><b style="color:red;" > *</b></p>
                           <input type="date" class="form-input" name="pedate" required/>
                       </div>
                       <div class="form-group"> <p><b>set reminder</b><b style="color:red;" > *</b></p>
                           <input type="date" class="form-input" name="prdate" required/>
                       </div>
						
						 <div class="form-group"><p><b>Retailer details</b></p>
                        <input type="text" class="form-input" name="rdetails" placeholder="Retailer details"/>
                        </div>
						
                        <div class="form-group"><p><b>Enter description about product</b></p>
                        <input type="text" class="form-input" name="pdescription" placeholder="Dscription" />
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="ADD PRODUCT"/>
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
<?php } ?>