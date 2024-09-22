
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Super global variables</title>
 </head>
 <body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">

    <input type="text" name="username" id="" placeholder="Username">
    <input type="submit" value="submit">

    </form>
        
 </body>
 </html>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Hello {$_POST["username"]} ";
}
else{
    echo "input please";
}


// foreach($_SERVER as $key => $value){
//     echo "{$key} = {$_value} <br>" ;
// }

?>