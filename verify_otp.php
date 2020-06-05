<?php
include("config/connect.php");
$abc = $_POST['otp'];
$bcd = $_POST['email'];

$query = "SELECT * FROM users WHERE email='$bcd' AND otp='$abc' AND status=1 ";
$result = $mysqli->query($query) or die($query."<br>".$mysqli->error);

if($result->num_rows != 1)
  {
    header("location: notverified.php");
	 exit();
  }
  else{
      print_r($_POST); 
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
        if($row['user_type'] == 1)
        {
          header("location: main.php");
        }
        else
        {
          header("location: #?email=".urlencode(serialize($bcd)));
        }
      
     }
//      if($row['user_type'] == 1)
//       {
//         header("location: admin/dashboard.php");
//        }
// else{
//      header("location: home.php?email=".urlencode(serialize($bcd)));
//     }
     

?>