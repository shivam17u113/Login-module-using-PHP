<?php 
	include('../../config/connect.php');
	$guide = $_POST['guide'];
	$project_id  =$_POST['project_id'];

   $query1 = "SELECT * FROM project_details WHERE guide_id = $guide AND id = $project_id";
	$check = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);	
   
   $query4 = "SELECT * FROM project_details WHERE id=$project_id";
	$ProjectDetails = $mysqli->query($query4) or die($query4."<br>".$mysqli->error);	
  $projectData = $ProjectDetails->fetch_assoc();


   if($check->num_rows>0){
   	echo "Guide is aleady assigned";

   }
   else{
	   	$query2 = "UPDATE project_details SET guide_id= $guide WHERE id=$project_id";
			$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
			$msg = "You have assigned to the Project of ".$projectData['project_name'];
			$notifyquery3 = "INSERT INTO  notifications(message, receiver_id, created) VALUES('$msg', $guide, NOW())";
			$insertnotify = $mysqli->query($notifyquery3) or die($notifyquery3."<br>".$mysqli->error);
			
			if($insertdata){
			echo "Assigned to the Project";
			}
			else{
			echo "Error occured";
			}
   }

 ?>
