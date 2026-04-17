<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- First Example -->
  <!-- <form action="index.php" method="post">
    <div>
      <label for="temp">Tempreature: </label>
      <input type="text" name="tempreature" id="temp">
    </div><br>

    <input type="submit" value="Wethear">
  </form> -->

  <!-- --------------------------------------------------- -->

  <!-- Second Example -->
  <form action="index.php" method="post">
    <div>
      <label for="age">Age : </label>
      <input type="number" id="age" name="ageOfVote">
    </div><br>

    <input type="submit" value="Can Vote? ">
    <hr><br>
  </form>

</body>
</html>

<?php
  // Logical Operators
  // AND && 
  // OR ||
  // NOT !

  // First Example 
  // $temp = $_POST["tempreature"];

  // if($temp <= 30  && $temp >=20)
  //   {echo "The Wethear is normal";}
  // elseif($temp > 30)
  //   echo "The Wethear is hot";
  // else{
  //   echo "The Wethear iS cold";
  // }
  // -----------------------------------------------------------

  // Second Example Nested If 
  $age = $_POST["ageOfVote"];
  $ageVote = 18;
  $citizen = true;
  $parent_agree = false;

  if($age >= $ageVote && $citizen)
    echo "He/She Can not Vote";
  elseif ($age >= 16 && $citizen){
    if($parent_agree)
      echo "He/She Can Vote";
    else{
      echo "He/She Can Not Vote";
    }
  }
  else
    echo "He/She Can Vote";

  

?>
