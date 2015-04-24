<?php

//Gjør først en sjekk på om verdiene fra fil er oppdatert 	if ($previousList != $listFromDatabase){

$previousList = "";

function makeArrayFromFile(){
	
	$stringFromDatabase = file_get_contents("/var/www/includes/database.txt");
	$arrayFromDatabase = explode("\n", $stringFromDatabase);

	$toiletStatus = array();

	while (!empty($arrayFromDatabase)) {

		$currentLine = array_shift($toiletStatus);
		$currentLine = explode(" ", $currentLine);

		$id = array_shift($currentLine);
		$description = array_shift($currentLine);
		$status = array_shift($currentLine);
		$time = array_shift($currentLine);

		$newStatus = array($id, $description, $status, $time);
		array_push($toiletStatus, $newStatus);
		}

	$previousList = $stringFromDatabase;
}



