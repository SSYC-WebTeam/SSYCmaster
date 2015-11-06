<?php get_header(); ?>
<div id="wrapper">
    
<aside>
    <h3>Destinations!</h3>
<?php get_sidebar(); ?>
</aside>
    
<main>
    <div id="content">
	<?php if (have_posts()) : ?>	
        <?php while (have_posts()) : the_post(); ?>	
        
        <h2><a href="<?php the_permalink() ?>" <?php the_title(); ?>></a></h2>
	
	    <?php endwhile; ?>
	<?php else : ?>
	
	<?php endif; ?>
    </div>
</main>
    
</div><!-- end wrapper div -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>