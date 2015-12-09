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

<!-- THIS FUNCTION WILL GET THE URL ADDRESS TO FIN IT-->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-ssyc.ico" />

<!-- call jquery for the toggle nav -->
<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.10.2.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/toggle.js"></script> 
<!-- End Toggle Menu Script -->

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="https://code.jquery.com/jquery-1.10.2.js">
<link rel="stylesheet" type="text/css"
href="css/style.css" />
<![endif]-->
    
    <?php wp_head(); ?>
</head>

<body id="front-template">
    
    <!--<div id="wrapper">-->

<!-- HEADER -->
<header>
	<div class="wrapper">
    
    	<!-- LOGIN -->
    	<div class="login">
            <?php include_once("login_widgets.php"); ?>
    		<p>LOGIN<img class="arrow "src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/arrow-login-down.png" alt="down arrow" /></p>            
    	</div> <!-- end .login -->
    
        <!-- LOGO -->
      	<a href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/ssyc-logo.png" alt="logo" /></a>
    
        <!-- TITLE -->
        <h1> 
        <span>
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> 
       	</span>      
        </h1>       
    
    </div> <!-- end .wrapper -->
    
        <!-- NAV MAIN -->
        <nav id="nav-main">
            <div class="wrapper">
                <?php wp_nav_menu( array(
				'theme_location' => 'main-menu')) ?>
            <div class="wrapper">
        </nav> <!-- end #nav-main -->
    


<!-- NAV MOBILE -->
    <!--<nav id="nav-mobile">
        <div class="menu-container">   
            <div id="toggle-icon">
                <a class="dropdown-toggle" title="Menu">&#9776;  MENU</a>   
            </div>           
                <ul class="nav-toggle" id="toggle-icon-items">
                    <ul> -->           
                        <?php //wp_nav_menu( array(
                            //'theme_location' => 'toggle-menu' ,
                            //'menu' => 'Mobile Toggle Menu' ,
                            //'container' => 'ul' ,
                            //'menu_id' => 'nav-toggle')) ?>
                    <!--</ul>               
                </ul>--> <!-- end #nav-toggle -->
                
                <!-- START MOBILE NAVIGATION -->
            <nav id="nav-mobile">
            <a id="toggle-icon">&#9776;  MENU</a>
            <?php wp_nav_menu( array( 
                        'theme_location' => 'toggle-menu' ,
                        'menu' => 'Mobile Toggle Menu' ,
                        'container'  => 'ul',
						'menu_id' => 'nav-toggle' 
            
                    ) ); ?>
            
            </nav>
            
			<!-- END MOGILE NAVIGATION -->
                
                            
        </div><!-- .menu-container -->
    </nav>
    
</header> <!-- end header -->