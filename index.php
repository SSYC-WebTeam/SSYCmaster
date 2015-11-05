<?php get_header(); ?>
<div id="wrapper">
 	 	<?php if (have_posts()) : ?>
		
        <?php while (have_posts()) : the_post(); ?>

	<article class="post">			
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>

		<div class="entry-content"><!--//post-->
			<?php the_content();?>
		</div><!--//.entry-content-->
	</article>

	<?php endwhile; ?>
	
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>	
	<?php endif; ?>
</div>

<aside>
<?php get_sidebar(); ?>
</aside>
    
<?php get_footer(); ?>