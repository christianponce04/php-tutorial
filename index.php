<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<form action="index.php" method="post">

<input type="text" name="username" id="" placeholder="Username">
<input type="text" name="age" id="" placeholder="Age">
<input type="text" name="email" id="" placeholder="Email">
<input type="submit" value="Submit" name="submit">

</form>
</body>
</html>

<?php 

if(isset($_POST["submit"])){
	// $username = $_POST["username"];

// 	 $username = filter_input(INPUT_POST, "username",
// 	 				FILTER_SANITIZE_SPECIAL_CHARS);
// 	$age = filter_input(INPUT_POST,"age",
// 					FILTER_SANITIZE_NUMBER_INT);
// $email = filter_input(INPUT_POST, "email",
// 					FILTER_SANITIZE_EMAIL);
// 	echo $email;


//validate

// 	 if(isset($_POST["submit"])){
// 	 	$age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

// 	 	if(empty($age)){
// 	 		echo "invalid input";
// 	 	}
// 	 	else{
// 	 		echo "your age is {$age}";
// 	 	}
// 	}
// }

	if(isset($_POST["submit"])){
			$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
	
			if(empty($email)){
				echo "invalid input";
			}
			else{
				echo "your email is {$email}";
			}

	}
}

?>


