<?php get_header(); ?>

<div id="middle">

        <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>

        <div class="slideshow"><!--Slideshow-->
            <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/severance8-web.jpg" alt="slides" />
        </div>

		<?php endwhile; ?>
        
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?> 
        <?php endif; ?>
        
	<div class="wrapper">
    
        <aside> 
            <?php get_sidebar(); ?>
        </aside>
 
	</div> <!--end .wrapper-->

</div> <!-- end #middle -->   

<?php get_footer(); ?>