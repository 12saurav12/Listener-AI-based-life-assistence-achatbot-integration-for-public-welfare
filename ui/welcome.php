<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php echo "Lifeline";?></title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px ariel black; text-align: center; background-image:  url("img/bg1.jpg"); background-repeat: no-repeat; background-size: cover;}
    </style>
</head>
<body>
	<div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You are now a part of our family!!.</h1>
    </div>
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo2.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="welcome.php" ><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a></li>
					        <li><a class="menu" href="reset-password.php">Reset Password</a></li>
					        <li><a class="menu" href="http://192.168.29.105:90/">Chatbot </a></li>
					        <li><a class="menu" href="ref.php">Our Experts</a></li>
							<li><a class="menu" href="covid.php">COVID-19 Alert</a></li>
							<li><a class="menu" href="home.php">Home Solutions</a></li>
							<li><a class="menu" href="dia.php">Diagnosis</a></li>
							<li><a class="menu" href="logout.php"> Log Out</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	<h1>.</h1>
	<h1>.</h1>
	<h1>.</h1>
	<h1>.</h1>
    <h1>WELCOME TO LIFELINE!!!</h1>
	<h3>We are so psyched that you are here<h3>
	<h3>Here, you would be provided the answers to all your health related queries by our very own chatbot which will enhance your experience.</h3>
	<h2>So guys ask away!!!</h2>
	<h3>After all your queries are solved, we also provide you the information of all the experts in every field to help you select the right doctor according to your need</h3>
	<h3>We have also contributed towards spreading awareness about covid 19 which poses a serious threat to people and dedicated a small part to provide you with all necessary intel related to it.</h3> 
		
</body>
</html>