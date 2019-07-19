<?php
$server_name = "localhost";
$user_name = "emeraldh_data";
$password = "123456";
$conn = mysql_connect($server_name, $user_name, $password) or die ('Server '. mysql_error());
$database_name= 'emeraldh_data';
mysql_select_db($database_name) or die('error');
mysql_query("SET NAMES 'utf8'");
?>