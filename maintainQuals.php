<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sas";
$con = new mysqli($servername, $username, $password, $dbname);

if(!$con) {
  die("Connect failed!");
}


$sql = 'SELECT *
		FROM qualification';

$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
<html>
<head>
	<title>Maintain Qualification</title>
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
	<style type="text/css">
		body {
			font-size: 16px;
			color: gray;
			font-family: "Rubik", arial, sans-serif;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Rubik", arial, sans-serif;
			font-size: 15px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 16px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
</section>
<!-- Section: Products v.4 -->
      <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">level-up</a>
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
                <a class="nav-link" href="university.html">University</a>
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

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(students3.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">

            <div class="mb-5 element-animate">
              <h1 class="mb-2">Qualifications</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Qualifications</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">List of Qualifications</h2>
	<table class="data-table">

		<thead>
			<tr>
				<th>Name</th>
				<th>Maximum Score</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{

			echo '<tr>
					<td>'.$row['qualificationName'].'</td>
					<td>'.$row['maximumScore'].'</td>
				</tr>';
		}?>
		</tbody>

	</table>
  <br> <br>
            <button type="button" class="btn btn-primary" onclick="location.href='add-qualification.html'">Add Qualification</button>
          </div>
        </div>
      </div>
    </div>
  </section>

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
