<?php

?>
<html>
<head>
	 <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<body>
<div class="navbar">
<p style="margin-top: -45px; float:left;">
	<img src="../title.png" width="250px" height="20px"> </p>


<a class="ahover" href="http://localhost/Expirytracker/php/logout.php">Logout</a>	
<a class="ahover"  href="http://localhost/Expirytracker/category.php">Category</a>
	

<div class="dropdown">
    <a class="dropbtn">View  </a>
    <div style="margin-top: 55px;" class="dropdown-content">
		<a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/view/vexpirydate.php">Expirydate </a></br>
		<a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/view/vcategory.php">Category </a></br>
    
      <a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/view/vreminderdate.php">Reminder date</a></br>
	  <a style="text-align: left;  margin-top: 0px;"href="http://localhost/Expirytracker/view/vexpired.php">Expired</a></br>
		  <a style="text-align: left;  margin-top: 0px;"href="http://localhost/Expirytracker/view/vexpired_reminder.php">expired reminder</a></br>

    </div>
  </div> 
	<div class="dropdown">
    <a class="dropbtn">Search  </a>
    <div style="margin-top: 55px;" class="dropdown-content">
		<a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/search/sname.php">Name </a></br>
		<a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/search/scategory.php">Category </a></br>
    
      <a style="text-align: left; margin-top: 0px;" href="http://localhost/Expirytracker/search/sreminderdate.php">Reminderdate</a></br>
	  <a style="text-align: left;  margin-top: 0px;"href="http://localhost/Expirytracker/search/sexpirydate.php">Expirydate</a></br>
    </div>
  </div> 
<a class="ahover" href="http://localhost/Expirytracker/adddocuments.php">Add Documents</a>
<a class="ahover" href="http://localhost/Expirytracker/addproducts.php">Add Products</a>
</div>
	</body>
</html>
<?php?>