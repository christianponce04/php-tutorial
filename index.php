<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post Tutorial</title>
</head>
<body>

    <form action="index.php" method="GET">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="Log In">

    </form>
    
</body>
</html>


<?php 

echo   "{$_GET["username"]} ";
echo   $_GET["password"];

?>
