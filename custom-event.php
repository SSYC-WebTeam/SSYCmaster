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
                    global $post;   
                    if (!is_home()) {
                        echo '<a href="';
                        echo get_option('home');
                        echo '">';
                        bloginfo('name');
                        echo "</a> / ";

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
