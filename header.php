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
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

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
    
    <div id="wrapper">

<!-- HEADER -->
<header>

    <!-- LOGO -->
    <h1>                
        <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/ssyc-logo.png" alt="logo" />

    <!-- TITLE -->
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>       
    </h1>       

    <!-- NAV MAIN -->
    <nav id="nav-main">
        <?php wp_nav_menu( array('theme_location' => 'main')) ?>
    </nav> <!-- end #nav-main -->
    
</header> <!-- end header -->

<!-- NAV MOBILE -->
    <nav id="nav-mobile">
        <div class="menu-container">   
            <div id="toggle-icon">
                <a class="dropdown-toggle" title="Menu">&#9776;  MENU</a>   
            </div>           
                <ul class="nav-toggle" id="toggle-icon-items">
                    <ul>            
                        <?php wp_nav_menu( array(
                            'theme_location' => 'toggle-menu' ,
                            'menu' => 'Mobile Toggle Menu' ,
                            'container' => 'ul' ,
                            'menu_id' => 'nav-toggle')) ?>
                    </ul>               
                </ul> <!-- end #nav-toggle -->            
        </div><!-- .menu-container -->
    </nav>