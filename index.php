<?php  
require_once('dbConfig.php');
require_once('functions.php');
?>

<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LogIn</title>    
</head>
<body>
	<h1 style="text-align: center;">Welcome! <?php echo $_SESSION['username'];?> to The Greatest Online Market!!!!</h1>
	<h1 style="text-align: center;">Pick your Order and Enjoy! :)</h1>

    <ul style="display: table; margin: 0 auto;">
        <li>Fishball - 30 PHP</li>
        <li>Kikiam - 40 PHP</li>
        <li>Corndog - 50 PHP</li>
    </ul>

    <form action="part-2.php" method="post" style="text-align: center;">
        <label for="order">Choose your order:</label>
        <select name="order_name" id="order_name">
            <option value="Kikiam" name="Kikiam" id="Kikiam">Kikiam</option>
            <option value="Fishball" name="Fishball" id="Fishball">Fishball</option>
            <option value="Corndog" name="Corndog" id="Corndog">Corndog</option>
        </select><br>

        <label for="quantity">Quantiy: </label>
        <input type="number" name="number_order" style="margin: 10px;"><br>
        <label for="cash">Cash: </label>
        <input type="number" name="order_cash" style="margin: 10px;"><br  >
        <input type="submit" name="submit">

    </form>
	
	<a href="logout.php"><p style="text-align: center;">Logout</p></a>
</body>
</html>