<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Condition</title>
</head>
<body>

<!-- exercise stop watch  stop timer if button is click-->

    <form action="index.php" method="post">
        <input type="submit" name="stop" value="STOP">
    </form>

</body>
</html>

<?php 

// $counter = 0;

// while($counter < 10){

//     $counter ++;
//     echo $counter . "</br>";
// }

$counter =10;
$timer = true;


while($timer){

    if(isset($_POST["stop"])){
        $timer == false;

    }
    else{
         $counter++;
        echo $counter . "</br>";
    }
}


?>