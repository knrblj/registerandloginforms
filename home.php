<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['name']))
{?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<center>
		<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
		<a href="logout.php">Logout</a>
	</center>
</body>
</html>


<?php 
}else
{
	header("location:login.php");
	exit();
}
?>