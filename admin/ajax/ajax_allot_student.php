<?php 
	include('../../config/connect.php');
	$student = $_POST['student'];
	$group  =$_POST['group'];

   $query1 = "SELECT * FROM project_group WHERE user_id = $student AND group_id = $group";
	$check = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);	
   
   if($check->num_rows>0){
   	echo "Student already assigned";

   }
   else{
			$query2 = "INSERT INTO  project_group(user_id, group_id) VALUES($student, $group)";
			
			$insertdata = $mysqli->query($query2) or die($query2."<br>".$mysqli->error);
			if($insertdata){
			echo "Student alloted to group";
			}
			else{
			echo "Error occured! Please try again";
			}
   }

 ?>
