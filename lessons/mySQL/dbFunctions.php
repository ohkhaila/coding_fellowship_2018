<?php
include('init.php');

	function getAllInventory(){
					$result = dbQuery("
							SELECT *
							FROM inventory
					");

	return $result -> fetchAll();
	}



	$print = getAllInventory();


		foreach($print as $printplease){
			echo "
				<h3>". $printplease['name']."</h3>
				<p>". $printplease['description']."</p>
				<p>".	$printplease['category']."</p>
			";
		}

 ?>
