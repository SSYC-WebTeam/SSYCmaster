<<<<<<< HEAD
<?php
?>
=======
>>>>>>> origin/master
<!DOCTYPE html>
<html>
<head>
<title>Template for page.html | Seattle Singles Yacht Club</title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<<<<<<< HEAD
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
=======
<!--Description meta-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
>>>>>>> origin/master

 <link href="style.css" rel="stylesheet" />   
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

<<<<<<< HEAD
=======
<!--Style sheets-->

>>>>>>> origin/master
</head>
<body id="page-template">

<<<<<<< HEAD
	<div id="wrapper">
        <!-- HEADER -->
        <header>
        
        	<!-- LOGO -->
        	<h1>
            	<a href="javascript:;">
                	<img src="images/ssyc-logo.png" alt="Seattle Singles Yacht Club Logo" id="logo"/>
                    <span>Seattle Singles Yacht Club</span>
            	</a>
            </h1>            
    
         	<!-- NAV MAIN -->
            <nav id="nav-main">
            
            	<ul>
                	<li><a href="javascript:;">About SSYC</a></li>
                    <li><a href="javascript:;">Membership</a></li>
                    <li><a href="javascript:;">Boating</a></li>
                    <li><a href="javascript:;">Events</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li class="end"><a href="javascript:;">Contact Us</a></li>
                </ul>
    </nav> <!-- end #nav-main -->
</header> <!-- end header -->
=======
<body <?php body_class($class); ?>>
<div id="container">
	<header class="">
	<hgroup class="screen-reader-text">
		<h1 id="site-title">
		<a href="<?php bloginfo('url'); ?>" title="<?php
bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<h2 id="site-description"><?php bloginfo( 'description' ); ?>
		</h2>		
		<div class="logo"><!--Logo-->
			<h3>Logo</h3>
			<img src="http://dummyimage.com/100x100" alt=" " />		
     	</div>		
	</hgroup>
	</header>
   
<nav id="nav-main">
	<?php wp_nav_menu( array('theme_location' => 'main')) ?>
</nav>

>>>>>>> origin/master
