<?php
session_start();
$conn = new mysqli("localhost", "root","", "sas");


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$applicationID = $_SESSION['applicationID'];
$sql_get_applicants = "SELECT applicantID  FROM application WHERE applicationID = $applicationID;";

if ($result_sql_get_applicants = $conn->query($sql_get_applicants)) {
	$row_count_applicants =mysqli_num_rows($result_sql_get_applicants);

	if ($row_count_applicants>0) {
		$i = 1;
		while($row_count_applicants=mysqli_fetch_assoc($result_sql_get_applicants)) {
			$applicant_id[$i] = $row_count_applicants['applicantID'];
			$status[$i] = $row_count_applicants['status'];
			$qualification[$i] = $row_count_applicants['qualification'];

			$sql_applicant_details = "SELECT fname  FROM applicant WHERE applicantID = $applicant_id[$i];";
			$sql_score = "SELECT score FROM result WHERE applicantID = $applicant_id[$i];";
			$applicant_name = mysql_fetch_array($sql_applicant_details);
			$applicant_score = mysql_fetch_array($sql_score);
			$i++;
		}
	}
} else {
	$row_count_available_session = 0;
}




?>


<!doctype html>
<html lang="en">
<head>
	<title>Free Education Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header role="banner">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand absolute" href="index.html">StudentCourse</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link active" href="index.html">Home</a>
						</li>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="university.html">Unversity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="qualification.html">Qualification</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="programmes.html">Programme</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
				<ul class="navbar-nav absolute-right">
					<li>
						<a href="Login.html">Login</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
</header>
<!-- END header -->

<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
	<div class="container">
		<div class="row align-items-center justify-content-center site-hero-sm-inner">
			<div class="col-md-7 text-center">

				<div class="mb-5 element-animate">
					<h1 class="mb-2">List of Applicant</h1>
					<p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">List of Applicant</span></p>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- END section -->



<table class="table table-striped">
	<h2 class="h1-responsive  text-center my-5">List of Applicant</h2>
	<!-- Section description -->

	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Qualification</th>
			<th scope="col">Score</th>
			<th scope="col">status</th>
		</tr>
	</thead>
	<tbody>
<?php
    // Loop through the results from the database
for ($i = 1; $i <=$row_count_applicants; $i++) {
  echo
  "		<tr>
			<th>1</th>
			<td>echo $applicant_name</td>
			<td>echo $qualification[$i]</td>
			<td>echo $score</td>
			<td>echo $status</td>
		</tr>";
}
?>
		
		
	</tbody>
</table>
<div class="row" style="margin-bottom: 200px " >
	<div class="col-md-6 form-group text-center" style="margin-left: 350px; margin-top: 70px">
		<input type="submit" value="Save" class="btn btn-primary ">
	</div>
</div>


<footer class="site-footer border-top">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
				<h3>University</h3>
				<p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
			</div>
			<div class="col-md-6 col-lg-3 mb-5 mb-lg-0"  style="position: relative; left: 650px;">
				<h3 class="heading">Contact Information</h3>
				<div class="block-23">
					<ul>
						<li><span class="icon ion-android-pin"></span><span class="text">15, Jalan Semantan, Bukit Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</span></li>
						<li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+60 172224444</span></a></li>
						<li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
						<li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-md-12 text-center copyright">

				<p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<p class="float-md-right">
						<a href="#" class="fa fa-facebook p-2"></a>
						<a href="#" class="fa fa-twitter p-2"></a>
						<a href="#" class="fa fa-linkedin p-2"></a>
						<a href="#" class="fa fa-instagram p-2"></a>

					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- END footer -->

	<!-- loader -->
	<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>

	<script src="js/main.js"></script>
</body>
</html>