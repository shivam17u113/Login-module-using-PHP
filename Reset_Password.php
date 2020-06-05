<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
	include('config/connect.php');
    require 'Reset_Password.html';
	
	if(isset($_POST['email']))
	{
		$email =  $_POST['email'];
		$check = "SELECT * FROM users WHERE email = '$email'";
		//echo('$email');
		$result = $mysqli->query($check) or die($check.'<br />'.$mysqli->error);
		$row = $result->fetch_row();
		//echo('$row');
		
		if($row > 0)
		{
			if(isset($_POST['email']))
			{
				$emailTo = $_POST['email'];

				$code = uniqid(true);
				$query = "INSERT INTO resetpasswords(code,email) VALUES ('$code' , '$emailTo')";
				$mysqli->query($query) or die($query.'<br />'.$mysqli->error);
				

				// Instantiation and passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try 
				{
					//Server settings
					$mail->isSMTP();                                     // Send using SMTP
					$mail->Host       = 'smtp.gmail.com';                // Set the SMTP server to send through
					$mail->SMTPAuth   = true;                            // Enable SMTP authentication
					$mail->Username   = 'infoprojectwd@gmail.com';      // SMTP username
					$mail->Password   = 'ProjectWD123';          		// SMTP password
					$mail->SMTPSecure = 'tls';                           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS`also accepted
					$mail->Port       = 587;                             // TCP port to connect to

					//Recipients
					$mail->setFrom('infoprojectwd@gmail.com', 'info');
					$mail->addAddress($emailTo);     // Add a recipient
					$mail->addReplyTo('info@example.com', 'No Reply');

					// Content
					$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER["PHP_SELF"]) . "/Update_Password.php?code=$code";

					$mail->isHTML(true);                                  // Set email format to HTML
					$mail->Subject = 'Your password reset link';
					$mail->Body    = "<h1>You requested a Password Reset Link</h1>
										click this <a href='$url'>link</a> to Reset Password!!!";
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					$mail->send();
					header('location:CheckEmailLink.html');
				}  
				catch (Exception $e) 
				{
					
					header('location:ErrorCheckMail.html');
				}
				exit();
			}
		}
		else
		{
			header('location:SomeThingWentWrong.html');
		}
	}
?>