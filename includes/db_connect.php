<?php

//Gjør først en sjekk på om verdiene fra fil er oppdatert 	if ($previousList != $listFromDatabase){

$previousList = "";

function makeArrayFromFile(){

	$availabilityList = array();

	foreach(file("/var/www/includes/database.txt") as $line) {
		$currentLine = explode(" ", $line);

		$id = $currentLine[0];
		$description = $currentLine[1];
		$status = $currentLine[2];
		$time = $currentLine[3];

		array_push($toiletStatus, array($id, $description, $status, $time));

	}
}



// 	$stringFromDatabase = file_get_contents("/var/www/includes/database.txt");
// 	$arrayFromDatabase = explode("\n", $stringFromDatabase);

// 	$toiletStatus = array();

// 	while (!empty($arrayFromDatabase)) {

// 		$current = array_shift($toiletStatus);
// 		$currentLine = explode(" ", $current);

// 		$id = array_shift($currentLine);
// 		$description = array_shift($currentLine);
// 		$status = array_shift($currentLine);
// 		$time = array_shift($currentLine);

// 		$newStatus = array($id, $description, $status, $time);
// 		array_push($toiletStatus, $newStatus);
// 		}

// 	$previousList = $stringFromDatabase;
// }



