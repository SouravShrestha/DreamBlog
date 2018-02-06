<!DOCTYPE html>
<html>
<head>
	<title>Dream Blog</title>
	<link rel="icon" type="img/png" href="img/title_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="color: white">
 	<?php include'includes/header.php' ;?>
 	<div class="middle_text" style="margin-top:-290px;">
 		<h1 class="h">Contact Us</h1>
 	</div>

 <center>
 <form action="contact.php" method="post">
 		<table width="60%" style="margin-top: 5%;border:none;" >
 			<tr style="outline: none;">
 			<td class="inc1">Name</td>
 			<td><input type="text" placeholder="Enter Full Name" class="inc" name="name" />
 			</td>
 			</tr>
 			<tr style="outline: none;">
 			<td class="inc1">Subject</td>
 			<td>
 			<textarea style="height: 150px;overflow-y: scroll;" class="inc" placeholder="Enter Subject Here" name="subject"></textarea>
 			</td>
 			</tr>
 			<tr style="outline: none;">
 			<td class="inc1" >Email id</font></td>
 			<td>
 			<input type="email" class="inc" placeholder="Enter Your Email Id" name="email" />
 			</td>
 			</tr>
 			<tr style="height: 25px;outline: none;"></tr>
  			<tr style="outline: none;">
 			<td colspan="2">
 			<center>
 				<input type="submit" style="width: 17%;height: 50px;" name="submit" />
 			</center>
 			</td>
 			</tr>
 		</font></table>
 </form>
 </center>

<address  id="footer">&copy Dream Blog</address>	
</body>
</html>