<?php 

session_start();


if(isset($_POST['submitBtn'])) {

	
	$firstName = $_POST['firstName'];

	
	$password = md5($_POST['password']);

	
	$_SESSION['firstName'] = $firstName;
	$_SESSION['password'] = $password;


	header('Location: index.php');
}

require_once('dbConfig.php'); 

require_once('functions.php'); 

if(isset($_POST['submitBtn'])) { 

	$title = $_POST['title']; 

	$description = $_POST['description']; 

	makeATask($conn, $title, $description); 

	header('Location: index.php');
}

session_start();
require_once('dbConfig.php');
require_once('functions.php');

if (isset($_POST['regBtn'])) {
	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	if(empty($username) || empty($password)) {
		echo '<script> 
		alert("The input field is empty!");
		window.location.href = "register.php";
		</script>';
	}
	
	else {

		if(addUser($conn, $username, $password)) {
			header('Location: index.php');
		}

		else {
			header('Location: register.php');
		}

	}
}

if (isset($_POST['loginBtn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) && empty($password)) {
		echo "<script>
		alert('Input fields are empty!');
		window.location.href='index.php'
		</script>";
	} 
	else {

		if(login($conn, $username, $password)) {
			header('Location: index.php');
		}

		else {
			header('Location: login.php');
		}
	}
	
}
?>
