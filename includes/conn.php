<?php
	$conn = new mysqli('localhost', 'priiczte_techlify_db', 'techlify_db', 'priiczte_techlify_db');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>