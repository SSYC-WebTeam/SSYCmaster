<?php
/*
 * The template for homepage.
 */
?>

<?php get_header(); ?>
<div id="content-full">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="post-home<?php if( $wp_query->current_post%4 == 0 ) echo ' left'; elseif ( $wp_query->current_post%4 == 3 ) echo ' right'; ?>">

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div class="sticky">
				<h5><?php _e( 'Featured post', 'gridbulletin' ); ?></h5>
			</div>
		<?php endif; ?>

		<h5 class="post-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permalink to %s', 'gridbulletin'), the_title_attribute('echo=0')); ?>"> <?php the_title(); ?></a> 
		</h5>

		<?php if ( has_post_thumbnail() ) { 
			the_post_thumbnail('list', array('class' => 'list-image'));
		} ?>

		<?php the_excerpt(); ?>

		<div class="postmetadata">
			<?php printf( __( 'Posted on %s', 'gridbulletin' ), '<a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_date() ). '</a>' ); ?> | 
			<?php printf( __( 'By %s', 'gridbulletin' ), sprintf( '<a href="%1$s">%2$s</a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() ) ) ); ?>
			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : echo '|'; ?>
			<?php comments_popup_link( __( 'Leave a response', 'gridbulletin' ), __( '1 response', 'gridbulletin' ), __( '% responses', 'gridbulletin' ) ); ?><?php endif; ?>
		</div>

	</div>

	<?php endwhile; ?>

	<div class="post-nav">
		<?php next_posts_link(__( '&laquo; Older posts', 'gridbulletin' )); ?>
		<?php previous_posts_link(__( 'Newer posts &raquo;', 'gridbulletin' )); ?>
	</div>

	<?php else: ?>
		<h3 class="page-title"><?php _e( 'Nothing Found', 'gridbulletin' ); ?></h3>
		<p><?php _e('Sorry, no posts matched your criteria.', 'gridbulletin'); ?></p>
	<?php endif; ?>

</div>
<?php get_footer(); ?>