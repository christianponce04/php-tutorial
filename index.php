<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Get and Post Tutorial</title>

</head>
<body>

    <!-- <form action="index.php" method="POST">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="Log In">

    </form> -->

    <!-- //exercise  -->

    <h2>Order Pizza <span>Price $39</span></h2>
    <form action="index.php" method="post">
        <input type="text" name="quantity" placeholder="Quantity">  
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>


<?php 

    // echo "{$_GET["username"]} </br> " ;
    // echo   $_GET["password"];

    // echo "{$_POST["username"]} </br> ";
    // echo  $_POST["password"];

    $price = 39;
    $quantity = $_POST["quantity"];

    $total = $price * $quantity;

    echo "Total price for the pizza you ordered is: \${$total}";


?>
