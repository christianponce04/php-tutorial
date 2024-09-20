<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Discussion</title>
</head>

<body>

<h2>this is login page</h2>

<form action="index.php" method="POST">
    <input type="text" name="username" id="" placeholder="Username">
    <input type="password" name="password" id="" placeholder="password">
    <input type="submit" value="login" name="login">

</form>
   
</body>
</html>


<?php 

if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"]) ){

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];


    header("Location: home.php");
 
}
else{
    echo "please input username/password";
}


}


?>