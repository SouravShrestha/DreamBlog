<!DOCTYPE html>
<html>
<head>
	<title>Dream Blog</title>
	<link rel="icon" type="img/png" href="img/title_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="color: white" bgcolor="#FFFAFA">
 	<?php include'includes/header.php' ;?>
 	<?php include 'helpers/format.php';?>
 	<?php include 'config/config.php'; ?>
	<?php include 'libraries/Database.php'; ?>
 	<div class="middle_text" style="margin-top:-260px;">
 		<h1 style="color: white;">Dream Big</h1><h4 class="h">Every great dream begins with a dreamer</h4>
 	</div>

 	<?php
    $db = new Database();
    $query = "SELECT * FROM posts";
    $posts = $db->select($query);
    $x=0;
	?>

<?php if($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) : ?>
    <center>
	 	<div class="content_home" >
	 		<div class="text_cont">
	 			<h1 style="font-family: 'Lora', 'Times New Roman', serif;"><?php echo $row['title']; ?></h1>
	 		</div>
	 		<br>
	 		<hr><br>
	 		<div class="text_cont">
	 			<p><?php echo short($row['body']); ?></p>
	 		</div>
	 		<div class="text_cont" >
	 			<p><a href="post.php?id=<?php echo $row['id']; ?>">Read More</a></p>
	 		</div><br>
	 		<hr>
	 		<div class="text_cont">
	 			<p><i>Posted By </i><?php echo $row['author']; ?></p>
	 		</div>
	 	</div>
	 </center>

	<?php endwhile; ?>

	<?php else : ?>
	    <p> There Are No Posts Yet </p>
<?php endif; ?>

<address  id="footer">&copy Dream Blog</address>	

</body>
</html>