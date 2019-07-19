<?php 

include_once "konek.php";
	$phone = $_POST['phone'];
	$query = mysqli_query($con, "SELECT sum(setor_baru) as jumlah_semua FROM log_setor ORDER BY waktu DESC");
		while ($row = mysqli_fetch_array($query)){
		$char = '"';
		$string = $row['value'];
		$json = '{
				"id": "'.str_replace($char,'`',strip_tags($row['jumlah_semua'])).'"
			},';
		}
	echo $json;
	mysqli_close($con);
?>