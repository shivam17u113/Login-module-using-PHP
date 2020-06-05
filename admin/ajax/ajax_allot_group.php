<?php 
	include('../../config/connect.php');
	$guide = $_POST['guide'];
	$leader  =$_POST['leader'];

   $query1 = "SELECT * FROM group_allot WHERE guide_id = $guide AND leader_id = $leader";
	$check = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);	
   
   $query4 = "SELECT * FROM users WHERE id=$leader";
	$leaderDetails = $mysqli->query($query4) or die($query4."<br>".$mysqli->error);	
  $leaderData = $leaderDetails->fetch_assoc();


   if($check->num_rows>0){
   	echo "Guide is aleady assigned";

   }
   else{
			$query2 = "INSERT INTO  group_allot(guide_id, leader_id) VALUES($guide, $leader)";
			$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
			$msg = "You have assigned to the Group of ".$leaderData['firstname']." ".$leaderData['lastname'];
			$notifyquery3 = "INSERT INTO  notifications(message, receiver_id, created) VALUES('$msg', $guide, NOW())";
			$insertnotify = $mysqli->query($notifyquery3) or die($notifyquery3."<br>".$mysqli->error);
			
			if($insertdata){
			echo "Project Group Created";
			}
			else{
			echo "Error occured";
			}
   }

 ?>
