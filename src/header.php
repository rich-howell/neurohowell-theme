<?php
/**
 * The header template.
 *
 * @package chriswiegman-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="content">
		<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Rich Howell">Rich Howell</a></span>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => '',
			)
		);
		?>
	</div>
</header>
