<?php 

   include("database.php");

   $username = "patrick";
   $password = "12345";
   $hash = password_hash($password, PASSWORD_DEFAULT);
   
   $sql = "INSERT INTO users (user, password)
            VALUES ('$username','$hash')";

   mysqli_query($conn,$sql);

   mysqli_close($conn);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Database connection</title>
</head>
<body>

<h2>Hello Database</h2>
   
</body>
</html>