<!-- footer starts here -->		
<footer>	

	

     	<!-- NAV FOOTER -->    
        <nav id="nav-footer">
        
        	<div class="wrapper">
            
            	<div class="contact">
                    <ul>
                        <li>CONTACT</li>
                    </ul>
               	</div> 
                
                <ul class="sub-contact">

                    <li><img class="img-contact" src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/mail-icon.png" alt="email"/>   contact@ssyc.org</li>
                    
                    <li><a class="soc-facebook" href="#"></a></li>
                    <li><a class="soc-instagram soc-icon-last" href="#"></a></li>

                </ul>
        
				<?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu' ,
                    'menu' => 'Footer Menu' ,
                    'container'  => 'ul' )); ?>    

			</div> <!-- end .wrapper -->

        </nav> <!-- end #nav-footer -->
        
        <div id="copyright">
        	<p><span class="small">&copy;<?=date('Y')?> All rights reserved.</span></p>
        </div> <!-- end #copyright -->

                
</footer>
<!--</div>--><!-- close #wrapper -->

<?php wp_footer(); ?>
	
</body>
</html>