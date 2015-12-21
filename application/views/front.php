<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title><?php echo $record['nama_perusahaan']; ?></title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/index/fonts/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.ico'); ?>">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url('assets/index/style.css'); ?>">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">

			<header class="site-header">
				<div class="container">
					<a href="<?php echo base_url(); ?>" class="logo"><h3><?php echo $record['nama_perusahaan']; ?></h3></a>
					
					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="menu-item"><a href="<?php echo base_url('index.php/auth/login_member'); ?>">Login</a></li>
							<li class="menu-item"><a href="<?php echo base_url('index.php/auth/registration'); ?>">Register</a></li>
							
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->
					
					<div class="mobile-navigation"></div>
				</div> <!-- .container -->
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="hero">
					<div class="container">
						<img src="<?php echo base_url('assets/index/images/imac.png'); ?>" alt="" class="imac">
						<a href="<?php echo base_url('index.php/auth/registration'); ?>" class="button">Try it now</a>
					</div>
				</div> <!-- .hero -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="col-md-4">
							<div class="feature">
								<i class="feature-icon"><img src="<?php echo base_url('assets/index/images/icon-server.png'); ?>" alt=""></i>
								<h2 class="feature-title">Multi Data Center</h2>
								<p><?php echo $record['nama_perusahaan']; ?> Have a lot of server from another location. Fast & Reliable transfer data</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature">
								<i class="feature-icon"><img src="<?php echo base_url('assets/index/images/icon-window.png'); ?>" alt=""></i>
								<h2 class="feature-title">User Friendly</h2>
								<p><?php echo $record['nama_perusahaan']; ?> Have a system very simple to use. You can create account only one click. </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature">
								<i class="feature-icon"><img src="<?php echo base_url('assets/index/images/icon-id-card.png'); ?>" alt=""></i>
								<h2 class="feature-title">Private Identity</h2>
								<p><?php echo $record['nama_perusahaan']; ?> Give your encrypt connection to hide your identity. And You wanna feel safe.</p>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- .main-content -->
		

		<script src="<?php echo base_url('assets/index/js/jquery-1.11.1.min.js'); ?>"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="<?php echo base_url('assets/index/js/plugins.js'); ?>"></script>
		<script src="<?php echo base_url('assets/index/js/app.js'); ?>"></script>
		
	</body>

</html>
