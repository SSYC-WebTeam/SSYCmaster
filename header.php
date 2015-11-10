<?php
?>
<!DOCTYPE html>
<html>
<head>
<title><?php wp_title(); ?></title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all"/> 
    
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

</head>
    
<body id="front-template">
    
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
						'theme_location' => 'mobile-menu' ,
						'menu' => 'Mobile Menu' ,
						'container' => 'ul'
						'menu_id' => 'nav-toggle' ,
					)) ?>
                    
                </ul> <!-- end #nav-toggle -->
        	</nav>