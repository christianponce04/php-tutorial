
<?php 

    $first_num = $_POST["first_num"];
    $sec_num = $_POST["second_num"];

    $result= $_POST["result"];

    $operator= $_POST["operator"];

    switch($operator){
        
        case $operator == 'Add':
        
            $result = add($first_num,$sec_num);
            break;
        
        case $operator == 'Subtract':
        
            $result = subtract($first_num,$sec_num);
                break;

         case $operator == 'Multiply':
        
            $result = multiply($first_num,$sec_num);
           break;


           case $operator == 'Division':
        
            $result = division($first_num,$sec_num);
              break;

          default:
        echo "invalid input";
        break;
        
    }

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

        <input type="number" name="first_num" id="" placeholder="Enter First number" value="<?php echo $first_num ?>" >
        <input type="number" name="second_num" id="" placeholder="Enter Second number" value="<?php echo $sec_num ?>">
        <input type="number" name="result" id="" readonly  value="<?php echo $result ?>">

        <input type="submit" value="Add" name="operator">
        <input type="submit" value="Subtract" name="operator">
        <input type="submit" value="Multiply" name="operator">
        <input type="submit" value="Division" name="operator">

    </form>
    
</body>
</html>


