<?php 
	include('../../config/connect.php');
	
	$userid  =$_POST['userid'];
	$query2 = "UPDATE users SET status=1 WHERE id= $userid";
	$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
if($insertdata){
	echo "User Verified";
}
else{
	echo "Error occured";
 }
 ?>
