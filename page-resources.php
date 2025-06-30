<?php
/**
 * Template Name: Resources
 * Template Post Type: resource
 *
 * @package chriswiegman-theme
 */

get_header();
?>
<main>
	<article class='h-entry page-index'>
        <div class="container">
            <div class="content-header">
                <h1><?php the_title();?></h1>            
            </div>
		    <div class="content e-content" itemprop="articleBody">
                <?php the_content(); ?>
                <a href="<?php echo esc_url( the_field( 'resource_download_it' ) ); ?>" class="button">Download Now</a>

                <h2>What is this?</h2>
                <?php echo esc_html( the_field( 'resource_what_is_this' ) ); ?>

                <h2>Who is it for?</h2>
                <?php echo esc_html( the_field( 'resource_who_is_it_for' ) ); ?>

                <h2>How to use it</h2>
                <?php echo esc_html( the_field( 'resource_how_to_use_it' ) ); ?>

                <h2>Why I made this</h2>
                <?php echo esc_html( the_field( 'resource_why_i_made_this' ) ); ?>

                <h2>Download it</h2>
                <p><a href="<?php echo esc_url( the_field( 'resource_download_it' ) ); ?>" class="button">Download the resource (PDF)</a></p>
                <p><em>Version <?php echo esc_attr( the_field( 'resource_version' ) ); ?> – Last updated <?php echo esc_attr( the_field( 'resource_last_updated' ) ); ?> June 2025</em></p>

            </div>
        </div>
	</article>
</main>
<?php
get_footer();
