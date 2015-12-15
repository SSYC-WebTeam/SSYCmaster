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
             </div> <!-- #breadcrumbs -->
                
            <aside id="primary">
             
                             
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
