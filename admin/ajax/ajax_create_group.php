<?php
Include('../../config/connect.php');
$users_per_group = $_POST['users_per_group'];

$query1 = "SELECT users.id, users.avgmarks  FROM users WHERE user_type = 3 ORDER BY avgmarks DESC";
$userresult1 = $mysqli->query($query1) or die($query."<br>".$mysqli->error);
//Number of students
$total_num_of_student1 = $userresult1->num_rows;
$user_delete = $total_num_of_student1%$users_per_group;
$total_num_of_student1 = $total_num_of_student1 - $user_delete;

//Too fetch the limited amount of data according to user per group
$query = "SELECT users.id, users.avgmarks  FROM users WHERE user_type = 3 ORDER BY avgmarks DESC LIMIT $total_num_of_student1";
$userresult = $mysqli->query($query) or die($query."<br>".$mysqli->error);
$total_num_of_student = $userresult->num_rows;

if($total_num_of_student<$users_per_group){
   echo "Unable to create group count is less than $users_per_group";
}
else if($total_num_of_student%$users_per_group != 0){
   //echo "Number of students should be multiple of $users_per_group";
}

else{
	//Collecting data in the array
	$studentDetails = array();
	$i = 0;
	//fetching all the data from the array restrit this function fetch_assocc
	while ($studentData = $userresult->fetch_assoc()) {
		 $studentDetails[$i]['id'] = $studentData['id'];
		 $studentDetails[$i]['avgmarks'] = $studentData['avgmarks'];
	$i++;
	}

	//Get Number of leaders
	$number_of_leaders = (int)($total_num_of_student/$users_per_group);
	//echo "Number of leader are $number_of_leaders";
	//Collecting the leaders ID
	$leaderId = array();
	for ($i=0; $i <$number_of_leaders; $i++) { 
		$leaderId[] = $studentDetails[$i]['id'];
	}
	//echo "Below is the leaderId of students";


	//Above collected Leader ID
	unset($userresult);
	$member_per_group = $users_per_group;
	echo "Total number of students";
	echo "Member per group $member_per_group";
	$groupsAllot = array();
		$k = 0;
		$i = 0;
		for ($j=0; $j <= $total_num_of_student-1; $j++) { 
			// if($k == $users_per_group){
			// 	$k = 0;
			// }	
			if($i == $number_of_leaders){
				$i = 0;
			}
				$groupsAllot[$i][$k] = $studentDetails[$j]['id'];
				//echo "<br>Value i = $i, Value k = $k , Value j = $j";
				$k++;
			$i++;
		}

		date_default_timezone_set('Asia/Kolkata'); 
		foreach ($groupsAllot as $key => $value) {
			foreach ($value as $internalkey => $internal) {
				$groupid= date('YH').$key+1;
				$result = $mysqli->query("SELECT * FROM project_group WHERE user_id=$internal");
				if($result->num_rows > 0)
				{
					// echo "<br>User already Assigned to group id $internal!";
					$status = 0;
				}
				else{
				 $query1 = "INSERT INTO project_group (group_id, user_id) VALUES($groupid, $internal)";
				if($mysqli->query($query1)){
						//echo "<br>Group Created $i";
						$status = 1;
					}$i++;
				}

			}
		}
		if($status == 0){
			echo "Group Cant be created";
		}
		if($status == 1){
			echo "Group Created Successfully";
		}
		//Create Leader using Leader ID
		foreach ($leaderId as $key => $value) {
			$query = "UPDATE project_group SET is_leader=1 WHERE user_id = $value";
			if($mysqli->query($query)){
		 		// echo "<br>Leader Created";
		 	}
		}
}
?>  