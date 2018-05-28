<?php
	$scores = array(65, 32, 78, 98, 66);

	function classAverage($array){
		//whenever this function is called it will receive at least one argument and we're going to call that argument array
		$total=0;
		foreach($array as $value){
			$total += $value;
			//loops through each element in the array and takes the value of the specific element at the time and adds it to $total
			//work out the classAverage
		}
		$average= $total/count($array); //counts how many elements there are in the array variable
		echo $average;
	}

classAverage($scores);
 ?>
