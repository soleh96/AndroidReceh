<?php
$response = array();
// include db connect class
mysql_connect("localhost","emeraldh_data","123456");
mysql_select_db("emeraldh_data");
 
$S_Phone = $_POST["phone"];

//  get by pendaftaran
$result = mysql_query("SELECT * FROM log_setor WHERE phone ='$S_Phone'") or die(mysql_error());
 
// cek
if (mysql_num_rows($result) > 0) {
    // looping hasil
    // pendaftaran node
    $response["data"] = array();
     
    while ($row = mysql_fetch_array($result)) {
        $pendaftaran = array();
        $pendaftaran["phone"] = $row[1];
        $pendaftaran["setor_baru"] = $row[3];
	$pendaftaran["waktu"] = $row[4];
        // masukan pendaftaran pada $response
        array_push($response["data"], $pendaftaran);
    }
    // sukses
    $response["success"] = 1;
 
    // echo JSON response
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "Tidak ada data yang ditemukan";
 
    echo json_encode($response);
}
?>