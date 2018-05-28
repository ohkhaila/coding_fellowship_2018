<html>
  <head>
    <title>Arrays</title>
  </head>
  <body>

<?php

//define array
  $weather= array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
//print a sentence
  echo "We've seen all kinds of weather this month. At the beginning of the month, we had a $weather[5] and $weather[6].
  Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].</br>";
//define array
  $largeCities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
//print values of array to browser, separated by commas
  foreach($largeCities as $c){
    echo "$c, ";
  }
  sort($largeCities);
  //print array as a bulleted list
  echo "<ul></br>";
  foreach($largeCities as $c){
    echo "<li>$c</li>";
  }
  echo "</ul>";

//Add four cities to array
  array_push($largeCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
  //Sort again
  sort($largeCities);
  //print the bulleted list
  echo "<ul></br>";
  foreach($largeCities as $c){
    echo "<li>$c</li>";
  }
  echo "</ul>";



  ?>

<form method ='post' action ''>
  <p>City: </p>
    <input type= 'text' name 'city'/>
  <p>Month: </p>
    <input type= 'text' name 'month'/>
  <p>Year: </p>
    <input type= 'text' name 'year'/>
  <p>Please choose the weather types that you experienced from the list below</p>
    <input type = 'checkbox' name 'weather[]' value = 'sunshine'/>Sunshine<br/>
    <input type = 'checkbox' name 'weather[]' value = 'clouds'/>Clouds<br/>
    <input type = 'checkbox' name 'weather[]' value = 'rain'/>Rain<br/>
    <input type = 'checkbox' name 'weather[]' value = 'hail'/>Hail<br/>
    <input type = 'checkbox' name 'weather[]' value = 'sleet'/>Sleet<br/>
    <input type = 'checkbox' name 'weather[]' value = 'snow'/>Snow<br/>
    <input type = 'checkbox' name 'weather[]' value = 'wind'/>Wind<br/>
    <input type = 'checkbox' name 'weather[]' value = 'cold'/>Cold<br/>
    <input type = 'checkbox' name 'weather[]' value = 'heat'/>Heat<br/>
  </p>
    <input type = 'submit' name = 'submit' value = 'submit' />
</form>

<?php
/*
if (!isset($_POST['submit'])){
//goes with the weather checkbox array

}
else{
    $inputWeather = array(
      $_POST['city'],
      $_POST['month'],
      $_POST['year']
    );

  echo "In $inputWeather[0] in the month of $inputWeather[1] $inputWeather[2],
  you experienced the following weather: <br/><ul>";
//save weather array into a variable
$weather = $_POST['weather'];
//iterate through the array to show what the user choose
  foreach($weather as $w){
    echo "<li>$w</li>";
  }
  echo "</ul>";

}
*/


//Let's make an array 


 ?>
