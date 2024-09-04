<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises 4 BMI</title>
</head>


<?php

    $weight = $_POST["weight"];
    $height = $_POST["height"];
    
    
    $result = $weight / ($height/100)**2;
    $result = round($result,2);

    if($result >= 30){
        echo "Weight is{$result}  and you're obese";
    }
    else if($result >=25 && $result <=29.9){
        echo "weight is  {$result} and you're overweight ";
    }
    else if($result >=18.5 && $result <= 24.9){
        echo "weight is {$result}  and you're normal";
    }
    else{
        echo "weight is {$result} and you're underweight";
    }

?>
<body>

 <!-- Write a BMI Calculator -->

    <form action="index.php" method="post">
    <input type="number" name="height" id="" placeholder="Enter Height in CM" value="<?php echo $height ?>" >
    <input type="number" name="weight" id="" placeholder="Enter Weight in KG" value="<?php echo $weight ?>" >
    <input type="text" name="" id="" readonly placholder="result" value="<?php echo $result ?>">
    <input type="submit" value="Submit">

    </form>

</body>
</html>




