<?php
/*
 * The template for displaying archive pages.
 */
?>

<?php get_header(); ?>
    <div class="wrapper">
   
       <div id="breadcrumbs">
            <?php the_breadcrumb(); ?>
       </div> <!-- #breadcrumbs -->

            <?php if (have_posts()) : ?>
                              
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                    <small><?php the_time('F jS, Y, l') ?></small>  
                    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>                          
                    <p class="postcategory">Posted in <?php the_category(', ') ?></p>
                    <?php the_excerpt(); ?>
                </div>
                
            <?php endwhile; ?>

            <?php else : ?>
                <h2 class="center">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>               
            <?php endif; ?>

            <?php get_sidebar('event-widget'); ?>
        
    </div> <!-- end #wrapper --> 

<?php get_footer(); ?>