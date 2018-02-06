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
        <h1 style="color: white;">Admin</h1>
    </div>
 	<?php include 'helpers/format.php';?>
 	<?php include 'config/config.php'; ?>
	<?php include 'libraries/Database.php'; ?>

 	<?php
    $db = new Database();

    $query = "SELECT * FROM posts";

    $posts = $db->select($query);

    $x=0;
	?>

<center>
	<caption><a href="adminpost.php">Click Here To Insert New Data</a></caption>
 	<table border="1" width="80%" style="text-align:center;border-top: none;">
 		<tr class="tr1">
 			<th>Post ID</th>
 			<th>Post Name</th>
 			<th>Author</th>
 			<th>Date</th>
 		</tr>
 		<?php if($posts) : ?>
    		<?php while($row = $posts->fetch_assoc()) : ?>
    			<tr>
    			<td><?php echo ($row['id']); ?></td>
    			<td><a href="adminedit.php?id=<?php echo $row['id']; ?>"><?php echo ($row['title']); ?></a></td>
    			<td><?php echo ($row['author']); ?></td>
    			<td><?php echo ($row['date']); ?></td>
    			</tr>
    		<?php endwhile ; ?>
    	<?php endif ;?>
 	</table>

	<address  id="footer">&copy Dream Blog</address>	
</center>

</body>
</html>