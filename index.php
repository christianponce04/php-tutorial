<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    
</body>
</html>

<?php 

    setcookie("fav_food","chicken", time() + (86400 * 2), "/");
    setcookie("fav_snacks","chocolate", time() + (86400 * 3), "/");
    setcookie("fav_place","cebu", time() + (86400 * 4), "/");


     foreach($_COOKIE as $key => $value){
         echo "{$key} = {$value} <br>";
     }

    if(isset($_COOKIE["fav_food"])){
        echo"your favorite food is {$_COOKIE["fav_snacks"]} !!";
    }
    else{
        echo"i dont know your favorite food";
    }
?>