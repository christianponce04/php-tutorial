
<?php 

    $first_num = $_POST["first_num"];
    $sec_num = $_POST["second_num"];

    function add($a,$b){ return $result  = $a + $b ; }
    function subtract($a,$b){ return $result  = $a - $b ; }
    function multiply($a,$b){ return $result  = $a * $b ; }
    function division($a,$b){ return $result  = $a / $b ; }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>

    <form action="index.php" method="post">

        <input type="number" name="first_num" id="" placeholder="Enter First number">
        <input type="number" name="second_num" id="" placeholder="Enter Second number">
        <input type="number" name="result" id="" readonly value ="<?php echo add($first_num,$sec_num) ?>" >
        <input type="submit" value="Submit">

    </form>
    
</body>
</html>


