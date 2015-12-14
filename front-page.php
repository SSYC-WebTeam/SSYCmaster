<?php get_header(); ?>

<div id="middle">        
        
        <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>

            <div class="slideshow"><!--Slideshow-->       
            <?php
                if (is_front_page() || is_home()) {
                    echo do_shortcode("[metaslider id=211]"); 
                }
            ?>       
            </div>
          
        <?php endwhile; ?>
        
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>              
        <?php endif; ?>
        
    <div class="wrapper">
            
            <?php get_sidebar('event-widget'); ?>
         
    </div> <!--end .wrapper-->

</div> <!-- end #middle -->   

<?php get_footer(); ?>