<?php 
 include('config/connect.php');

  if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST["user_type"]))
  {
    $fname =  $_POST['firstname'];
    $lname =  $_POST['lastname'];
    $email =  $_POST['email'];
    $pass  =  $_POST['password'];
    $user_type  =  $_POST['user_type'];
    $otp = 123456;
    $pin = 123;

    $status = 1;

    $filename  = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];
    $imageFileType = $_FILES['file']['type'];

    if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<a href='login.php'>Login</a>";
      exit();
    }
    move_uploaded_file($_FILES['file']['tmp_name'], 'images/profile/'.$filename);

    $pass = md5($pass);

    $check = "SELECT * FROM users WHERE email = '$email'";
    $result = $mysqli->query($check) or die($check.'<br />'.$mysqli->error);
    $row = $result->fetch_row();

    if($row > 0){
      header('location: User_Exixt.html');
    }
    else
    {
      $query = "INSERT INTO users VALUES(NULL, '$fname', '$lname','$email', '$pass','$filename', $user_type, $status,$otp,$pin,NOW(), NOW(), NULL)";
      $mysqli->query($query) or die($query.'<br />'.$mysqli->error);
      $name = "uploads/".$fname;
      header('location: Account_Created_Successfully.html');
    }
  }
  else
  {
    header('location: SomeThingWentWrong.html');
  }