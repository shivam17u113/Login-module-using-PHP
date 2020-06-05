<?php 
$mysqli = new mysqli("localhost", "root", "", "projectportal");
if($mysqli->connect_errno){
	echo "Failed to connect to MYSQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}

?>
