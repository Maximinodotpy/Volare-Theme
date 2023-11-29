<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volare
 */

?>

	<footer id="colophon" class="max-w-4xl px-4 pt-6 pb-12 mx-auto site-footer">
		<div class="my-8">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-2', // menu-2 is the footer
				'container' => false,
				'menu_class' => 'grid grid-cols-1 gap-4 sm:grid-cols-3',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb' => false
			) ); ?>
		</div>

		<div class="flex flex-col items-center justify-between gap-3 sm:flex-row site-info opacity-60">
			
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'volare' ) ); ?>" class="font-bold uppercase" target="_blank">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'volare' ), 'WordPress' );
				?>
			</a>
			
			<a href="https://github.com/Maximinodotpy/Volare-Theme" target="_blank" class="flex items-center gap-3">
				<p class="font-bold uppercase">VOLARE THEME@v<?php echo _VOLARE_VERSION ?></p>
				<img src="<?php echo get_template_directory_uri() . '/img/github-mark-white.svg'?>" alt="Github Logo" width="28" height="28">
			</a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
