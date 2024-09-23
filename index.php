<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>
<body>
    
</body>
</html>

<?php 

 $password = "christian";

 $hash = password_hash($password, PASSWORD_DEFAULT);

//  echo "$hash";

 if(password_verify("christian", $hash)){
    echo "password correct";
 }
 else{
    echo "password incorrect";
 }


?>