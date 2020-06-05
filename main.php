<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

		<nav class="navbar navbar-expand-lg  bg-light navbar-light">
			<a class="navbar-brand navbar-header text-uppercase">Online shopping Cart</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>

			<div class="collapse navbar-collapse ml-5 text-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-uppercase">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link text-uppercase" href="logout.php">Log Out</a>
					</li>

				</ul>
			</div>
		</nav>

	 	<div class="container">
			<div class="row mt-5">

			<?php

				$DBhost = "localhost";
				$DBuser = "root";
				$DBpass = "";
				$DBname = "mobile";

				//Create connection
				$conn = mysqli_connect($DBhost, $DBuser, $DBpass,$DBname);

				//Check connection
				if (!$conn)
				{
					die("Connection failed: " . mysqli_connect_error());
				}
				//echo "Connected successfully";

				$query = "SELECT * FROM shopping WHERE id='1'";

				$queryFire = mysqli_query($conn , $query) or die(mysqli_error($conn));
				$row = mysqli_fetch_array($queryFire)
			?>
					<div class="col-lg-3 col-md-3 col-sm-12">
						<form>
							<div class="card">
								<h6 class="car-title bg-primary text-white p-2 text-uppercase text-center"><?php echo $row['name']?></h6>
								<div class="card-body">
									<a href="RedMiNote4.html"><img src=" <?php echo $row['image'] ?>" class="img-fluid mb-2 text-center" alt="Phone" ></a>
									<h6> &#8377 <?php echo $row['price']; ?><span> (<?php echo $row['discount']; ?>% off)</span></h6>
									<h6 class="badge badge-success">4.4 <i class="fa fa-star"></i></h6>
									<input type="text" name="" class="form-control" placeholder="Quantity">
								</div>
								<div class="btn-group d-flex">
									<button class="btn btn-success flex-fill">Add to Cart</button>
									<button class="btn flex-fill text-white btn-warning">Buy Now </button>
								</div>
							</div>			
						</form>
					</div>
				<?php
					
				$query = "SELECT * FROM shopping WHERE id='2'";

				$queryFire = mysqli_query($conn , $query) or die(mysqli_error($conn));
				$row = mysqli_fetch_array($queryFire)
				
				?>
					<div class="col-lg-3 col-md-3 col-sm-12">
						<form>
							<div class="card">
								<h6 class="car-title bg-primary text-white p-2 text-uppercase text-center"><?php echo $row['name']?></h6>
								<div class="card-body">
									<a href="Samsung1.html"><img src=" <?php echo $row['image'] ?>" class="img-fluid mb-2 text-center" alt="Phone" ></a>
									<h6> &#8377 <?php echo $row['price']; ?><span> (<?php echo $row['discount']; ?>% off)</span></h6>
									<h6 class="badge badge-success">4.4 <i class="fa fa-star"></i></h6>
									<input type="text" name="" class="form-control" placeholder="Quantity">
								</div>
								<div class="btn-group d-flex">
									<button class="btn btn-success flex-fill">Add to Cart</button>
									<button class="btn flex-fill text-white btn-warning">Buy Now </button>
								</div>
							</div>			
						</form>
					</div>
				<?php
					
				$query = "SELECT * FROM shopping WHERE id='3'";

				$queryFire = mysqli_query($conn , $query) or die(mysqli_error($conn));
				$row = mysqli_fetch_array($queryFire)
				
				?>
					<div class="col-lg-3 col-md-3 col-sm-12">
						<form>
							<div class="card">
								<h6 class="car-title bg-primary text-white p-2 text-uppercase text-center"><?php echo $row['name']?></h6>
								<div class="card-body">
									<a href="Iphone1.html"><img src=" <?php echo $row['image'] ?>" class="img-fluid mb-2 text-center" alt="Phone" ></a>
									<h6> &#8377 <?php echo $row['price']; ?><span> (<?php echo $row['discount']; ?>% off)</span></h6>
									<h6 class="badge badge-success">4.4 <i class="fa fa-star"></i></h6>
									<input type="text" name="" class="form-control" placeholder="Quantity">
								</div>
								<div class="btn-group d-flex">
									<button class="btn btn-success flex-fill">Add to Cart</button>
									<button class="btn flex-fill text-white btn-warning">Buy Now </button>
								</div>
							</div>			
						</form>
					</div>

				<?php
					
				$query = "SELECT * FROM shopping WHERE id='4'";

				$queryFire = mysqli_query($conn , $query) or die(mysqli_error($conn));
				$row = mysqli_fetch_array($queryFire)
				
				?>

					<div class="col-lg-3 col-md-3 col-sm-12">
						<form>
							<div class="card">
								<h6 class="car-title bg-primary text-white p-2 text-uppercase text-center"><?php echo $row['name']?></h6>
								<div class="card-body">
									<a href="RealMe1.html"><img src=" <?php echo $row['image'] ?>" class="img-fluid mb-2 text-center" alt="Phone" ></a>
									<h6> &#8377 <?php echo $row['price']; ?><span> (<?php echo $row['discount']; ?>% off)</span></h6>
									<h6 class="badge badge-success">4.4 <i class="fa fa-star"></i></h6>
									<input type="text" name="" class="form-control" placeholder="Quantity">
								</div>
								<div class="btn-group d-flex">
									<button class="btn btn-success flex-fill">Add to Cart</button>
									<button class="btn flex-fill text-white btn-warning">Buy Now </button>
								</div>
							</div>			
						</form>
					</div>

					<?php
				
			?>

		</div>
	</div>

	<div class="footer">
		<p>&copy 2020 | VIIT.</p>
	</div>
</body>
</html>