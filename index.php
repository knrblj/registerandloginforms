<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form action="registercheck.php" method="POST">
		<h2>Login</h2>

		<?php if(isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']?></p>
		<?php } ?>

		<label>Email Address</label>
		<input type="email" name="email"  placeholder="Email Address.."><br>

		<label>Name</label>
		<input type="text" name="name"  placeholder="Enter Name..."><br>

		<label>Password</label>
		<input type="password" name="password"  placeholder="Password.."><br>

		<label>Confirm Password</label>
		<input type="password" name="cpassword"  placeholder="Confrim password.."><br>

		<button type="submit">Register</button>
	</form>
</body>
</html>