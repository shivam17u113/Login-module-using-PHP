<?php

	include('config/connect.php');

	include 'Update_Password.html';

     

	if(!isset($_GET["code"]))

	{

		

		exit(header('location:CantFindPage.html'));

	}



	$code = $_GET["code"];	

	$getEmailQuery = "SELECT email FROM resetpasswords WHERE code='$code'";

	$mail = $mysqli->query($getEmailQuery);

	

	$mysqli->query($getEmailQuery) or die($getEmailQuery.'<br />'.$mysqli->error);

	if(mysqli_num_rows($mysqli->query($getEmailQuery)) == 0)

	{	

		

		exit(header('location:CantFindPage.html'));

	}



	if(isset($_POST["password"]))

	{

		$pwd = $_POST["password"];

		$pwd = md5($pwd);

       

		$row = mysqli_fetch_array($mysqli->query($getEmailQuery));

	

		$email = $row["email"];

		echo $email;

         

		$query = "UPDATE users SET password='$pwd' WHERE email='$email'";

		$mysqli->query($query) or die($query.'<br />'.$mysqli->error );

		echo $query;



		if($mysqli->query($query))

		{

			$query = "DELETE FROM resetpasswords WHERE code='$code'";

			echo $mysqli->query($query);

            $mysqli->query($query) or die($query.'<br />'.$mysqli->error);



			exit(header('location:UpdatePasswordMsgDisplay.html'));

		}

		else

		{

			exit(header('location:SomeThingWentWrong.html'));

		}



	}

?>