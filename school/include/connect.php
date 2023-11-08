<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "school";
	
	$connect = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$connect){
		die("Connection Failed". mysqli_conneсt_error());
	} else{	
		/* echo "Успех"; */
		$connect->set_charset('utf8');
	}
?>