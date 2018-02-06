<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="img/png" href="img/title_logo.png">
</head>
<body>
	<?php include 'helpers/format.php';?>
	<?php include 'config/config.php'; ?>
	<?php include 'libraries/Database.php'; ?>
	<?php include 'includes/header.php' ;?>

	<?php

    $db = new Database();

    $id = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id=".$id;

    $post = $db->select($query)->fetch_assoc();

    ?>
    <div class="middle_text" style="margin-top:-290px;">
 		<h1 class="h"><?php echo $post['title']; ?></h1>
 	</div>
    <center>
    <div style="width:66%;margin-top: 5%;">
	 	<div class="text_cont">
	 		<h1><?php echo $post['title']; ?></h1>
	 		<br>
	 		<h4><i>Posted by</i> <?php echo " : ".$post['author']; ?></h4>
		</div>
 		<br>
 		<hr><br>
 		<div class="text_cont">
 			<p><?php echo ($post['body']); ?></p>
 		</div>
 		<br><br>
 	<hr>
	</div>
	</center>

	<br><br>

<address  id="footer">&copy Dream Blog</address>	
</body>
</html>