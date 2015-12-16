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

<?php
do_action( 'tribe_events_after_template' );
                
                    
            </aside> <!-- end #primary -->                                
            
            <div id="content">    
              
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
        
            </div> <!-- end #content -->  
     	
        </div> <!-- end .wrapper -->                         
    </div> <!-- end #middle -->
</body><!--end page-template-->

<?php get_footer(); ?>
