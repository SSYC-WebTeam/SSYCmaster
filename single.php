<?php get_header(); ?>
    <div class="wrapper">
   
       <div id="breadcrumbs">
            <?php the_breadcrumb(); ?>
       </div> <!-- #breadcrumbs -->

            <?php if (have_posts()) : ?>
            
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                     <small><?php the_time('F jS, Y, l') ?></small>
                     <h2><?php the_title(); ?></h2>  
                    <div class="entry">           
                        <?php the_content(''); ?>
                    </div>
                </div>
        <?php endwhile; ?>
    
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
        
        <?php get_sidebar(); ?>
        
</div> <!-- end #wrapper -->  

<?php get_footer(); ?>