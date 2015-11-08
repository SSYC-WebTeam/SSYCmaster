<?php get_header(); ?>

        <div id="middle">
                    
         <div id="breadcrumbs">
            	<p>Placeholder for breadcrumbs nav</p>
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
			</aside> <!-- end #primary --> 
                               
            <div id="content">
+
+	          <?php if (have_posts()) : ?>
+		
+		      <?php while (have_posts()) : the_post(); ?>
+				
+			    <h2><a href="<?php the_permalink() ?>" ></a><?php the_title(); ?></h2>
+	
+	          <?php endwhile; ?>
+	
+	          <?php endif; ?>                        
                        
            </div> <!-- end #content -->
                
        </div> <!-- end #middle -->
<?php get_footer(); ?>