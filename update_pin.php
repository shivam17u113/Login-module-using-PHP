<?php
include("config/connect.php");
$old_pin = $_POST['old_pin'];
$np = $_POST['new_pin'];
$user_id =$_POST['user_id'];

//fetch user data
$query = "SELECT * FROM users WHERE id=$user_id";
$result = $mysqli->query($query) or die($query."<br>".$mysqli->error);
$row = $result->fetch_assoc();

if ($old_pin == $row['pin']) {
		$query1= "UPDATE users SET pin='$np' WHERE id='$user_id'";
		$result1 =$mysqli->query($query1) or die($query1."<br>".$mysqli->error);
		
		echo  "<script>alert('Your Pin is Update Successfully');</script>";
        echo "<script>setTimeout(\"location.href = 'change_pin.php';\",10);</script>";
	}
	
else{
	echo  "<script>alert('Invalid Old Pin !');</script>";
    echo "<script>setTimeout(\"location.href = 'change_pin.php';\",10);</script>";
}

?>