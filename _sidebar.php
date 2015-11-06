<!-- begin sidebar -->

<div id="sidebar">

	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

		<li><h2><?php ?></h2>
			<ul>
				<?php ?>
			</ul>
		</li>

		<li><h2><?php ?></h2>
			<ul>
				<?php ?>
			</ul>
		</li>

		<li><h2><?php ?></h2>
			<<ul>
				<?php ?>
			</ul>
		</li>	

	<?php get_links_list(); ?>

		<?php endif; ?>
	</ul>		
</div>		
<!-- end sidebar -->