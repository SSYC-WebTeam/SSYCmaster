<aside id="aside-front"> 
    <!-- #left sidebar -->
    <div class="one-third-left">
        <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/calendar-icon.png" alt="calendar icon"/>
        <div class="textbox">
            <h3>UPCOMING EVENTS</h3>   
            
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
            
        <?php else : ?>
            
            <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
            <h4>Quisque ultrices</h4>
            <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
        
        <?php endif; ?>
            
<?php
endif;

// Cleanup. Do not remove this.
wp_reset_postdata();

?>   
            
         </div> <!-- end .textbox-->  
    </div> <!-- end .one-third -->

    <!-- #main sidebar -->           
    <div id="main-front">
        <div class="one-third-middle">
        <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/news-icon.png" alt="news-icon" />
        <div class="textbox">
            <h3>RECENT NEWS</h3>
            <h4>Loret Lipsum</h4>
            <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
            <h4>Quisque ultrices</h4>
            <p>Lorem ipsum dolor sit amet, iisque imperdiet definiebas id nam imperdiet. </p>
         </div> <!-- end .textbox-->  
        </div> <!-- end .one-third middle -->

    <!-- #right sidebar -->                  
    <div class="one-third-right last">
        <img src="<?php bloginfo('url'); ?>/wp-content/themes/SSYCmaster/images/anchor-icon.png" alt="anchor-icon"/>
        <div class="textbox">
            <h3>SSYC</h3>
            <h4>We saved you a seat!</h4>
            <p>Seattle Singles Yacht Club is an active organization of single adults who love boating and socializing, both on and off the water. The club welcomes experienced skippers, sailors and crew, as well as singles with minimal boating experience.</p>
         </div> <!-- end .textbox-->  
        </div> <!-- end .one-third -->                    
     </div> <!-- end #main-front -->  
</aside>