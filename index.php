<?php
  // Variable
  // string
  $name = 'Sara Mohammed';
  $food = 'shawarma';
  $email = 'sara13@gmail.com';

  // int
  $age = 21;
  $users = 3;
  $quantity = 10;

  // float
  $gpa = 3.8;
  $price = 2.45;
  $tax_rate = 5.1;
  
  // boolean
  $employed = true;
  $online = true;

  $total = $quantity * $price ;

  //message
  echo "Hello {$name} <br>";
  echo "You like {$food} <br>";
  echo "Your email is {$email} <br>";
  echo "You are {$age} Years old <br>";
  echo "There are {$users} online <br>";
  echo "You would like to buy {$quantity} itmes <br>";
  echo "Your gpa is: {$gpa} <br>";
  echo "Your {$food} is: \${$price} <br>";
  echo "The sales tax rate is: {$tax_rate}% <br>";
  echo "Online Status: {$online} <br> <hr>";
  echo "Your have ordered {$quantity} x {food} <br>";
  echo "Your total is:\${$total}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <br>
  <button>
    Order Shawarma
  </button>
  
</body>
</html>