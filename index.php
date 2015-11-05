<?php get_header(); ?>
<div id="wrapper">
 	 	<?php if (have_posts()) : ?>
		
        <?php while (have_posts()) : the_post(); ?>

	<article class="post">			
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
        <h3>Sideshow</h3>
		<div class="slideshow"><!--Slideshow-->
			<img src="http://dummyimage.com/600x300" alt=" " />
		</div>
	</article>

	<?php endwhile; ?>
	
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>	
	<?php endif; ?>
</div><!--end wrapper div-->

<aside>
	<h3>Sidebar</h3>
	<?php get_sidebar(); ?>
</aside>
    
<?php get_footer(); ?>