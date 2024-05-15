<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p style="text-align: center;">Login here</p>
	<form action="handleForm.php" method="POST">
		<div class="fields" style="text-align: center;">
			<p><input type="text" placeholder="Input Username" class="fields" name="username"></p>
			<p><input type="password" placeholder="Input Password" class="fields" name="password"></p>
			<p><input type="submit" value="login" id="loginBtn" name="loginBtn"></p>
		</div>
	</form>
	<a href="register.php"><p style="text-align: center;">Register</p></a>
</body>
</html>