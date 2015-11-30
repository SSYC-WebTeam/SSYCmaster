<?php get_header(); ?>

<div class="wrapper">    
        <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>

    <article class="post">          
        <h2><?php the_title(); ?></h2>
        <div class="entry">           
            <?php the_content(''); ?>
        </div>
    </article>

    <?php endwhile; ?>
    
    <?php else : ?>
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?> 
    <?php endif; ?>

<aside>    
    <?php get_sidebar(); ?>
</aside>

</div> <!-- end #wrapper -->  

<?php get_footer(); ?>