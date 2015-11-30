<?php get_header(); ?>

<div id="middle">    
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
</div><!-- end wrapper div -->

<aside>    
    <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>