


<?php

$foods = array("banana","watermelon","apple","orange");

    array_push($foods ,"kiwi"); // add 
    array_shift($foods); // remove first element
    array_pop($foods); //remove last element 
    echo count($foods) ."</br>" ;

    // reverse an array

    $reverse_array = array_reverse($foods);


foreach ($foods as $food){
    echo $food . "</br>";
}   

foreach ($reverse_array as $food){
    echo $food . "</br>";
}   

?>




