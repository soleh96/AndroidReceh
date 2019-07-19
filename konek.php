<?php
	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "emeraldh_data"; //sesuaikan username
	$password	= "123456"; //sesuaikan password
	$database	= "emeraldh_data"; //sesuaikan target databese

	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
?>