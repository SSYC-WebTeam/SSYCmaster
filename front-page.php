<?php get_header(); ?>

<div id="middle">
    

       <div class="slideshow"><!--Slideshow-->
       		<img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/front-1900x510-1.jpg" alt="slides" />
        </div>

    
        <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>
        
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?> 
        <?php endif; ?>
        
	<div class="wrapper">
    
  		<aside id="aside-front"> 
			<!-- #left sidebar -->
        	<div class="one-third-left">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/calendar-icon.png" alt="calendar icon"/>
                <div class="textbox">
                    <h3>UPCOMING EVENTS</h3>
                    <h4>Loret Lipsum</h4>
                    <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
                    <h4>Quisque ultrices</h4>
                    <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
                 </div> <!-- end .textbox-->  
            </div> <!-- end .one-third -->

			<!-- #main sidebar -->           
            <div id="main-front">
                <div class="one-third-middle">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/news-icon.png" alt="news-icon" />
                <div class="textbox">
                    <h3>RECENT NEWS</h3>
                    <h4>Loret Lipsum</h4>
                    <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
                    <h4>Quisque ultrices</h4>
                    <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
                 </div> <!-- end .textbox-->  
                </div> <!-- end .one-third middle -->
     
    		<!-- #right sidebar -->                  
            <div class="one-third-right last">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/anchor-icon.png" alt="anchor-icon"/>
                <div class="textbox">
                    <h3>SSYC</h3>
                    <h4>We saved you a seat!</h4>
                    <p>Seattle Singles Yacht Club is an active organization of single adults who love boating and socializing, both on and off the water. The club welcomes experienced skippers, sailors and crew, as well as singles with minimal boating experience.</p>
                 </div> <!-- end .textbox-->  
                </div> <!-- end .one-third -->                    
             </div> <!-- end #main-front -->  
		</aside>
 
	</div> <!--end .wrapper-->

</div> <!-- end #middle -->   

<?php get_footer(); ?>