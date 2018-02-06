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
	<br><br>
	<img src="img/avatar.png" style="height: 200px;">
	<br><br>
	<form method="post">
		<table style="border: none;">
			<tr style="height: 15px;outline: none;"></tr>
			<tr>
				<td><input type="email" name="emailin" placeholder="Enter Email" required></td>
			</tr>
			<tr>
				<td><input type="password" name="passin" placeholder="Enter Password" required></td>
			</tr>
			<tr style="height: 15px;outline: none;"></tr>
			<tr>
				<td><input type="submit" name="submit" value="Log In" style="background-color: lightblue;border:none;"></a></td>
			</tr>
		</table>
	</form>
</div>
</center>

<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>

<?php
	session_start();
	$db = new Database();
	if (isset($_POST['submit'])){
		$username = $_POST['emailin'];
		$password = $_POST['passin'];
		$query = "SELECT * FROM `users` WHERE email='$username' and password='$password'";
		$result = $db->select($query);
		if ($result){
			$_SESSION['username'] = $username;
		}else{
			$fmsg = "Invalid Login Credentials.";
		}
	}
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		echo $username;
		echo "<a href='logout.php'>Logout</a>";
	}else{
		echo "<center><div>Invalid Email Id Or Password</div></center>";
	}
?>
<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
	<?php if(session_status() == PHP_SESSION_ACTIVE) : ?>
		var x = <?php echo $username; ?>;
		echo "Hi";
    	document.getElementById("navlogi").innerHTML = x;
    <?php endif; ?>
}
</script>

</body>
</html>