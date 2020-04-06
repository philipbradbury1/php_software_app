<?php ob_start(); ?>

<?php 
$basedir = dirname(__DIR__, 2);

require_once($basedir."/includes/init.php"); ?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/object_project/assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/object_project/assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Users - Layout 2 | Canvas</title>

</head>

<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="nobottomborder">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="/object_project/admin/index.php"><div>Home</div></a></li>
							<li><a href="/object_project/admin/users.php"><div>Users</div></a></li>
							<li><a href="/object_project/admin/jobs/jobs.php"><div>Jobs</div></a></li>
							<li><a href="#"><div>HR</div></a></li>
							<li><a href="/object_project/admin/logout.php"><div>Logout</div></a></li>
							
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

