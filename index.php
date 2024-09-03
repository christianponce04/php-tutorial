<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>

<!-- Write a simple calculator program in PHP using switch case  -->

    <form action="index.php" method="post" >

        <input type="number" name="first_num" id="" placeholder= "Enter First Number:">
        <input type="number" name="second_num" id="" placeholder= "Enter Second Number:">

        <input type="submit" value="Add" name="operation">
        <input type="submit" value="Subtract" name="operation">
        <input type="submit" value="Multiplication" name="operation">
        <input type="submit" value="Division" name="operation">
        <input type="submit" value="modulo" name="operation"> </br>

        <input type="text" value="<?php echo $result; ?>"> </br>

        
	  </form>

</body>
</html>

<?php

$first_num = $_POST["first_num"];
$second_num = $_POST["second_num"];
$operation = $_POST["operation"];
$result = null;


switch($operation){

    case "Add":

        $result = $first_num + $second_num;
        echo $result;
        break;

    case "Subtract":
        $result = $first_num - $second_num;
        echo $result;
        break;

     case "Multiplication":
            $result = $first_num * $second_num;
            echo $result;
            break;

     case "Division":
            $result = $first_num / $second_num;
            echo $result;
            break;

     case "modulo":
            $result = $first_num % $second_num;
            echo $result;
            break;

        default:
        echo "Please select operations";
        break;

}
?>