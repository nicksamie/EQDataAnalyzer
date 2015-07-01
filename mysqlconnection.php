<?php

	function connect_mysql($sql_query){
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'root';
		$dbname = "fypdata";

		// Create connection
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		/*else {
			# code...
			echo 'connected successfully';
		}*/

		$result = $conn->query($sql_query);
		return $result;
		
		$conn->close();
	}
?>