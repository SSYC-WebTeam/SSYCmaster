<!DOCTYPE html>
<html>
<head>
<title><?php wp_title() ?></title>

<!--Description meta-->
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<!--Style sheets-->
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

<!-- call jquery for the toggle nav -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<!-- Toggle Menu Script -->
<script type="text/javascript">
	$(window).load(function() { // enable function upon window load
	$("#toggle-icon").click(function() { // when link is clicked...
	$("#nav-toggle").toggle(); // ... open or close the navigation list
	});
	});
</script>
<!-- End Toggle Menu Script -->

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body id="front-template">
	<body <?php body_class($class); ?>>
	
	<div id="wrapper">

    <!-- HEADER -->
    <header>

    <!-- LOGO -->
	<h1>
    <a href="javascript:;">
    	<img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/ssyc-logo.png" alt="logo" /></a>

    <!-- TITLE -->
    	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>		
    </h1>

	<!-- NAV MAIN -->
    <nav id="nav-main">            
   		<?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
		) ); ?>
            
    </nav> <!-- end #nav-main -->
    
</header> <!-- end header -->

 <!-- NAV MOBILE -->
    <nav id="nav-mobile">
        <a id="toggle-icon" href="javascript:;">&#9776;  MENU</a>
        <ul id="nav-toggle">
            
            <?php wp_nav_menu( array(
				'theme_location' => 'toggle-menu' ,
				'menu' => 'Mobile Toggle Menu' ,
				'container' => 'ul' ,
				'menu_id' => 'nav-toggle' , )) ?>
            
        </ul> <!-- end #nav-toggle -->
    </nav>
    