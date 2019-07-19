<?php
 
include_once("koneksi2.php");
 
$phone = $_GET['phone'];

	$query = mysql_query("SELECT * FROM log_setor WHERE phone='$phone' order by waktu desc");
	
	$json = array();
	
	while(($row = mysqli_fetch_assoc($result)) == true){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);

 
?>