<?php
    $selected = $_POST["order_name"];
    $quantity = $_POST["number_order"];
    $cash = $_POST["order_cash"];
    $value = null;
    $total_payment = null;
    $total = null;

    switch ($selected){
        case "Fishball":
            $value = 30;
            break;
        case "Kikiam":
            $value = 40;
            break;
        case "Corndog":
            $value = 50;
            break;  
        default:
            break;

    }

    $total_payment = ($quantity * $value);
    $total = ($cash - $total_payment);

    if(empty($quantity) || empty($cash)) {
        '<script> 
		alert("The input field is empty!");
		window.location.href = "register.php";
		</script>';
    } else {
        ;
    }

    if ($total >= 0) {
        echo nl2br("Your Total Payment is: " . $total_payment . "\n" ); 
        echo nl2br("Your Change is: " . $total . "\n");
        echo "Thank you for Ordering!";
    } else {
        echo ("Please Input Enough Cash to Proceed!");
    }
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="index.php">
        <button type="button">Go Back</button>
        </a>
    </body>
    </html>