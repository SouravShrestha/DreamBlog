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
 		<h1 style="color: white;">Edit Post</h1>
 	</div>
 	<?php include 'helpers/format.php';?>
 	<?php include 'config/config.php'; ?>
	<?php include 'libraries/Database.php'; ?>

 	<?php
    $db = new Database();

    $id = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id=".$id;

    $posts = $db->select($query)->fetch_assoc();;

    $x=0;
	?>

	<?php if(isset($_POST['submit'])) {
    		$id = $_GET['id'];
			$title1 = addslashes($_POST['title']);
			$body1 = addslashes($_POST['body']);
			$author1 = addslashes($_POST['author']);
			$qry="UPDATE `posts` SET `title`='$title1',`body`='$body1',`author`='$author1' WHERE `id`='$id' ";
			$db->update($qry);
		}
	?>

	<?php if(isset($_POST['delete'])) {
			$qry="DELETE FROM `posts` WHERE `id`='$id' ";
			$db->update($qry);
		}
	?>

 	<center>
 		<form method="post" action="adminedit.php?id=<?php echo $posts['id']; ?>">
 		<table style="width:85%;margin-top: 50px;border:none;" cellspacing="10px" cellpadding="5px">
 			<tr><td class="cus">Title</td></tr>
 			<tr></tr>
 			<tr><td><input type="text" name="title" class="inta" value="<?php echo ($posts['title']); ?>" required></td></tr>
 			<tr></tr>
  			<tr></tr>
 			<tr><td class="cus">Body</td></tr>
 			<tr><td><textarea name="body" class="inta" style="height: 150px;overflow-y: scroll;" required><?php echo ($posts['body']); ?></textarea></td></tr>
 			<tr></tr>
  			<tr></tr>
 			<tr><td class="cus">Author</td></tr>
 			<tr><td><input type="text" name="author" class="inta" value="<?php echo ($posts['author']); ?>" required></td></tr>
 		</table>
 		<br><br>
 		<input type="submit" name="submit" value="Submit" style="height: 50px;width: 100px;background-color: lightgreen;border-color:lightgreen;">
 		<input type="submit" name="delete" value="Delete" style="height: 50px;width: 100px;background-color: #BA002B;border-color:#BA002B; ">
 		</form>
 	</center>

<address  id="footer">&copy Dream Big</address>	
</body>
</html>