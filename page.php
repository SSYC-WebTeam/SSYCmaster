<?php get_header(); ?>

<body id="page-template">

     <div id="middle">
     
         <div class="wrapper">
                        
             <div id="breadcrumbs">
                 <?php the_breadcrumb(); ?>
             </div> <!-- #breadcrumbs -->
                
             <aside id="primary">
             	<h3>HOW TO JOIN</h3>
                <ul>
                    <li><a href="javascript:;">Loret Lipsuc</a></li>
                    <li><a href="javascript:;">Ut rhoncus tincidunt</a></li>
                    <li><a href="javascript:;">Etiam tincidun</a></li>
                    <li><a href="javascript:;">Loret Lipsuc</a></li>
                    <li><a href="javascript:;">Ut rhoncus tincidunt</a></li>
                    <li><a href="javascript:;">Etiam tincidun</a></li>
                    <li><a href="javascript:;">Loret Lipsuc</a></li>
                </ul>
                
                <h3>MEETINGS</h3>
                <ul>
                    <li><a href="javascript:;">Loret Lipsuc</a></li>
                    <li><a href="javascript:;">Ut rhoncus tincidunt</a></li>
                    <li><a href="javascript:;">Etiam tincidun</a></li>
                </ul>
                
                <h3>DUES</h3>
                <ul>
                    <li><a href="javascript:;">Loret Lipsuc</a></li>
                    <li><a href="javascript:;">Ut rhoncus tincidunt</a></li>
                    <li><a href="javascript:;">Etiam tincidun</a></li>
                </ul>
                
  
                   <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-widget-top") || !dynamic_sidebar("left-widget-middle")|| !dynamic_sidebar("left-widget-bottom")) : 
                    //endif; ?>
            </aside> <!-- end #primary -->                                
            
            <div id="content">    
               	<?php if (have_posts()) : ?>
                
                <?php while (have_posts()) : the_post(); ?>
            
            
                <h2>	<?php the_title();?></h2>
        
                <!--post-->
                <?php the_content();?>
                
                <?php endwhile; ?>
                
                <?php else : ?>
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                            <?php get_search_form(); ?>	
                
                <?php endif; ?>
        
                </div> <!-- end #content -->  
     	
        </div> <!-- end .wrapper -->                         
    </div> <!-- end #middle -->
</body><!--end page-template-->

<?php get_footer(); ?>