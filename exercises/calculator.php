<?php

$Test= "Hello";

function Add($variable1, $variable2){
  return $variable1 + $variable2;
}
//defines the function Add
echo "
    <form action = ''>

          <input type='text' name='variable1' />
          <input type='text' name='variable2' />
          <input type='submit' />
    </form>
";
//forms used to get information from users

if(isset($_REQUEST['$variable1'])){
  echo "<h1>The answer is:
      ".Add($_REQUEST['variable1'],
      //variable1 is your index (think arrays)
      $_REQUEST['variable2'])."
  </h1>";
}
//anything inside of the {} will run if the information in the () is true
//REQUEST is a place where the values of the form go when they are submitted
//its an array of different values (from the form)
 ?>

 <h1>title</h1>

 <?php
echo "$Test";
  ?>
