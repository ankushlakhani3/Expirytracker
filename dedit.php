<?php



$con = mysqli_connect("localhost","root","","demo");
	if(!$con)
	{
		die("Connot connet to Database :" . mysqli_connect_errno());
	}
                     $dname= $_GET['dname'];
                    $username= $_GET['username'];
				    $dcategory= $_GET['dcategory'];
				    $idate= $_GET['idate'];
				    $dedate= $_GET['dedate'];
	                $drdate= $_GET['drdate'];
				    $ddesc= $_GET['ddesc'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Document Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="php/fonts/material-icon/css/material-design-iconic-font.min.css">

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
            <div class="container"style="margin-top:135px; margin-bottom:25px;">
                <div class="signup-content">
                    <form action="php/edit2.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">ADD DOCUMENTS</h2>
                        <hr><div class="form-group"><p><b>Enter Name of document</b><b style="color:red;" > *</b></p>
                            <input type="text" value=" <?php echo "$dname"?>" class="form-input" name="dname" id="name" style="background-color: #FFFFFF; padding: 12px;" placeholder="document Name" required/>
                        </div> 
							<input type="hidden" value="<?php echo "$dname" ?>"  name="dnameold" id="dnameold" d/>
                        <div class="form-group"><p><b>Enter category of document</b><b style="color:red;" > *</b></p>
                            <select class="form-input" name="dcategory" required>
								  <option value="<?php echo "$dcategory"?>"><?php echo "$dcategory"?></option>
								  <option value="Office Documents">Office Documents</option>
								  <option value="Educational">Educational</option>
						          <option value="Personal">Personal</option>
								<option value="Custom Documents">Custom Documents</option>
							</select>
                        </div>

                        
                        <div class="form-group"><p><b>Enter issue Date</b></p>
                        <input type="text" onfocus="(this,type='date')" onblur="(this,type='tex')"  value="<?php echo "$idate"?>" placeholder="<?php echo "$idate"?>"class="form-input" name="idate" />
                        </div>
                       <div class="form-group"> <p><b>Enter Due Date</b><b style="color:red;" > *</b></p>
                           <input type="text" onfocus="(this,type='date')" onblur="(this,type='tex')"  value="<?php echo "$dedate"?>" placeholder="<?php echo "$dedate"?>"  class="form-input" name="dedate" required/>
                       </div>
                       <div class="form-group"> <p><b>set reminder</b><b style="color:red;" > *</b></p>
                           <input type="text" onfocus="(this,type='date')" onblur="(this,type='tex')"  value="<?php echo "$drdate"?>" placeholder="<?php echo "$drdate"?>"  class="form-input" name="drdate" required/>
                       </div>
                        <div class="form-group"><p><b>Enter description about document</b></p>
                        <input type="text" value=" <?php echo "$ddesc"?>" class="form-input" name="ddesc" placeholder="Decription" Value="Empty"/>
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
<a href="php/contact us.html" >Contact Us OR Feedback</a><br>
<p style="text-align: center;"> © all rights reserved by EXPIRY TRACKER</p><br>

</div>
    <!-- JS -->
    <script src="php/vendor/jquery/jquery.min.js"></script>
    <script src="php/js/main.js"></script>
</body>
</html>
