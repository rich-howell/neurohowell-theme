<div class="card">  
	<a href="<?php the_permalink(); ?>">
		<div class="card-content">
			<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
			<div class="card-description"><?php the_excerpt(); ?></div>
		</div>
	</a>
</div>
