<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form action="logincheck.php" method="POST">
		<h2>Login</h2>

		<?php if(isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']?></p>
		<?php } ?>

		<label>Email Address</label>
		<input type="email" name="email"  placeholder="Email Address.."><br>

		<label>Password</label>
		<input type="password" name="password"  placeholder="password.."><br>

		<button type="submit">Login</button>
	</form>
</body>
</html>