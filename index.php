<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Condition</title>
</head>
<body>

    <form action="index.php" method="post">

    <input type="text" name="age" id="" placeholder="Enter Age">
    <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php 

    $age = $_POST["age"];

    if($age>=18){
        echo "allowed to come in, age is {$age}";
    }
    else if($age <=0){
        echo "invalid input";
    }
    else{
        echo "Not Allowed still minor, age is {$age}";
    }
   


?>