<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Condition</title>
</head>
<body>

    <form action="index.php" method="post">

    <input type="text" name="grade" id="" placeholder="Enter Grade">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php 

$grade = $_POST["grade"];

switch($grade){

    case ($grade == "A" || $grade == "a"):
        echo "doing great";
        break;

     case ($grade == "B" || $grade == "b"):
            echo "doing good";
            break;

     case ($grade == "C" || $grade == "c"):
             echo "doing poorly";
            break;

                
       case ($grade == "D" || $grade == "d"):
             echo "failed";
             break;

        default:
            echo "invalid input please try again";
            break;

}


// $grade = $_POST["grade"];

// switch ($grade) {
//     case ($grade >=81 && $grade <= 85):
//         echo "You did great";
//         break;
//     case ($grade >=75 && $grade <= 80 ) :
//        echo "You did good";
//          break;

//    case ($grade >=70 && $grade <= 74  )  :
//         echo "You did okay";
//         break;

//   case ($grade >=65 && $grade <= 69  )  :

//        echo "You did poorly";
//        break;

//     default:
//     echo "Invalid Input please try again";
//         break;
// }

?>