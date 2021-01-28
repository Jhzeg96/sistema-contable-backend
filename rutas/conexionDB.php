<?php

 function conectar(){
 	$servername = 'tiendatalamas.com';
	$username = 'tiendat_creative';
	$password = 'creativeSoftware';
	$dbname = 'tiendat_sistema_contable';
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, "utf8");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}else{
		return $conn;
	}
}

?>