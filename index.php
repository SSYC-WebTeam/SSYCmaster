<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>index.php Seattle Singles Yacht Club</title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

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
        
        <div id="middle">
        
        	<!-- NAV MOBILE -->
    
    		<nav id="nav-mobile">
                <a id="toggle-icon" href="javascript:;">&#9776;  MENU</a>
                <ul id="nav-toggle">
                    <li><a href="javascript:;">About SSYC</a></li>
                    <li><a href="javascript:;">Membership</a></li>
                    <li><a href="javascript:;">Boating</a></li>
                    <li><a href="javascript:;">Events</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Contact Us</a></li>
                </ul>
        	</nav>
            
        	<img src="images/placeholder-spotlight-image.png" alt="image placeholder for spotlight image" class="spotlight"/>
           	
                <div class="one-third-left">
                    <h3><a href="javascript:;">UPCOMING EVENTS</a></h3>
                    <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam. Wisi aperiam ad duo, cu vidit graecis est, nam assum tritani instructior ne. Nulla tritani perfecto vix et, ut nam altera laoreet, posidonium concludaturque est an. Duo harum nominati no, cu dicant nostrum argumentum has</p>
                </div> <!-- end .one-third -->
            
            <div id="main-front">
            
                    <div class="one-third-middle">
                        <h3><a href="javascript:;">RECENT NEWS</a></h3>
                        <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam. Wisi aperiam ad duo, cu vidit graecis est, nam assum tritani instructior ne. Nulla tritani perfecto vix et, ut nam altera laoreet, posidonium concludaturque est an. Duo harum nominati no, cu dicant nostrum argumentum has</p>
                    </div> <!-- end .one-third -->
                
                    <div class="one-third-right last">
                        <h3><a href="javascript:;">SEO PARAGRAPH</a></h3>
                        <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam. Wisi aperiam ad duo, cu vidit graecis est, nam assum tritani instructior ne. Nulla tritani perfecto vix et, ut nam altera laoreet, posidonium concludaturque est an. Duo harum nominati no, cu dicant nostrum argumentum has</p>
                    </div> <!-- end .one-third -->
                
           	</div> <!-- end #main-front -->
            
        </div> <!-- end #middle -->
        
        <footer>
            
            <!-- NAV FOOTER -->
            <nav id="nav-footer">
            
            	<ul>
                	<li><a href="javascript:;">About SSYC</a></li>
                    <li><a href="javascript:;">Membership</a></li>
                    <li><a href="javascript:;">Boating</a></li>
                    <li><a href="javascript:;">Events</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Contact Us</a></li>
                </ul>
            
            </nav> <!-- end #nav-footer -->
            
        </footer>

	</div> <!-- end #wrapper -->
</body>
</html>