<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="min-h-screen text-white bg-neutral-900">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'volare' ); ?></a>

	<header id="masthead" class="flex items-center justify-between max-w-4xl px-5 py-5 mx-auto site-header">
		<div class="flex items-center gap-3 text-xl font-bold">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$volare_description = get_bloginfo( 'description', 'display' );
			if ( $volare_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $volare_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="group">
			<button class="flex items-center gap-2 px-3 py-2 font-bold uppercase border rounded-md bg-neutral-800 hover:bg-neutral-700 border-neutral-700 hover:border-neutral-800">
				<img src="<?php echo get_template_directory_uri() . '/img/more-horizontal.svg' ?>" alt="">
				<div>Menu</div>
			</button>

			<nav class="absolute top-0 left-0 z-10 hidden w-full p-6 border-b border-b-neutral-700 group-focus-within:block bg-neutral-800">
				<div class="max-w-4xl px-5 mx-auto">
					<div class="mb-3 text-xl font-bold uppercase"><?php bloginfo( 'name' ); ?></div>

					<!-- Show nested nav elements -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'flex gap-3 list-none',
							'before'         => '<div class="hover:underline">',
							'after'          => '</div>',
						)
					);
					?>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
