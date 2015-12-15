<?php
/*
Template Name: Event Page Template
*/
?>
<?php get_header(); ?>

<body id="page-template">

     <div id="middle">
     
         <div class="wrapper">
                        
             <div id="breadcrumbs">
                 
                 <?php the_breadcrumb(); ?>
                 
             </div> <!-- #breadcrumbs -->
                 
                    <?php 

                    if (is_category() || is_single()) {
                            the_category('title_li=');
                            if (is_single()) {
                                echo " / ";
                                the_title();
                            }

                            } elseif(tribe_is_month()) {
                                echo '<a href="'.tribe_get_events_link().'">CALENDAR</a>';
                                echo " / ";
                                echo "<strong>";
                                echo '<a href="'.tribe_is_month().'">MONTHLY EVENTS</a>';
                                echo "</strong>";
                            } else if(tribe_is_list_view() && ! is_tax()) {
                                echo '<a href="'.tribe_get_events_link().'">CALENDAR</a>';
                                echo " / ";
                                echo "<strong>";
                                echo '<a href="'.tribe_is_list_view().'">EVENT LISTS</a>';
                                echo "</strong>";
                            } else if(tribe_is_day() && ! is_tax()) {
                                echo '<a href="'.tribe_get_events_link().'">CALENDAR</a>';
                                echo " / ";
                                echo "<strong>";
                                echo '<a href="'.tribe_is_day().'">SINGLE DAY</a>';
                                echo "</strong>";
                            } else if(tribe_is_day()) {
                                echo 'SINGLE DAY';
                            } else {
                                the_title();
                            }
                    }
             ?>
                
<aside id="primary">
                
<?php
/**
 * Events Pro Mini Calendar Widget
 * This is the template for the output of the mini calendar widget.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/mini-calendar-widget.php
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$args = tribe_events_get_mini_calendar_args();

?>

<!-- Removing this wrapper class will break the claendar javascript, please avoid and extend as needed -->

<div class="tribe-mini-calendar-wrapper">

	<!-- Grid -->
	<?php
	$month_widget_args = array(
		'tax_query' => $args['tax_query'],
		'eventDate' => $args['eventDate'],
		'suppress_nothing_found_notice' => true,
		'tribe_render_context' => 'widget',
	);

	/**
	 * Filter Mini Calendar Widget tribe_show_month args
	 *
	 * @param array $month_widget_args Arguments for the Mini Calendar Widget's call to tribe_show_month
	 */
	$month_widget_args = apply_filters( 'tribe_events_pro_min_calendar_widget_query_args', $month_widget_args );

	tribe_show_month( $month_widget_args, 'pro/widgets/mini-calendar/grid' ); ?>

	<!-- List -->
	<?php
	if ( 0 < $args['count'] ) {
		tribe_get_template_part( 'pro/widgets/mini-calendar/list', null, array( 'venue' => true ) );
	}
	?>
    
    
    
<?php
/**
 * Events Pro List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is highly needed.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/list-widget.php
 *
 * When the template is loaded, the following vars are set:
 *
 * @var string $start
 * @var string $end
 * @var string $venue
 * @var string $address
 * @var string $city
 * @var string $state
 * @var string $province
 * @var string $zip
 * @var string $country
 * @var string $phone
 * @var string $cost
 * @var array  $instance
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Retrieves the posts used in the List Widget loop.
$posts = tribe_get_list_widget_events();

// The URL for this widget's "View More" link.
$link_to_all = tribe_events_get_list_widget_view_all_link( $instance );

// Check if any posts were found.
if ( isset( $posts ) && $posts ) :

	foreach ( $posts as $post ) :
		setup_postdata( $post );
		do_action( 'tribe_events_widget_list_inside_before_loop' ); ?>

		<!-- Event  -->
		<div class="<?php tribe_events_event_classes() ?>">
			<?php tribe_get_template_part( 'pro/widgets/modules/single-event', null, $instance ) ?>
		</div>

		<?php do_action( 'tribe_events_widget_list_inside_after_loop' ) ?>

	<?php endforeach ?>

	<p class="tribe-events-widget-link">
		<a href="<?php esc_attr_e( esc_url( $link_to_all ) ) ?>" rel="bookmark">
			<?php esc_html_e( 'View More&hellip;', 'tribe-events-calendar-pro' ) ?>
		</a>
	</p>

<?php
// No Events were found.
else:
?>
	<p><?php printf( __( 'There are no upcoming %s at this time.', 'tribe-events-calendar-pro' ), strtolower( tribe_get_event_label_plural() ) ); ?></p>
<?php
endif;

// Cleanup. Do not remove this.
wp_reset_postdata();

?>
</div>
                   
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
