<?php
	// vul je eigen gegevens in
	define("DB_SERVER", "127.0.0.1");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "spotify");

	//$database = new PDO("mysql:=host=DB_SERVER;dbname=DB_DATABASE","DB_USER","");
	$database = new PDO("mysql:=host=127.0.0.1;dbname=spotify","root","");
?>