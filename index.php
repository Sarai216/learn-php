<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Resturant Project very sample -->
   <form action="index.php" method="post">

    <div>
      <label for="quantity">Quantity: </label>
      <input type="number" id="quantity" name="Quantity">
    </div><br>

    <input type="submit" value="Total">

   </form>
  
 
  
</body>
</html>

<?php

  // GET AND POST
  // Resturant Project very sample
  $food = "Shawarma";
  $price = 2.45;
  $quantity = $_POST["Quantity"];
  $total = null;

  $total = $price * $quantity;

  echo "You have ordered {$quantity} x {$food}s <br>";
  echo "Your total price is: \${$total}";

  

?>
