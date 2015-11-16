<!-- footer starts here -->		
<footer>

     <!-- NAV FOOTER -->    
        <nav id="nav-footer">
            <?php wp_nav_menu( array( 
				'theme_location' => 'footer-menu' ,
				'menu' => 'Footer Menu' ,
				'container'  => 'ul' )); ?>      
        </nav> <!-- end #nav-footer -->
</footer>
</div><!-- close wrapper div -->

<?php wp_footer(); ?>
	
</body>
</html>