<?php
 	define('SITEURL', 'http://localhost:8080/Quanlyhenho/');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'quanlihenho';
	
	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	if ($conn->connect_error) {
	die('Could not connect to the database!' . $conn->connect_error);
	} 
?>
