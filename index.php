<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <!-- Math Functions First Example-->
  <!-- <form action="index.php" method="post">
    <div>
      <label for="num1">First Number: </label>
      <input type="text" id="num1" name="number1"> 
    </div> <br>

    <div>
      <label for="num2">Number 2:</label>
      <input type="text" id="num2" name="number2">
    </div><br>

    <div>
      <label for="num3">Number 3: </label>
      <input type="text" id="num3" name="number3">
    </div><br>

    <input type="submit" value="Math">
  </form> -->
  <!-- -------------------------------------------------------------------------------------- -->

  <!-- Math Funcations Second Example Circle -->
   <form action="index.php" method="post">
    <div>
      <label for="r">Radius: </label>
      <input type="text" id="r" name="radius">
    </div><br>

    <input type="submit" value="calculate">
  
   </form>
   <hr><br>

</body>
</html>

<?php
  // Math Function

  // $num1 = $_POST["number1"];
  // $num2 = $_POST["number2"];
  // $num3 = $_POST["number3"];
  // $result = null;

  // // $num1 = abs($num1);
  // // $num1 = round($num1);
  // // $num1 = floor($num1);
  // // $num1 = ceil($num1);
  // // $num1 = sqrt($num1);
  // // $result = pow($num1, $num2);
  // // $result = max($num1, $num2, $num3);
  // // $result = min($num1, $num2, $num3);
  // // $result = pi();
  // // $result = rand(2,80);

  // echo $result;
  // -------------------------------------------------------------------

  
  // Math Funcations Second Example Circle
  $radius = $_POST["radius"];
  $circumference = null;
  $area = null;
  $volume = null;

  // Circmference 
  $circumference = round(2 * pi() * $radius, 2) ;
  echo "Circumference = {$circumference} cm <br>";

  // Area
  $area = round(pi() * pow($radius , 2), 2);
  echo "Area = {$area} cm^2 <br>";

  // Volume
  $volume = round((4/3) * pi() * pow($radius, 3) , 2);
  echo "Volume = {$volume} cm^3 <br>";


  



  

?>
