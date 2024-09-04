
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty</title>
</head>
<body>

    <form action="index.php" method="post">

    <input type="text" name="username" id="" placeholder="Enter Username">
    <input type="password" name="password" id="" placeholder="Enter Password">
    <input type="submit" value="Log In" name="login" >

    </form>
    
</body>
</html>

<?php 

// foreach ($_POST as $key => $value){
//     echo "{$key} = {$value} <br>  ";
// }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(empty($username)){
            echo "please input username";
        }
        else if(empty($password)){
            echo "please input password";
        }
        else{
            echo "hello {$username}";
        }
    }

?>

