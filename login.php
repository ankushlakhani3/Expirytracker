<?php
session_start();
if(!isset($_SESSION["username"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar">
<a style="margin-top: -45px; float:left;" href="index.html">
	<img src="title.png" width="250px" height="20px"> </a>
  <a class="ahover" href="singup.html">Singup</a>
<a class="ahover" href="login.php">Login</a>
</div>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin-top:115px; margin-bottom:25px;">
                <div class="signup-content">
                    <form action="php/Verify.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">LOG IN EXPIRY TRACKER</h2>
                       <hr> <div class="form-group">
                            <input type="text" class="form-input" name="uname" id="uname" placeholder="Username" required/>
                        </div>
                      
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       don't  Have  an account ? <a href="singup.html" class="loginhere-link">sing up here</a>
					   <br>
					  <a href="php/passwordreset.php" class="loginhere-link"> Forgot Password</a>
                    </p>
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
<?php
}else{
	header("location: addproducts.php");
}
?>
