<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>


<?php

$day = $_POST["day"];
$result = null;

switch ($day) {
    case "1":
        $result = "It is Monday!";
        break;
    case "2":
        $result = "It is today!";
        break;
    case "3":
        $result = "It is Wednesday!";
        break;
	case "4":
        $result = "It is Thursday!";
        break;
    case "5":
        $result = "It is Friday!";
        break;
    case "6":
        $result = "It is Saturday!";
        break;
	case "7":
        $result = "It is Sunday!";
        break;
    default:
        $result = "Invalid number!";
}

?>

<body>

<!-- Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements. -->
 
<form action="index.php" method="post">

<input type="number" name="day" placeholder="Enter Number">
<input type="text" value="<?php echo $result;?>" placholder="result" readonly>
<input type="submit" value="submit">



</form>
     
</body>
</html>




