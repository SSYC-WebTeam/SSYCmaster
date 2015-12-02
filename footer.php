<!-- footer starts here -->		
<footer>	

	

     	<!-- NAV FOOTER -->    
        <nav id="nav-footer">
        
        	<div class="wrapper">
				<?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu' ,
                    'menu' => 'Footer Menu' ,
                    'container'  => 'ul' )); ?> 
                    
          		<div class="contact">
                	<ul>
                    	<li><img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/images/phone-icon.png" alt="phone" />(206)555-1234</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>     

			</div> <!-- end .wrapper -->

        </nav> <!-- end #nav-footer -->
        
        <div id="copyright">
        	<p><span class="small">&copy;<?=date('Y')?> All rights reserved.</span></p>
        </div> <!-- end #copyright -->

                
</footer>
<!--</div>--><!-- close #wrapper -->

<?php //wp_footer(); ?>
	
</body>
</html>