<?php
	$host = "localhost";
	$user = "id21504419_root1";
	$pass = "Itakiaa321!";
	
	$db = "id21504419_db_restoran1";
	$conn = mysqli_connect($host,$user,$pass,$db);
	mysqli_select_db ($conn, $db);
	
	if (!$conn) {
   		die('Maaf koneksi gagal: '. $connect->connect_error);
	}
	else{
		//echo 'Tahu';
		//echo $_SESSION['viewnya'];
	}	
?>