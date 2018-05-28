<html>
  <head>
    <title>PHP Function with Parameter</title>
    <link rel='stylesheet' href='style.css'/>

  </head>
  <body>
<?php
//define function that finds the sum of two numbers
  function getSum($num1, $num2){
    $sum = $num1 + $num2;
    echo "Sum of the two numbers $num1 and $num2 is : $sum";
  }

//call  getSum function
  getSum(15, 35); echo "<br />";

//  Let’s now look at a function that accepts a parameter and then returns a
//  value. We will create a function that converts kilometers to miles. The
//  kilometers will be passed as a parameter. The function will return the
//  miles equivalent to the passed kilometers. The code below shows the
  //implementation.

  function kilometersToMiles($kilometers = 0) //hardcoding value of variable
  {
    $milesScale = 0.62;
    return $kilometers * $milesScale;
  }

  echo kilometersToMiles(100);

 ?>
</body>
</html>
