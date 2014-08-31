<?php
	
include 'conn.php';
$xx = $_POST['xx'];
$yy = $_POST['yy'];


$sql = "INSERT INTO gps (xx,yy)VALUES ('$xx','$yy')";
$result = mysql_query($sql,$conn);
mysql_close ( $conn );
?>