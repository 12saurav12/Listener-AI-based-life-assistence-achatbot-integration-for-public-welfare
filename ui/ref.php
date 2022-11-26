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
    <!-- about section -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="row">
				<h1>.</h1>
				<h1>.</h1>
				<h1>.</h1>
                <h2>OUR EXPERTS</h2>
                <h4>We here at Lifeline work with highly qualified expert doctors who have great experience in their respective fields. Meet our experts who work around the clock to provide us with best services.
                    </h4>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="img/item18.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>C</h1>
                            </div>
                            <h3>Dr. Geeta Patra
                                CARDIOLOGIST
                            </h3>
                            <p>Dr. Geeta is a very experienced cardiologist and have recieved numerous awards for her work in medicine and research. Among the finest Cardiologists in the city, Dr. Geeta A. Samant in Goregao, Delhi  known for offering excellent patient care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="img/member22.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>G</h1>
                            </div>

                            <h3>Dr. Rakesh Jain
                                GYNAECOLOGIST
                            </h3>
                            <p>Dr. Rakesh Jain of the leading gynaecologists of the city, Dr. Meeta Ahuja (gungeet Hospital & Polyclinic) in Ulhasnagar No 5 has established the clinic and has gained a loyal clientele over the past few years and is also frequently visited by several celebrities, aspiring models and other honourable clients and international patients as wel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="img/item189.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>D</h1>
                            </div>
                            <h3>Dr. Sima Pandey
                                DERMATOLOGIST
                            </h3>
                            <p> MANAGING DIRECTOR & Founder Member – Skin Clinic,Mumbai.She is also a consultant at St Eliz hospital malabar hill.Dr.Geeta Oberoi has been a part of various medical conferences and events. She has been a Jury Panel for Skin Care at a number of Beauty Pageants across the country.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of about section -->


    


    <!-- team section -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>MEET SOME OTHER OF OUR TALENTED DOCTORS</h2>
                    <h4>Meet some of our extremely talented team of doctors.</h4>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="img/member11.jpg" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Rakesh Mehra</h3>
                        <p>Dr. Rakesh Mishra is a Consultant Oncologist with Diamond hospital, Global hospital and L H Kohinoor hospital. He primarily handles Solid Organ tumors and has 17 years of experience </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Gita Seth</h3>
                        <p> Dr. Gita Seth is a Senior Consultant Surgeon who trained extensively in hepato-biliary-pancreatic surgery and solid organ transplantation (liver, kidney and pancreas).Dr. Rai had further experience in living donor liver transplantation at Asan Medical center, Samsung Medical center in Seoul, Korea.  </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member19.jpg" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="img/member66.jpg" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Rahul Sharma</h3>
                        <p>Dr. Rahul is a Senior Consultant Surgeon who heads the Transplant program at Fort Hospital, Mumbai. Dr. Rahul has trained extensively in hepato-biliary-pancreatic surgery and solid organ transplantation (liver, kidney, pancreas).
                            Dr Rakesh Rai is Cancer Surgeon of Gastrointestinal tract, HPB Surgeon, Liver transplant</p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Rakesh Raju</h3>
                        <p> Dr. Rakesh Raju is Senior Consultant, Best Hepatobiliary and Transplant Surgeon at Fortis Hospital, Mumbai. Trained in the UK, the USA and Korea for 15 years, he does cadaver and living donor liver transplant and kidney transplant. The Hepatobiliary specialist in India is also an expert in pancreas transplant and liver and pancreatic surgery.</p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member44.jpg" alt="member-22">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="img/member55.jpg" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Geeta</h3>
                        <p>Dr. Geeta is a tech driven medical doctor, competent administrator, principal consultant and head of risk for Life, General, Accident & Health insurance business with 18+ years of relevant work experience in senior, progressively responsible positions in a multi-cultural environment of healthcare & insurance industry with solid track record. </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Siddharth</h3>
                        <p>Dr. Siddharth is a Delhi based renowned ‘Surgical Oncologist'(Cancer Surgeon; Cancer Specialist). He has done his super specialization in Surgical Oncology from the very prestigious ‘Tata Memorial Hospital’ in Mumbai. At ‘Tata’ he is trained in all types of Cancer Surgeries for over a period of six years. He has also done fellowships in On co surgery from the famous Kyushu University Japan , Anam University Seoul Kitea, CICE France.  </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member13.jpg" alt="member-5">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of team section -->

    

    
    

    <!-- script tags
    ============================================================= -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>