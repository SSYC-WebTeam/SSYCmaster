<?php get_header(); ?>

     <div id="middle">
     
         <div class="wrapper">
                        
             <div id="breadcrumbs">
                 <?php the_breadcrumb(); ?>
             </div> <!-- #breadcrumbs -->
                
             <aside id="primary">
              <?php
                if($post->post_parent)
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
                else
                $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
                if ($children) {?>  
                <ul>
                    <?php echo $children; ?>
                </ul>              
              <?php } ?>
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

<?php get_footer(); ?>