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
	<?php include'includes/header.php' ;?>
 	<div class="middle_text" style="margin-top:-290px;">
 		<h1 class="h">All Posts</h1>
 		<br>
 		<div style="display: none;"><h3 class="h">Welcome <?php echo $login_session; ?> <a href="" style="color: white;">Log Out</a> </h3></div>
 	</div>

	<center>
	<table style="width: 80%;text-align: center;height: auto;margin-top: 40px;border-top: none;" border="1">
		<tr class="tr1">
			<th>Title</th>
			<th>Author</th>
			<th>Date</th>
		</tr>
	<?php
    	$db = new Database();
    	$query = "SELECT * FROM posts ORDER BY `title` ";
	    $posts = $db->select($query);
	    $x=0;
	?>
	<?php if($posts) : ?>
        <?php while($row = $posts->fetch_assoc()) : ?>
        	<tr>
				<td>
					<a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
				</td>
				<td>
					<?php echo $row['author']; ?>
				</td>
				<td>
					<?php echo $row['date']; ?>
				</td>
			</tr>
		<?php endwhile; ?>
		<?php else : ?>
    			There Are No Posts Yet
	<?php endif; ?>
	</table>
	</center>
<address  id="footer">&copy Dream Blog</address>	
</body>
</html>