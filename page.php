<?php get_header(); ?>

<div id="wrapper">
	<div id="content">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
		
		<div class="entrytext">
			<?php the_content(''); ?>
			<?php link_pages(''); ?>	
		<?php endwhile; endif; ?>	
		</div>>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>