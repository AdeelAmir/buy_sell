<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buy and Sell Multan</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/flags.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/chartist.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/dbresponsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-dashboardheader" class="tg-dashboardheader tg-haslayout">
			<nav id="tg-nav" class="tg-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="adlistinggrid.php">Ads</a>
						</li>
						<li>
							<a href="aboutus.php">About Us</a>
						</li>
						<li>
							<a href="contactus.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
			<div id="tg-sidebarwrapper" class="tg-sidebarwrapper">
				<span id="tg-btnmenutoggle" class="tg-btnmenutoggle">
					<i class="fa fa-angle-left"></i>
					
				</span>
				<div id="tg-verticalscrollbar" class="tg-verticalscrollbar">
					<strong class="tg-logo"><a href="javascript:void(0);"><img src="images/logod.png" alt="image description"></a></strong>
					<div class="tg-user">
						<figure>
							<span class="tg-bolticon"><i class="fa fa-bolt"></i></span>
							<a href="javascript:void(0);"><img src="images/author/img-07.jpg" alt="image description"></a>
						</figure>
						<div class="tg-usercontent">
							<h3>Hi! Angelena</h3>
							<h4>Administrator</h4>
						</div>
						<a class="tg-btnedit" href="javascript:void(0);"><i class="icon-pencil"></i></a>
					</div>
					<nav id="tg-navdashboard" class="tg-navdashboard">
						<ul>
							<li class="tg-active">
								<a href="dashboard-profile-setting.php">
									<i class="icon-cog"></i>
									<span>Profile Settings</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="dashboard-myads.php">
									<i class="icon-cog"></i>
									<span>All Ads</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="dashboard-postanad.php">
									<i class="icon-cog"></i>
									<span>Create Ads</span>
								</a>
							</li>
							<li class="tg-active">
								<a href="#">
									<i class="icon-cog"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Profile Settings</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">Profile Setting</li>
			</ol>
		</div>
		<!--************************************
				Dashboard Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard">
						<fieldset>
							<!--************************************
									Approved Ads Start
							*************************************-->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>Profile Detail</h2>
									</div>
									<div class="tg-dashboardholder">
										<div class="form-group">
											<strong>I’m a:</strong>
											<div class="tg-selectgroup">
												<span class="tg-radio">
													<input id="tg-mail" type="radio" name="gender" value="mail" checked>
													<label for="tg-mail">mail</label>
												</span>
												<span class="tg-radio">
													<input id="tg-femail" type="radio" name="gender" value="femail">
													<label for="tg-femail">femail</label>
												</span>
												<span class="tg-radio">
													<input id="tg-company" type="radio" name="gender" value="company">
													<label for="tg-company">Company</label>
												</span>
											</div>
										</div>
										<div class="form-group">
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email*">
										</div>
										<div class="form-group">
											<input type="text" name="firstname" class="form-control" placeholder="First Name*">
										</div>
										<div class="form-group">
											<input type="text" name="lastname" class="form-control" placeholder="Last Name*">
										</div>
										<div class="form-group">
											<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number*">
										</div>
										<div class="form-group">
											<label class="tg-fileuploadlabel" for="tg-photogallery">
												<span>Drop files anywhere to upload</span>
												<span>Or</span>
												<span class="tg-btn">Select File</span>
												<input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
											</label>
										</div>
										<button class="tg-btn" type="button">Update</button>
									</div>
								</div>
							</div>
							<!--************************************
									Approved Ads End
							*************************************-->
							<!--************************************
									Approved Ads Start
							*************************************-->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>Change Password</h2>
									</div>
									<div class="tg-dashboardholder">
										<div class="form-group">
											<input type="password" name="currentpassword" class="form-control" placeholder="Current Password">
										</div>
										<div class="form-group">
											<input type="password" name="newpassword" class="form-control" placeholder="New Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm New Password">
										</div>
										<button class="tg-btn" type="button">Change Now</button>
									</div>
								</div>
							</div>
							<!--************************************
									Approved Ads End
							*************************************-->
						</fieldset>
					</form>
				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<nav class="tg-footernav">
				<ul>
					<li><a href="javascript:void(0);">Listing Policy</a></li>
					<li><a href="javascript:void(0);">Terms of Use</a></li>
					<li><a href="javascript:void(0);">Privacy Policy</a></li>
				</ul>
			</nav>
			<span class="tg-copyright">2017 All Rights Reserved &copy; Classified PRO</span>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="JS/responsivethumbnailgallery.html"></script>
	<script src="js/jquery.flagstrap.min.js"></script>
	<script src="js/backgroundstretch.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/jquery.collapse.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="JS/chartist.min.html"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from exprostudio.com/html/classified/dashboard-profile-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2020 12:25:48 GMT -->
</html>