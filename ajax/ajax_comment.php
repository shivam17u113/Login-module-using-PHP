<?php 
Include('../config/connect.php');
$project_id = $_POST['project_id'];
$user_id = $_POST['user_id'];
$comment = $_POST['comment'];
$query1 = "INSERT INTO comments VALUES(NULL, '$comment', '$user_id', '$project_id', NOW())";
echo $query1;
$check = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);	

?>