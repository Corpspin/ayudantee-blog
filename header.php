<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,500,700" rel="stylesheet">
		<?php wp_get_archives('type=monthly&format=link'); ?>

		<?php wp_head(); ?>
	</head>

	<body>
		<!-- HEADER -->
		<nav class="navbar navbar-default navbar-fixed-top nav-home smaller">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-bars"></i>
					</button>

					<a class="navbar-brand" href="/">
						<img src="<?php echo get_bloginfo('template_directory');?>/img/logo-white.png">
					</a>
				</div>

				<div class="collapse navbar-collapse" id="menu">          
					

					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'header-menu',
							'container'       => 'ul',
							'container_id'    => FALSE,
							'menu_class'      => 'nav navbar-nav navbar-right',
							'menu_id'         => FALSE,
							'depth'           => 1,
							)
						);
					?>
				</div>
			</div>
		</nav>
		<!-- FIN HEADER -->