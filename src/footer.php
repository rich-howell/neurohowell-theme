<?php
/**
 * The template for the common footer on every page.
 *
 * @package neurohowell-theme
 */

?>

<footer>
	<div class="content">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container'      => '',
			)
		);
		?>

		<div class="copyright">
			<span class="copyright-date">Copyright&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
