<?php

	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "root");
	define("DB_DATABASE", "spotify");

	$conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE . "", "" . DB_USER . "", "" . DB_PASSWORD . "");
	
?>