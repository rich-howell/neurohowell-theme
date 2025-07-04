<?php
/**
 * The main template file
 *
 * @package neurohowell-theme
 */

get_header();
?>

<main>
	<article class="hero">
		<div class="widget_text container">
			<div class="textwidget custom-html-widget"><div class="content">
				<div class="intro">
					<h1><?php echo esc_attr( get_field( 'hero_bio_title', 'option' ) ); ?></h1> 
					<?php echo esc_html( get_field( 'hero_bio', 'option' ) ); ?>
					</div>
					<img src="<?php echo esc_url( get_field( 'hero_bio_image', 'option' ) ); ?>" />
				</div>
			</div>
		</div>	
		<div class="container">
			<h2 class="main-header"><span>Recent Posts</span> <a href="/articles">View All</a></h2>
			<?php
			if ( have_posts() ) {

				/* Start the Loop */
				while ( have_posts() ) {
					the_post();
					?>
					<a class="post" href="<?php the_permalink(); ?>">
						<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
						<span class="post-day"><?php the_date( 'M j' ); ?></span>
					</a>
					<?php
				}
			} wp_reset_postdata();
			?>


			<div class="content-header" style="margin-top: 10px;">
				<h2 class="main-header"><span>Resources</span> <a href="/resources">View All</a></h2>			
			</div>
			<div class="content e-content" itemprop="articleBody">
				<div class="card-grid">
				<?php

					$args = array(
						'post_status'    => 'publish',
						'post_type'      => 'resource',
						'posts_per_page' => 4,
						'orderby'        => 'title',
						'order'          => 'ASC',
					);

					$the_posts   = new WP_Query( $args );
					$total_posts = $the_posts->found_posts;

					if ( $total_posts > 0 ) {
						?>
						<?php
						if ( $the_posts->have_posts() ) :
							while ( $the_posts->have_posts() ) :
									$the_posts->the_post();
								get_template_part( 'partials/resource-content', get_post_format() );
								endwhile;
							?>
							
							<?php
							endif;
						wp_reset_postdata();
						?>
					<?php } ?>
					</div>
						</div>
		</div> <!-- ./ Container -->
	</article>
</main>

<?php
get_footer();
