<!DOCTYPE html><html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:13:51 GMT -->
<head> <meta charset="utf-8" /> <title>File locker  </title> <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" /> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> <link rel="stylesheet" href="css/app.v1.css" type="text/css" /> <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
 <link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
	body{
		color: #ECF3AA;
		background-image: url("images/1.jpg");
		

	}
	a{
		color: #ECF3AA;
	}
	small{
		color: #ECF3AA;
		
	}
</style>

<?php
	if(isset($_GET['otp']))
		{
    		$otp=$_GET['otp'];
		}
	else{
    	//user was not passed, so print a error or just exit(0);
		}
?>

</head>
<body class="" background="images/homeBackground.jpg" > 
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp"> 
		<div class="container aside-xl"> 
			<a class="navbar-brand block" href="checkotp.php">Verify OTP</a> 
				<section class="m-b-lg">
					<form action="verify_otp.php" method="POST" >
						<div class="text-center">
							<p><b>Check Your OTP</b></p>
						</div>
  						<div class="list-group-item">   
							<input type="hidden" name="email" value="<?php echo $_GET['email']?>">
							<input type="text" placeholder="Enter OTP" class="form-control no-border" name="otp">
						</div> 
						<button type="submit" class="btn btn-lg btn-primary btn-block">Verify</button>
					</form>
				</section>
		</div>
	</section>




 <!-- footer --> 
 <footer id="footer"> 
 	<div class="text-center padder"><br><br><br>
 		<p> <small>ASP &copy; 2018</small> </p> 
 	</div> 
 </footer> 
 <!-- / footer --> <!-- Bootstrap --> <!-- App --> 
 <script src="js/app.v1.js"></script> 
 <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:13:51 GMT -->
</html>