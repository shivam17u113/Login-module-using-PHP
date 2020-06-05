<!DOCTYPE html><html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:13:51 GMT -->
<head> 
	<meta charset="utf-8" /> 
		<title>Online Mobile Shopping | Web Application</title> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge"> 
		<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
		
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="css/mdb.min.css">

		<link rel="stylesheet" a href="css/style2.css">
</head>
<body class=""  >
	<div class="container">
        <img src=" img/profile.png" alt="userImage">
        <form action="register_add.php" method="POST" enctype="multipart/form-data">
            <div class="form-input">
                <input type="text" name="firstname" autocomplete="off" required placeholder="Enter your First Name"> 
			</div>

			<div class="form-input">
                <input type="text" name="lastname" autocomplete="off" required placeholder="Enter your Last Name"> 
			</div>
			
            <div class="form-input">
                <input type="text" name="email" autocomplete="off" required placeholder="Enter your Email"> 
			</div>
			
            <div class="form-input">
                <input type="password" name="password" autocomplete="off" required placeholder="Enter your password">
			</div>

			<div class="form-input">
					<select name="user_type" id="roles" required>
								<!-- <option value="1">Admin</option> -->
						<option value="1">User</option>
					</select>
			</div>

			<div class="form-input"> 
				<input type="file" name="file" required="required" id="image">
			</div>
			
            <input type="submit" type="submit" value="Sign Up" class="btn-sign-up">
            <br><br>
            <div style="color: aliceblue;">Already have an Account?  </div> <br>          
			<a href="index.php" class="btn btn-lg btn-primary btn-block">Sign in</a>
        </form>
	</div>
	 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 	<!-- footer --> 
 	<footer id="footer"> 
 		<div class="text-center padder clearfix"> 
 			<p> <small>&copy 2020 | VIIT.</small> </p> 
 		</div> 
 	</footer> 
 	<!-- / footer --> 
 	<!-- Bootstrap --> <!-- App --> 
 	<script src="js/app.v1.js"></script> 
	 <script src="js/app.plugin.js"></script>
	 <!-- jQuery -->
	 <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:13:51 GMT -->
</html>