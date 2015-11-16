<?php get_header(); ?>

<body id="page-template">

     <div id="middle">
                    
         <div id="breadcrumbs">
            	<p>Placeholder for breadcrumbs nav</p>
         </div> <!-- #breadcrumbs -->
            
         <aside id="primary">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-widget-top") || !dynamic_sidebar("left-widget-middle")|| !dynamic_sidebar("left-widget-bottom")) : 
                endif; ?>
		</aside> <!-- end #primary -->                                
        
    <div id="content">    
		<?php if (have_posts()) : ?>
		
        <?php while (have_posts()) : the_post(); ?>

	
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>

        		<!--post-->
        		<?php the_content();?>
        		
    	<?php endwhile; ?>
    	
    	<?php else : ?>
        		<h2 class="center">Not Found</h2>
        		<p class="center">Sorry, but you are looking for something that isn't here.</p>
        			<?php get_search_form(); ?>	
    	
        <?php endif; ?>

        </div> <!-- end #content -->                           
    </div> <!-- end #middle -->
</body><!--end page-template-->

<?php get_footer(); ?>