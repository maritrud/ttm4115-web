<?php



#MÅ LAGE EN METODE


	$listFromDatabase = readfile(database.txt);
	$previousList = "";

	#Dersom det har blitt gjort noen endringer i databasen vil listen oppdateres
	if ($previousList != $listFromDatabase){
		
		$arrayFromDatabase = explode(" ", $listFromDatabase);

		$toiletStatus = array();

		while ($arrayFromDatabase) {
			$id = array_shift($arrayFromDatabase);
			$description = array_shift($arrayFromDatabase);
			$status = array_shift($arrayFromDatabase);
			$time = array_shift($arrayFromDatabase);

			$newStatus = array($id, $description, $status, $time);
			array_push($toiletStatus, $newStatus);
		}

		#$previousList = $listFromDatabase;
	}

