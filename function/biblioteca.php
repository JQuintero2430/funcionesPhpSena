<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   function operations ($num1, $num2, $operator)  {

   if ($operator == "a") {
      $result = $num1 + $num2;
      echo "$result";
   } elseif ($operator == "b") {
      $result = $num1 - $num2;
      echo "$result";
   } elseif ($operator == "c") {
      $result = $num1 * $num2;
      echo "$result";
   } elseif ($operator == "d") {
      $result = $num1 * $num2;
      echo "$result";
   } elseif ($operator == "d") {
      $result = $num1 / $num2;
      echo "$result";
   } elseif ($operator !== "a" . "b" . "c" . "d") {
      $result = $num1 + $num2;
      echo "$result";
   }
      
   }
  
   ?>
</body>
</html>