<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>math functions</title>

</head>
<body>

    <!-- <form action="index.php" method="post">

    <label for="#">X:
    <input type="text" name="x" id=""></br>

    <label for="#">Y:</label>
    <input type="text" name="y" id=""></br>

    <label for="#">Z:</label>
    <input type="text" name="z" id="">  </br>
    
    <input type="submit" value="submit">  </br>

    </form> -->



    <!-- //exercise -->

        <!-- when enter radius
        // get cerconference, volume, area -->

    <form action="index.php" method="post">
            
        <label for="">Radius:</label> </br>
        <input type="text" name="radius" id="">
        <input type="submit" value="Submit">
        

    </form>

</body>
</html>

    <?php 

        $radius = $_POST["radius"];

        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2);

        $area = pi() * pow($radius, 2);
        $area = round($area, 2);
        

        $volume = 4/3 * pi() * pow($radius, 3);
        $volume = round($volume, 2);

        echo "Circumference of {$radius} is: {$circumference} </br>"; 
        echo "Area of {$radius} is: {$area} </br>";
        echo "Volume of {$radius} is: {$volume}  </br>";

    ?>


    <!-- < ?php 
    
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];

    // $total =abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total =  ceil($x);
    // $total = sqrt($x);
    // $total= pow($x , $y);
    // $total = max($x,$y,$z);
    // $total = min($x,$y,$z);
    // $total = pi();
    // $total= rand(1,100);

    // echo "Total Is: {$total}";

    ?> -->
