<?php?>
<!DOCTYPEHTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password reset</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar">
<a style="margin-top: -45px; float:left;" href="index.html">
	<img src="../title.png" width="250px" height="20px"> </a>
  <a href="../singup.html">Singup</a>
<a href="../login.php">Login</a>
</div>
	
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin-top:115px; margin-bottom:25px;">
                <div class="signup-content">
                    <form action="passreset.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">ENTER REGISTERED EMAIL ADRESS</h2>
                       <hr>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email adress" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Send"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       don't  Have  an account ? <a href="../singup.html" class="loginhere-link">sing up here</a> OR
					   <br>
					  <a href="../login.php" class="loginhere-link">login here</a>
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
<?php?>