<?php
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	die("Can not connect to database");
}
else
{
	$queryp = mysqli_query($con,"select * from products where prdate = current_date");
	$queryd = mysqli_query($con,"select * from documents where drdate = current_date");
	$result1=array();
	$result2=array();
	$count=0;
	while($row = mysqli_fetch_assoc($queryp))
	{
		$result1[]=$row;
	}
	while($row = mysqli_fetch_assoc($queryd))
	{
		$result2[]=$row;
	}
	
	if (empty($result1))
	{
    	echo "their is no product having todays reminder date.</br>";
	}
	else
	{
		foreach($result1 as $rec1)
		{	
			$count++;
			$username1= $rec1['username'];
			$querymail1 = mysqli_query($con,"select email from users left join products on(users.username=products.username) where users.username = '$username1'");
			$row1 = mysqli_fetch_row($querymail1);
			$to_email1 = $row1[0];
			$subject1 = "Alert your product going to expire";
			$body1='
			<div color="#FFFFFF">Hey <b>'.$rec1['username'].',
				</b></br><p style="text-align: justify; text-justify: inter-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You got this mail from expiry tracker because your added product is going to expire. That product name is <b>'.$rec1['pname'].'</b> and its expiry date is <b>'.$rec1['pedate'].'</b> so teck required action for it. More information about the product is mentioned below, so check out the details in this mail.</p>
				
		    <table   style="table-layout:fixed; width: 500px; word-wrap: break-word;" border="1";>
           <tr>
				<th   style="width: 40%;">Attribute</th>
				<th   style="width: 60%;"><b> Value</b></th>			
		    </tr>
		         
            <tr>
				<td >Product Name :</td>
				<td style="word-wrap: break-word;"><b> '.$rec1['pname'].'</b></td>			
		    </tr>
				
		    <tr>	
		        <td>Category :</td><td>
				<b>'.$rec1['pcategory'].' </b></br></td> 				
			</tr>
			
			<tr> 
			    <td>Expiry date :</td>
				<td><b>'.$rec1['pedate'].'</b></td>
			</tr>
			
			<tr>
				<td>Purchase date :</td>
				<td><b>'.$rec1['pdate'].'</b></br></td>
			</tr>
			
			<tr> 
                <td>price :</td>
				<td><b>'.$rec1['price'].'</b></br></td>				
			</tr>
			
			<tr>
				<td>Quntity :</td>
				<td><b>'.$rec1['Quantity'].'</b></br></td>				
			</tr>
			
			<tr>
				<td>Description :</td>
				<td style="word-wrap: break-word;"><b>'.$rec1['pdesc'].'</b></td>
			</tr>
		    </table>
				
				 <p style="text-align: justify; text-justify: inter-word;">If you have an quiry than you can contact us by <b><a href="../contact%20us.html">clicking here</a></b> and we are ansure you that  we will solve your problem.</p>
				 
				 Thank you,<br>
				 <b>Expiry Tracker</b>
				<footer> © all rights reserved by Expiry tracker</footer>
				</div> ';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From: expiry tracker <notify.expirytracker@gmail.com>" . "\r\n" .'Reply-To: notify.expirytracker@gmail.com' . "\r\n" .'X-Mailer: PHP/';  
			if(mail($to_email1, $subject1, $body1, $headers))
			{
				echo"mail sended to <b>".$to_email1.".</b> </br>";
			}
			else
			{
				echo"thier is product having today's reminder date, but failed to send mail. </br>";
			}
		}
	}
	
    if (empty($result2))
	{
		echo "their is no document having today's reminder date. </br>";
	}
	else
	{	
		foreach($result2 as $rec2)
		{
			$count++;
			$username2= $rec2['username'];
			$querymail2 = mysqli_query($con,"select email from users left join documents on(users.username=documents.username) where users.username = '$username2'");
			$row2 = mysqli_fetch_row($querymail2);
			$to_email2 = $row2[0];
			$subject2 = "Alert your document going to expire";
			$body2 = '
			<div color="#FFFFFF">Hey <b>'.$rec2['username'].',
				</b></br><p style="text-align: justify; text-justify: inter-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You got this mail from expiry tracker because your added document is going to expire. That document name is <b>'.$rec2['dname'].'</b> and its expiry date is <b>'.$rec2['dedate'].'</b> so teck required action for it. More information about the document is mentioned below, so check out the details in this mail.</p>
				
		    <table   style="table-layout:fixed; width: 500px; word-wrap: break-word;" border="1";>
           <tr>
				<th   style="width: 40%;">Attribute</th>
				<th   style="width: 60%;"><b> Value</b></th>			
		    </tr>
		         
            <tr>
				<td >document Name :</td>
				<td style="word-wrap: break-word;"><b> '.$rec2['dname'].'</b></td>			
		    </tr>
				
		    <tr>	
		        <td>Category :</td><td>
				<b>'.$rec2['dcategory'].' </b></br></td> 				
			</tr>
			
			<tr> 
			    <td>Expiry date :</td>
				<td><b>'.$rec2['dedate'].'</b></td>
			</tr>
			
			<tr>
				<td>Issue date :</td>
				<td><b>'.$rec2['idate'].'</b></br></td>
			</tr>
			
			<tr>
				<td>Description :</td>
				<td style="word-wrap: break-word;"><b>'.$rec2['ddesc'].'</b></td>
			</tr>
		    </table>
				
				 <p style="text-align: justify; text-justify: inter-word;">If you have an quiry than you can contact us by <b><a href="../contact%20us.html">clicking here</a></b> and we are ansure you that  we will solve your problem.</p>
				  
				 Thank you,<br>
				 <b>Expiry Tracker</b>
				<footer> © all rights reserved by Expiry tracker</footer>
				</div> ';
			 $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 $headers .= "From: expiry tracker <notify.expirytracker@gmail.com>" . "\r\n" .'Reply-To: notify.expirytracker@gmail.com' . "\r\n" .'X-Mailer: PHP/'; 
		
			if(mail($to_email2, $subject2, $body2, $headers))
			{
				echo"mail sended to <b>".$to_email2."</b> </br>";
			}
			else
			{
				echo"thier is document having today's reminder date, but failed to send mail </br>";
			}
		}
	}
	echo "Total <b>".$count."</b> alert trigger and <b>".$count."</b> mail sended </br>";
	mysqli_close($con);
}
?>