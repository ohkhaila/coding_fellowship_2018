<?php

$Test= "Hello";

function add($variable1, $variable2){
  return $variable1 + $variable2;
}
//defines the function Add
echo "
  <h2>OMG I made a calculator!</h2>
    <form method='' action = ''>

          <input type='text' name='variable1' />
          <select name = 'operation'>
          <option value = 'none'>none</option>
            <option value = 'add'>+</option>
            <option value = 'subtract'>-</option>
            <option value = 'multiply'>*</option>
            <option value = 'divide'>/</option>
          </select>
          <input type='text' name='variable2' />
          <button type = 'submit' name = 'submit' value = submit>Calculate</button>
    </form>
    <p>The answer is: </p>";
//forms used to get information from users

//check if the submit button has been pressed/"set"
if(isset($_REQUEST['variable1'])){
  $result = add($_REQUEST['variable1'], $_REQUEST['variable2']);
  if($_REQUEST['operation'] == 'add'){
    $ans = $_REQUEST['variable1'] + $_REQUEST['variable2'];
  }xsvf
  elseif($_REQUEST['operation']=='subtract'){
    $ans = $_REQUEST['variable1'] - $_REQUEST['variable2'];
  }
  elseif($_REQUEST['operation']=='multiply'){
    $ans = $_REQUEST['variable1'] * $_REQUEST['variable2'];
  }
  elseif($_REQUEST['operation']=='divide'){
    $ans = $_REQUEST['variable1'] / $_REQUEST['variable2'];
  }
  else {
    print "Fill in the form";
  }


 echo "<h1>The answer is: $ans </h1>"; //.Add($_REQUEST['variable1'],
      //variable1 is your index (think arrays)
    //  $_REQUEST['variable2'])."
  //</h1>";
}
  function InsertNum($variable1, $variable2){
    echo "$variable1, $variable2";
  }
//anything inside of the {} will run if the information in the () is true
//REQUEST is a place where the values of the form go when they are submitted
//its an array of different values (from the form)
 ?>
<!--
 <h1>title</h1>
-->
 <?php
  echo "$Test";
  ?>
