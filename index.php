<?php 

echo 'PHP VARIABLES <br>';
//string
$name = 'Christian';

//integer
$age = 25;

//float
$price = 5.99;

//boolean
$status = true;

//array
$cars =["BMW","Mercede","suzuki"];


echo "Hello my name is {$name} <br>";
echo "age is {$age} <br>";
echo "and i buy clothes that price is \${$price}  <br>";
echo "Online status is: {$status}   <br>";
echo "Type of Cars: {$cars[1]} <br>";


// use var_dump to know what type of variable
var_dump($status);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    
</body>
</html>