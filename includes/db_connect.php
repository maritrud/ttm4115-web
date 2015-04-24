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

		array_push($availabilityList, array($id, $description, $status, $time));
	}
}