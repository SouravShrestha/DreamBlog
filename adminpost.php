<!DOCTYPE html>
<html>
<head>
	<title>Dream Blog</title>
	<link rel="icon" type="img/png" href="img/title_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 	<?php include'includes/header.php' ;?>
 	<div class="middle_text" style="margin-top:-260px;">
 		<h1 style="color: white;">Add Content</h1>
 	</div>
 	<?php include 'helpers/format.php';?>
 	<?php include 'config/config.php'; ?>
	<?php include 'libraries/Database.php'; ?>

 	<?php

    $db = new Database();

    if(isset($_POST['submit'])) {
			$title1 = addslashes($_POST['title']);
			$body1 = addslashes($_POST['body']);
			$author1 = addslashes($_POST['author']);
			$qry= "INSERT INTO `posts` (`id`, `title`, `body`, `author`, `date`) VALUES (NULL, '$title2', '$body2', '$author2', CURRENT_TIMESTAMP )";
			$db->insert($qry);
		}
	?>

 	<center>
 		<form method="POST" action="adminpost.php">
 		<table style="width:85%;margin-top: 50px;border:none;" cellspacing="10px" cellpadding="5px">
 			<tr><td>Title</td></tr>
 			<tr></tr>
 			<tr><td><input type="text" name="title" class="inta" required></td></tr>
 			<tr></tr>
  			<tr></tr>
 			<tr><td>Body</td></tr>
 			<tr><td><textarea name="body" class="inta" style="height: 150px;overflow-y: scroll;" required></textarea></td></tr>
 			<tr></tr>
  			<tr></tr>
 			<tr><td>Author</td></tr>
 			<tr><td><input type="text" name="author" class="inta" required></td></tr>
 		</table>
 		<br><br>
 		<input type="submit" name="submit" value="Submit" style="height: 50px;width: 100px;">
 		</form>
 	</center>

<address  id="footer">&copy Dream Blog</address>	
</body>
</html>