<?php
include_once "konek.php";
	$phone = $_POST['phone'];
	$query = mysqli_query($con,"SELECT * FROM log_setor WHERE phone LIKE '%".$phone."%' ORDER BY waktu ASC");
	while ($row = mysqli_fetch_array($query)){
		$char = '"';
		$string = $row['value'];
		$json = '{
				"id": "'.str_replace($char,'`',strip_tags($row['phone'])).'",
				"setor": "'.str_replace($char,'`',strip_tags($row['setor_baru'])).'",
				"nama": "'.str_replace($char,'`',strip_tags($row['waktu'])).'"
			},';
		}
	echo $json;
	mysqli_close($con);
?>