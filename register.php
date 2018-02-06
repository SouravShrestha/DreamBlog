<!DOCTYPE html>
<html>
<head>
	<title>Dream Blog</title>
	<link rel="icon" type="img/png" href="img/title_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="color: white">
 	<?php include'includes/nav.php' ;?>
 	<?php include 'helpers/format.php';?>

 <style type="text/css">
 	body{
 		background:url('img/header.jpg') no-repeat center center fixed;
 	}
 </style>

<center>
<div id="card">
	<br>
	<img src="img/avatar.png" style="height: 200px;">
	<br><br>
	<form action="" method="post">
		<table style="border: none;">
			<tr>
				<td><input type="text" name="nameup" placeholder="Enter Your Name" required></td>
			</tr>
			<tr>
				<td><input type="email" name="emailup" placeholder="Enter Email" required></td>
			</tr>
			<tr>
				<td><input type="password" name="passup" placeholder="Enter Password" required autocomplete="false"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Sign Up" style="background-color: lightblue;border:none;"></a></td>
			</tr>
		</table>
	</form>
</div>
</center>

<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>

<?php

    $db = new Database();

    if(isset($_POST['submit'])) {
			$nameup = addslashes($_POST['nameup']);
			$emailup = addslashes($_POST['emailup']);
			$passup = addslashes($_POST['passup']);
			$qry= "INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES (NULL, '$nameup', '$passup', '$emailup')";
			$db->insert1($qry);
		}
?>
</body>
</html>