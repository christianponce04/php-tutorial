


<?php


   // array_shift($countrys);
    // array_pop($countrys);
    // $countrys["USA"]="Las Vegas";
    // $countrys["China"]="Beijing";

    //   $keys = array_keys($countrys);
    //   $values =  array_values($countrys);

//    foreach($countrys as $key => $value){
//      echo " {$key} = {$value} </br>";
//    }         

    $countrys = array("USA" => "Washington",
                    "India" => "New Delhi",
                    "Philippines" =>"Manila",
                    "Korea"=>"Seoul");

    $capital = $countrys[$_POST["capital"]];
    
    echo "the capital city is {$capital}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="capital" id="" placeholder="Enter Country">
        <input type="submit" value="Submit">
    </form>

</body>
</html>



