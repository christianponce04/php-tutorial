
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

    <body>

    <form action="index.php" method="post">

        <input type="checkbox" name="pizza" id="" value="Pizza">Pizza <br>
        <input type="checkbox" name="burger" id="" value="Burger">Burger <br>
        <input type="checkbox" name="fries" id="" value="Fries">Fries <br>
        <input type="checkbox" name="salad" id="" value="Salad">Salad <br>
        <input type="submit"  value="submit" name="submit">

    </form>

    </body>

</html>

<?php 
    
    if(isset($_POST["submit"])){


        if(isset($_POST["pizza"])){
            echo "you like pizza" . "<br>";
        }

         else if (empty($_POST["fries"]) && empty($_POST["salad"]) && empty($_POST["burger"]) && empty($_POST["burger"]) ){
            
        echo "you dont like pizza,fries,salad and burger";
      
      }
        
    }



    // if(isset($_POST["submit"])){
     
    //     if(isset($_POST["pizza"]))
    //     {
    //         echo "you like pizza";
    //     }
    //      if(isset($_POST["burger"]))
    //     {
    //         echo" you like burger";
    //     }

    //      if(isset($_POST["fries"]))
    //     {
    //         echo" you like fries";
    //     }

    //      if(isset($_POST["salad"]))
    //     {
    //         echo" you like salad";
    //     }

    //     else{
    //         echo "Please select foods";
    //     }

    // }


?>

