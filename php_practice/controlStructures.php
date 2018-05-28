<html>
  <head>
    <title>Control Structures</title>
    <link rel='stylesheet' href='style.css'/>

  <head>
  <body>
    <h2>If/Else Statement</h2>
<?php
//ask Tyler to help with the Timezone response
//$currentMonth = date('F');
//  if($currentMonth == 'August'){
  //  echo "<h3>It's August, so it's really hot.</h3>";
//  }
//  else{
  //  echo "Not August, so at least not in the peak of the heat.";
  //}
 ?>
 <html>
  <h2>Simple Loops</h2>
  <h4>While Loop</h4>
<?php
  $count= 1;
  while ($count < 10){
    echo " abc ";
    $count++;
}
  echo "</br><h4>Do While Loop</h4>";

  $count = 1;
  do{
    echo ' xyz ';
    $count++;
  } while($count < 10);

  echo "</br><h4>For Loop</h4>";

  for($count = 1; $count <=10; $count++){
    echo "$count ";
  }
  echo "</br>";

  for($count = 'A' ; $count < 'G'; $count++){
    echo "<ol> Item $count </ol>";
  }
 ?>
</body>
</html>
