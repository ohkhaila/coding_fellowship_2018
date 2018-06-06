<?php


include('init.php');
include('dbFunctions.php');

		$print = getAllInventory();

		foreach($print as $index => $post){
						echo"
							<a href = '/lessons/mySQL/viewInventory?inventoryId=$index'>$post[name]</a>
						";
		}

			foreach($print as $printplease){
				echo "
					<h3>". $printplease['name']."</h3>
					<p>". $printplease['description']."</p>
					<p>".	$printplease['category']."</p>
				";
			}

					// function getInventoryForCategory($inventoryId){
					// 	$result = dbQuery("
					// 		SELECT *
					// 		FROM inventory
					// 		WHERE inventoryId = : inventoryId
					// 		",
					// 		array('inventoryId' => $inventoryId));
					// 		return $result -> fetchAll();
					// }

					// $printOne = getInventoryForCategory($inventoryId);
					// foreach($printOne as $p1){
					// 	echo "
					// 		<h3>". $p['name']."</h3>
					// 		<p>". $p['description']."</p>
					// 		<p>".	$p['category']."</p>
					// 	";
					// }






 ?>
