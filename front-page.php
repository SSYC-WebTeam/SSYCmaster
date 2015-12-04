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
        <?php endif; ?>
        
	<div class="wrapper">
    
        <aside id="aside-front"> 
            <?php get_sidebar(); ?>
        </aside>
 
	</div> <!--end .wrapper-->

</div> <!-- end #middle -->   

<?php get_footer(); ?>