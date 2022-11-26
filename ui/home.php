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
		.btn { 
            text-decoration: none; 
            border: none; 
            padding: 12px 40px; 
            font-size: 16px; 
            background-color: green; 
            color: #fff; 
            border-radius: 5px; 
            box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24); 
            cursor: pointer; 
            outline: none; 
            transition: 0.2s all; 
        } 
        /* Adding transformation when the button is active */ 
          
        .btn:active { 
            transform: scale(0.98); 
            /* Scaling button to 0.98 to its original size */ 
            box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24); 
            /* Lowering the shadow */ 
        } 
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
	<h1>.</h1>
	<h1>.</h1>
	<h1>.</h1>
	<h1>.</h1>
	<h1 align=center>HOME SOLUTIONS</h1>
	</section><!-- end of slider section -->
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/a.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>E</h1>
					</div>
					<h3>Burning Eyes</h3>
					<p>For fast relief consider these natural remedies -rinse your eyelids with lukewarm water. Rinsing can remove allergens and irritants from your eye, reducing inflammation and dryness,soak a cloth in warm water, and then apply the warm compress over closed eyes for a few minutes several times a day or mix a small amount of baby shampoo with warm water. Dip a cotton swab into the water, and then use it to clean the base of your eyelashes. This method unclogs oil glands and minimizes inflammation.</p>
                    <button class="btn"><a href="https://www.medicalnewstoday.com/articles/321739">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/ab.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>S</h1>
					</div>
					<h3>Upset Stomach</h3> 
					<p>Taking an antacid or anti-wind medication and eating smaller meals may help to relieve heartburn or wind. It's best to avoid taking aspirin or ibuprofen as these medications can worsen some abdominal pain.When the body is horizontal, the acid in the stomach is more likely to travel backward and move upward, which can cause heartburn.People with an upset stomach should avoid lying down or going to bed for at least a few hours until it passes. Someone who needs to lie down should prop up their head, neck, and upper chest with pillows, ideally at a 30-degree angle.</p>
                    <button class="btn"><a href=" https://www.medicalnewstoday.com/articles/322047">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/h.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>B</h1>
					</div>
					<h3>Breathing Problem</h3>
					<p>Many people experience shortness of breath while they sleep. This can lead to waking up frequently, which can diminish the quality and duration of your sleep.Try lying on your side with a pillow between your legs and your head elevated by pillows, keeping your back straight. Or lie on your back with your head elevated and your knees bent, with a pillow under your knees.Both of these positions help your body and airways relax, making breathing easier. Have your doctor assess you for sleep apnea and use a CPAP machine if recommended.</p>
					<button class="btn"><a href="healthline.com/health/home-treatments-for-shortness-of-breath#sleeping-in-a-relaxed-position">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/g.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>J</h1>
					</div>
					<h3>Joint pain</h3>
					<p>Stay physically active and follow a fitness program focusing on moderate exercise.Stretch before exercising to maintain a good range of motion in your joints.</p>
					<button class="btn"><a href="https://www.healthline.com/health/joint-pain#treatment">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/e.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>P</h1>
					</div>
					<h3>Period Cramps</h3>
					<p>Use a hot water bottle if required to alleviate discomfort from cramps and eat iron-rich whole foods because your body loses blood.Taking pain medication such as ibuprofen or paracetamol may help to relieve menstrual cramps and pain. Using a heating pad may also help.</p>
					<button class="btn"><a href="https://www.healthline.com/health/womens-health/menstrual-cramp-remedies">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	<section class="about text-center" id="about">
		<div class="col-md-4 col-sm-6">
			<div class="single-about-detail clearfix">
				<div class="about-img">
					<img class="img-responsive" src="img/we.jpg" alt="">
				</div>
				<div class="about-details">
					<div class="pentagon-text">
						<h1>S</h1>
					</div>
					<h3>Sore Throat</h3>
					<p>Apple cider vinegar (ACV) has many natural antibacterial usesTrusted Source. Numerous studies show its antimicrobial effectsTrusted Source in fighting infections. Because of its acidic nature, it can be used to help break down mucus in the throat and stop bacteria from spreading.Gargling with warm salt water can help soothe a sore throat and break down secretions. It’s also known to help kill bacteria in the throat. Make a saltwater solution with a half-teaspoon of salt in a full glass of warm water. Gargle it to help reduce swelling and keep the throat clean. This should be done every three hours or so.</p>
					<button class="btn"><a href="https://www.healthline.com/health/cold-flu/sore-throat-natural-remedies#salt-water">Learn more</a></button>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>
	