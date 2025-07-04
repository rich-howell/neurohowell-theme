<?php
/**
 * Template Name: Blog
 *
 * @package neurohowell-theme
 */

get_header();

$no_theme_args = array(
	'posts_per_page' => -1,
	'post_type'      => 'post',
	'post_status'    => 'publish',

);
$no_theme_blog_query = new WP_Query( $no_theme_args );

?>
<main>
	<article class='h-entry page-index' itemscope='' itemtype='http://schema.org/BlogPosting'>
		<div class="container">
			<div class="content-header">
				<h1 class="title post-title p-name" itemprop="name headline">All Posts</h1>
				<p class="description"><?php printf( '<span class="post-count">%d</span> posts found.', intval( $no_theme_blog_query->found_posts ) ); ?></p>
			</div>
			<div class="content-search">
				<form action="/" method="get">
					<label for="search">Search all content</label>
					<input type="text" name="s" id="search" placeholder="Search all content" value="<?php the_search_query(); ?>" />
					<input type="submit" alt="Search" value="Search"  />
				</form>
			</div>
			<div class="content-categories">
				<div class="categories">
					Filter Posts: <a href="/blog" class="category">All Posts</a>
					<?php
					$no_theme_categories = get_categories(
						array(
							'orderby' => 'name',
							'order'   => 'ASC',
						)
					);

					foreach ( $no_theme_categories as $no_theme_category ) {
						printf( '<a href="%s" class="category">%s Posts</a>', esc_url( get_category_link( $no_theme_category->term_id ) ), esc_html( $no_theme_category->name ) );
					}
					?>
				</div>
			</div>
			<div class="content e-content" itemprop="articleBody">
				<?php
				if ( $no_theme_blog_query->have_posts() ) {

					/* Start the Loop */
					while ( $no_theme_blog_query->have_posts() ) {
						$no_theme_blog_query->the_post();
						?>

												
								<div class="posts">						
									<a class="post" href="<?php the_permalink(); ?>">
										<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
										<span class="post-day"><?php the_date( 'M j' ); ?></span>
										</a>
						<?php
					}
				}
				?>
								</div>
							
			</div>
	</article>

</main>
<?php
get_footer();
