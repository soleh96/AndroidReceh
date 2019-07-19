<?php
include_once "konek.php";
	$phone = $_POST['phone'];
	$query = mysqli_query($con,"SELECT * FROM users WHERE phone LIKE '%".$phone."%' ");
	while ($row = mysqli_fetch_array($query)){
		$char = '"';
		$string = $row['value'];
		$json = '{
				"id": "'.str_replace($char,'`',strip_tags($row['phone'])).'",
				"nama": "'.str_replace($char,'`',strip_tags($row['point'])).'"
			},';
		}
	echo $json;
	mysqli_close($con);
?>