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
        body{ font: 24px sans-serif; text-align: left; }
    </style>
</head>
<body>
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
					        <li><a class="menu" href="http://shreyans0601.pythonanywhere.com/">Chatbot </a></li>
					        <li><a class="menu" href="ref.php">Our Experts</a></li>
							<li><a class="menu" href="covid.php">COVID-19 Alert</a></li>
							<li><a class="menu" href="home.php">Home Solutions</a></li>
							<li><a class="menu" href="logout.php"> Log Out</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one10.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>covid-19</h1>
		               			<p>threats</p>
		               			
			                </div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of slider section -->
	<h1>What is COVID-19?</h1>
	<p>COVID-19 is a disease caused by a new strain of coronavirus. ‘CO’ stands for corona, ‘VI’ for virus, and
‘D’ for disease. Formerly, this disease was referred to as ‘2019 novel coronavirus’ or ‘2019-nCoV.’
The COVID-19 virus is a new virus linked to the same family of viruses as Severe Acute Respiratory
Syndrome (SARS) and some types of common cold.The outbreak of coronavirus disease (COVID-19) has been declared a Public Health Emergency of
International Concern (PHEIC) and the virus has now spread to many countries and territories. While a lot
is still unknown about the virus that causes COVID-19, we do know that it is transmitted through direct
contact with respiratory droplets of an infected person (generated through coughing and sneezing)
Individuals can also be infected from touching surfaces contaminated with the virus and touching their
face (e.g., eyes, nose, mouth). While COVID-19 continues to spread it is important that communities take
action to prevent further transmission, reduce the impacts of the outbreak and support control measures.
The protection of children and educational facilities is particularly important. Precautions are necessary to
prevent the potential spread of COVID-19 in school settings; however, care must also be taken to avoid
stigmatizing students and staff who may have been exposed to the virus. It is important to remember that
COVID-19 does not differentiate between borders, ethnicities, disability status, age or gender. Education
settings should continue to be welcoming, respectful, inclusive, and supportive environments to all.
Measures taken by schools can prevent the entry and spread of COVID-19 by students and staff who may
have been exposed to the virus, while minimizing disruption and protecting students and staff from
discrimination</p>
	<h1>What are the symptoms of COVID-19?</h1>
	<p>Symptoms can include fever, cough and shortness of breath. In more severe cases, infection can cause
pneumonia or breathing difficulties. More rarely, the disease can be fatal. These symptoms are similar to
the flu (influenza) or the common cold, which are a lot more common than COVID-19. This is why testing
is required to confirm if someone has COVID-19.</p>
	<img src="img/c.jpg" alt="covid">
	<h1>How does COVID-19 spread?</h1>
	<p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
through coughing and sneezing). Individuals can also be infected from and touching surfaces
contaminated with the virus and touching their face (e.g., eyes, nose, mouth). The COVID-19 virus may
survive on surfaces for several hours, but simple disinfectants can kill it.</p>
	<img src="img/o.jpg" alt="covid">
	<h1>Who is most at risk?</h1>
	<p>We are learning more about how COVID-19 affects people every day.Older people, and people with
chronic medical conditions, such as diabetes and heart disease, appear to be more at risk of developing
severe symptoms.  As this is a new virus, we are still learning about how it affects children. We know it is
possible for people of any age to be infected with the virus, but so far there are relatively few cases of
COVID-19 reported among children. This is a new virus and we need to learn more about how it affects
children. The virus can be fatal in rare cases, so far mainly among older people with pre-existing medical
conditions.</p>
	<img src="img/v.jpg" alt="covid">
	<h1>What is the treatment for COVID-19?</h1>
	<p>There is no currently available vaccine for COVID-19. However, many of the symptoms can be treated
and getting early care from a healthcare provider can make the disease less dangerous. There are
several clinical trials that are being conducted to evaluate potential therapeutics for COVID-19.</p>
	<h1>How can the spread of COVID-19 be slowed down or prevented?</h1>
	<p>As with other respiratory infections like the flu or the common cold, public health measures are critical to
slow the spread of illnesses. Public health measures are everyday preventive actions that include:
	<ul>
	<li>✓ staying home when sick</li>
	<li>✓ covering mouth and nose with flexed elbow or tissue when coughing or sneezing. Dispose of used tissue immediately</li>
	<li>✓ washing hands often with soap and water</li>
	<li>✓ cleaning frequently touched surfaces and objects.</li>
As we learn more about COVID-19 public health officials may recommend additional actions. </p>
	<img src="img/i.jpg" alt="covid">
</body>
</html>