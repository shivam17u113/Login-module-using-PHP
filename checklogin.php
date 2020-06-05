<?php 
  include("config/connect.php");
  	
	$_SESSION['logged_in']='1';
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$pass = md5($pass);

$query = "SELECT * FROM users WHERE email = '$email' AND password='$pass' AND status=1";
$result = $mysqli->query($query) or die($query."<br>".$mysqli->error);


  if($result->num_rows != 1){ 
       
	header("location: SomeThingWentWrong.html");
       exit();
  }
  else{	
  session_start();
		setcookie('id', session_id());
		$row =$result->fetch_assoc();
		$_SESSION['id'] = session_id();
      $_SESSION['username'] = $row['firstname'].' '.$row['lastname'];
      $_SESSION['login_time'] = $row['loggedin'];
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['profile'] = $row['profile_img'];
      $_SESSION['user_type'] = $row['user_type'];
      $_SESSION['pin'] = $row['pin'];


      $otp = mt_rand(100000, 999999);
      $query1 ="UPDATE users SET otp=$otp WHERE email = '$email' AND password='$pass'";
      $result = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);
      echo $otp;
      $query = array(
        'email' => $email, 
        'otp' => $otp
      );
	 
      $query = http_build_query($query);
      
	  header( "Location: main.php" );
  }
?>