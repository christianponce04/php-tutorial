<?php 

$db_server = "localhost";
$db_user = "root";
$db_password= "";
$db_name="tutorial";
$conn = "";

if(  $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_password,
                            $db_name))
                            {
    // echo"connected";
}
    else{
        echo "not conneted";
    }
?>