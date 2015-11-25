<!-- footer starts here -->		
<footer>	

	

     	<!-- NAV FOOTER -->    
        <nav id="nav-footer">
        
        	<div class="wrapper">
				<?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu' ,
                    'menu' => 'Footer Menu' ,
                    'container'  => 'ul' )); ?>      

			</div> <!-- end .wrapper -->

        </nav> <!-- end #nav-footer -->
        
        <div id="copyright">
        	<p><span class="small">&copy;2015 All rights reserved.</span></p>
        </div> <!-- end #copyright -->

                
</footer>
<!--</div>--><!-- close #wrapper -->

<?php //wp_footer(); ?>
	
</body>
</html>