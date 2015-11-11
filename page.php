<?php get_header(); ?>

<div id="wrapper">
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
		<?php if (have_posts()) : ?>
		
        <?php while (have_posts()) : the_post(); ?>

	<article class="post">			
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>

		<div class="content-entry"><!--post-->
			<?php the_content();?>
		</div>

	</article>

	<?php endwhile; ?>
	
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>	
	<?php endif; ?>

        </div> <!-- end #content -->                           
    </div> <!-- end #middle -->
</div><!-- end wrapper div -->

<?php get_footer(); ?>