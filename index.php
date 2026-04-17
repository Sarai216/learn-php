<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <div>
      <label for="userName">UserName</label>
      <input type="text" name="user-name" id="userName">
    </div><br>

    <div>
      <label for="passWord">Pass Word:</label>
      <input type="password" name="pass-word" id="passWord">
    </div><br>

    <input type="submit" name="submit" value="Log in">
  </form>
 
  
</body>
</html>

<?php

  // GET AND POST
  echo "Name: {$_POST['user-name']} <br>";
  echo "PassWord: {$_POST['pass-word']} <br>";
?>
