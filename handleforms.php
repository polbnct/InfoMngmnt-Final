<?php  
require_once('dbConfig.php'); 

require_once('functions.php'); 

if(isset($_POST['submitBtn'])) { 

	$title = $_POST['title']; 

	$description = $_POST['description']; 

	makeATask($conn, $title, $description); 
}
?>
<?php  
require_once('dbConfig.php'); 

require_once('functions.php'); 

if(isset($_POST['submitBtn'])) { 

	$title = $_POST['title']; 

	$description = $_POST['title']; 

	makeATask($conn, $title, $description); 

	
	header('Location: index.php');
}
?>