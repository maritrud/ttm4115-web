<?php

$mysqli = new mysqli($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASS'], $_SERVER['DB_DB']);
if ($mysqli->connect_error) {
	header("Unable to connect to MySQL");
}