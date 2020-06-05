<?php
include("config/connect.php");
$sdf = $_POST['old_password'];
$np = $_POST['new_pass'];
$cp = $_POST['confirm_pass'];
$user_id =$_POST['user_id'];
//encrypt password
$sdf = md5($sdf);
$np = md5($np);
$cp = md5($cp);

//fetch user data
$query = "SELECT * FROM users WHERE id=$user_id";
$result = $mysqli->query($query) or die($query."<br>".$mysqli->error);
$row = $result->fetch_assoc();

if ($sdf == $row['password']) {
	if ($np == $cp) {
		//set new password for user
		$query1= "UPDATE users SET password='$cp' WHERE id='$user_id'";
		$result1 =$mysqli->query($query1) or die($query1."<br>".$mysqli->error);
		
		echo  "<script>alert('Password Update Successfully');</script>";
        echo "<script>setTimeout(\"location.href = 'home.php';\",10);</script>";
	}
	else{
		echo  "<script>alert('Enter Same Password in Both Fields');</script>";
    	echo "<script>setTimeout(\"location.href = 'changepassword.php';\",10);</script>";
	}
	
}
else{
	echo  "<script>alert('Invalid password');</script>";
    echo "<script>setTimeout(\"location.href = 'changepassword.php';\",10);</script>";
}

?>