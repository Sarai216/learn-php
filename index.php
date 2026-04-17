<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Lesson 6 If statment -->
  <form action="index.php" method="post">
    <div>
      <label for="hour">Work Hours in This Week</label>
      <input type="text" id="hour" name="workHours">
    </div><br>

    <input type="submit" value="Money">
  </form>


</body>
</html>

<?php
  $hours = 40;
  $hoursWorked = $_POST["workHours"];
  $rate = 15;
  $weekly_pay = null;

  if($hoursWorked < 0)
    {$weekly_pay = 0;}
  elseif($hoursWorked <= $hours){
    $weekly_pay = $hoursWorked * $rate ;
  }
  else{
    $weekly_pay = ($hours * $rate ) + (($hoursWorked - $hours) * ($rate * 1.5));
  }
  
  echo "Total Money: \${$weekly_pay}";

?>
