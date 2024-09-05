
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

    <body>


    <form action="index.php" method="post">

        <input type="radio" name="payment" id="" value="Gcash"> <label for="">Gcash</label> </br>
        <input type="radio" name="payment" id="" value="Paypal" > <label for="">Paypal</label> </br>
        <input type="radio" name="payment" id="" value="Bank"> <label for="">Bank</label> </br>
        <input type="submit" name="submit" value="Submit">
    </form>

    </body>

</html>

<?php 

 

    if(isset($_POST["submit"])){

 

        if(isset($_POST["payment"])){
            $payment = $_POST["payment"];
     
          echo "You selected paymenit is {$payment} ";
        }
        else{
            echo "Please select payment";
        }

        // switch($payment){
            
        //     case $payment == "Gcash":
            
        //         echo "you selected payment is gcash";
        //         break;

        //     case $payment == "Paypal":
            
        //          echo "you selected payment is Paypal";
        //          break;

        //    case $payment == "Bank":
            
        //          echo "you selected payment is Bank";
        //         break;

        //     default:
        //         echo"please select payment";
        //         break;

        // }
     
    }

?>

