<?php
/**
 * Template Name: Resource Directory
 *
 * @package neurohowell-theme
 */

get_header();

$cw_theme_args       = array(
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'post_type'      => 'resource',
	'orderby'        => 'title',
	'order'          => 'ASC',
);
$cw_theme_blog_query = new WP_Query( $cw_theme_args );
?>
<main>
	<article class='h-entry page-index' itemscope='' itemtype='http://schema.org/BlogPosting'>
		<div class="container">
			<div class="content-header">
				<h1 class="title post-title p-name" itemprop="name headline">All Resources</h1>
				<p class="description"><?php printf( '<span class="post-count">%d</span> resources found.', intval( $cw_theme_blog_query->found_posts ) ); ?></p>
			</div>
			<div class="content-search">
				<form action="/" method="get">
					<label for="search">Search all content</label>
					<input type="text" name="s" id="search" placeholder="Search all content" value="<?php the_search_query(); ?>" />
					<input type="submit" alt="Search" value="Search"  />
				</form>
			</div>
			<div class="content e-content" itemprop="articleBody" style="margin-top:20px;">
				<div class="card-grid">
				<?php
				if ( $cw_theme_blog_query->have_posts() ) {

					/* Start the Loop */
					while ( $cw_theme_blog_query->have_posts() ) {
						$cw_theme_blog_query->the_post();
						?>
							
								<?php get_template_part( 'partials/resource-content', get_post_format() ); ?>
						<?php
					}
				}
				?>
				
			</div>		
	</article>

</main>
<?php
get_footer();
