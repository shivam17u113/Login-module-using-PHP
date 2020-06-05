<?php
 
include("config/connect.php");
  $xyz = $_POST['checktotal'];
  $bcd = $_POST['email'];
  // print_r($_POST);
  // exit();
 $query = "SELECT * FROM users WHERE pin='$xyz' AND email='$bcd' AND status=1";
$result = $mysqli->query($query) or die($query."<br>".$mysqli->error);
// print_r($result);
// exit();
if($result->num_rows != 1)
  {
    
    header("location: calculator.php?email=".$bcd);
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
      header("location: home.php");
     }
     if($row['user_type'] == 1)
      {
        header("location: admin/dashboard.php");
       }
else{
     header("location: home.php");
    }


?>