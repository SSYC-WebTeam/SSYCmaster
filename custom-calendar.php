<?php
/*
Template Name: Calendar Template
*/
?>
<?php get_header(); ?>

     <div id="middle">
     
         <div class="wrapper">
                        
             <div id="breadcrumbs">
                 
                 <?php the_breadcrumb(); ?>
                 
                 
      
             </div> <!-- #breadcrumbs -->
                
<aside id="primary">
                    
<?php
/**
 * Map View Template
 * The wrapper template for map view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/map.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php do_action( 'tribe_events_before_template' ); ?>

<!-- Google Map Container -->
<?php tribe_get_template_part( 'pro/map/gmap-container' ) ?>

<!-- Tribe Bar -->
<?php tribe_get_template_part( 'pro/widgets/list' ); ?>

<div class="tribe-clear"></div>
    
            
<div class="tribe-mini-calendar-list-wrapper">
	<div class="tribe-events-loop">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php do_action( 'tribe_events_mini_cal_list_inside_before_loop' ); ?>

			<!-- Event  -->
			<div class="<?php tribe_events_event_classes() ?>">
				<?php tribe_get_template_part( 'pro/widgets/modules/single-event' ) ?>
			</div>

			<?php do_action( 'tribe_events_mini_cal_list_inside_after_loop' ); ?>
		<?php endwhile; ?>
        
	</div><!-- .tribe-events-loop -->
</div> <!-- .tribe-mini-calendar-list-wrapper -->
                    
</aside> <!-- end #primary -->                                
            
            <div id="content">    
              
            <?php if (have_posts()) : ?>
                
                <?php while (have_posts()) : the_post(); ?>
                    
                <!--post-->
                <?php the_content();?>
                
                <?php endwhile; ?>
                
                <?php else : ?>
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                
                <?php endif; ?>
            </div> <!-- end #content --> 
     	
        </div> <!-- end .wrapper -->                         
    </div> <!-- end #middle -->

<?php get_footer(); ?>
