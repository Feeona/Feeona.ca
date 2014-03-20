<!DOCTYPE HTML>
<html>
	<head>
		<title><?php wp_title(); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.dropotron.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/config.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('right-sidebar'); ?>>

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Header -->
								<header id="header">	
									<div class="inner">

										<!-- Logo -->
											<h1><a href="<?php echo home_url(); ?>" id="logo"><?php bloginfo('name'); ?></a></h1>

										<!-- Nav -->
											<nav id="nav">
												<?php wp_nav_menu(
													array( 
														'theme_location' => 'header-menu',
														'container' => false,

													) ); ?>
											</nav>
									</div>
								</header>

						</div>
					</div>
				</div>
			</div>

		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u">
									<div id="content skel-cell-important">