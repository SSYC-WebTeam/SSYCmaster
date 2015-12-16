<?php
/*
Template Name: Calendar Template
*/
?>
<?php get_header(); ?>

<body id="page-template">

     <div id="middle">
     
         <div class="wrapper">
                        
             <div id="breadcrumbs">
                 
                 <?php the_breadcrumb(); ?>
      
             </div> <!-- #breadcrumbs -->
                
<aside id="primary">
    
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
<?php tribe_get_template_part( 'modules/bar' ); ?>

<!-- Main Events Content -->
<?php tribe_get_template_part( 'pro/map/content' ) ?>

<div class="tribe-clear"></div>            
                    
</aside> <!-- end #primary -->                                
            
            <div id="content">    
              
            <?php if (have_posts()) : ?>
                
                <?php while (have_posts()) : the_post(); ?>
                        
                <h2><?php the_title();?></h2>
        
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
</body><!--end page-template-->

<?php get_footer(); ?>
