<?php 
	/* ===== www.dedykuncoro.com ===== */
	include_once "konek.php";

	$query = mysqli_query($con, "SELECT sum(setor_baru) as jumlah_semua FROM log_setor ORDER BY waktu DESC");
	
	$json = array();	
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($con);
?>