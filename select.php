<?php 
	include "koneksi.php";
	
	$S_Phone = $_POST["phone"];

	$query = mysql_query("SELECT * FROM log_setor WHERE phone='$S_Phone' order by waktu desc");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>