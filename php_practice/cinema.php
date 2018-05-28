<html>
  <head>
    <title>Cinema</title>
  </head>
  <body>
<!--    <form method ''action ''>
      <input name = 'age' type = 'text'/>
      <input name = 'accompanied' -->
<?php
  $age = rand(1, 150);
  $ageLimit = 18;
  $isAccompanied = true;
  if($age < $ageLimit && $isAccompanied){
    echo "Welcome to the cinema. You are under the age limit but you have an adult so you can come in :)";
  }
  elseif($age < $ageLimit && $isAccompanied == false){
    echo "Sorry. Since you are under t18 you must be accompanied by an adult to enter the cinema.";
  }
  elseif($age > $ageLimit){
    echo "Welcome to the cinema!";
  }
 ?>
