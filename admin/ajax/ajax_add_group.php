<?php 
	include('../../config/connect.php');
	$project_guide_id = $_POST['project_guide_id'];
	$user_id  =$_POST['user_id'];
	$project_id  =$_POST['project_id'];
	$usercount = count($user_id);

	$groupid = $project_guide_id.rand(10,100);
	for($i=0; $i<$usercount; $i++){
	$query2 = "INSERT INTO  project_group VALUES(NULL, $groupid, $project_guide_id, $user_id[$i], $project_id)";
	$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
}
if($insertdata){
	echo "Project Group Created";
}
else{
	echo "Error occured";
 }
 ?>
