<?php 
	include('../../config/connect.php');
	$guide_id = $_POST['guideid'];
	$project_id  =$_POST['projectid'];

$query = "SELECT * FROM project_guides WHERE guide_id = $guide_id AND project_id = $project_id";
$checkquery = $mysqli->query($query) or die($query."<br>".$mysqli->error);
	if($checkquery->num_rows >= 1){ 
			echo "Guide is already assigned to project!";
		}
	else{
		$query2 = "INSERT INTO  project_guides VALUES(NULL, $guide_id, $project_id)";
		$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
			if($insertdata){
			echo "Guide assigned to project";
			}
	}


 ?>