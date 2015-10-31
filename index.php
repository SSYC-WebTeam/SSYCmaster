<?php get_header(); ?>
<div id="wrapper">
	

	<nav>

	<?php wp_nav_menu( array('theme_location' => 'main')) ?>

	</nav>
    
<aside>
<?php get_sidebar(); ?>
	<h3>BEST of the WEST! Destinations!</h3>
	
	<p>
	"On the other hand, we denounce with righteous indignation and 
	dislike men who are so beguiled and demoralized by the charms 
	of pleasure of the moment, so blinded by desire, that they cannot 
	foresee the pain and trouble that are bound to ensue; and equal 
	blame belongs to those who fail in their duty through weakness of 
	will, which is the same as saying through shrinking from toil and 
	pain. These cases are perfectly simple and easy to distinguish. In 
	a free hour, when our power of choice is untrammelled and when 
	nothing prevents our being able to do what we like best, every 
	pleasure is to be welcomed and every pain avoided.  The wise man therefore always 
	holds in these matters to this principle of selection: he rejects 
	pleasures to secure other greater pleasures, or else he endures 
	pains to avoid worse pains."
	</p>
    <figure>
    <img src="" alt="" >
    <figcaption>Blank</figcaption>
    </figure>

    
</aside>
    
<main>
    <div id="content">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<h2><a href="<?php the_permalink() ?>" <?php the_title(); ?>></a></h2>
	
	<?php endwhile; ?>
	
	<?php else : ?>
	
	<?php endif; ?>
	
	</div>
	<h1>Sailing the GREAT NORTH WEST!</h1><p>HeadLine1</p><br>
	
	<p>
	The standard Lorem Ipsum passage, used since the 1500s

	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
	eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut e
	nim ad minim veniam, quis nostrud exercitation ullamco laboris 
	nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
	reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
	pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
	accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
	quae ab illo inventore veritatis et quasi architecto beatae vitae 
	dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
	aspernatur aut odit aut fugit, sed quia consequuntur magni dolores 
	eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam 
	est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci 
	velit, sed quia non numquam eius modi tempora incidunt ut labore et 
	dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, 
	quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi 
	ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
	reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
	consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla "
	</p>

	<h2>NATURE ADVENTURE ATMO$PHERE </h2><p>HeadLine2</p><br>
	
	<p>1914 translation by H. Rackham</p>

	<p>
	"But I must explain to you how all this mistaken idea of denouncing 
	pleasure and praising pain was born and I will give you a complete 
	account of the system, and expound the actual teachings of the great 
	explorer of the truth, the master-builder of human happiness. No one 
	rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
	but because those who do not know how to pursue pleasure rationally 
	encounter consequences that are extremely painful. Nor again is there 
	anyone who loves or pursues or desires to obtain pain of itself, because 
	it is pain, but because occasionally circumstances occur in which toil and 
	pain can procure him some great pleasure. To take a trivial example, which 
    	but because those who do not know how to pursue pleasure rationally 
	encounter consequences that are extremely painful. Nor again is there 
	anyone who loves or pursues or desires to obtain pain of itself, because 
	it is pain, but because occasionally circumstances occur in which toil and 
	pain can procure him some great pleasure. To take a trivial example, which 
	</p>
    
    <figure>
    <img src="" alt="" >
    <figcaption></figcaption>
    </figure>

</main>

</div><!--end #wrapper div-->

<?php get_footer(); ?>