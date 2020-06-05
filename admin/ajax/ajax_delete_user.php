<?php 
	include('../../config/connect.php');
	
	$userid  =$_POST['userid'];
	$query2 = "DELETE FROM users WHERE id= $userid";
	$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
if($insertdata){
	echo "User Deleted";
}
else{
	echo "Error occured";
 }
 ?>
