<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Volare
 */

get_header();
?>

	<main id="primary" class="site-main mx-auto max-w-4xl px-4">

		<div class="relative overflow-hidden rounded-2xl">
			<img src="https://th.bing.com/th/id/R.23eba3de2d9c85870282053758509e2f?rik=nRJy%2b%2fje%2fNyfgA&pid=ImgRaw&r=0" alt="" class="aspect-[16/9] select-none rounded-2xl object-cover" />

			<div class="absolute top-0 h-full w-full from-transparent to-black sm:bg-gradient-to-b"></div>

				<div class="p bottom-0 py-4 sm:absolute sm:px-4">
					<h2 class="text-lg font-bold sm:mb-2 sm:text-2xl">Jugend Politik und Parlament Schaffhausen</h2>

					<div class="flex flex-col gap-3 sm:flex-row sm:items-center">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, cum. Eaque laudantium dolores harum corrupti.</p>

					<div class="flex items-start gap-2 sm:flex-col sm:items-end">
						<button class="rounded-md border border-yellow-200 bg-yellow-700/50 px-2 py-1 text-xs font-bold uppercase text-yellow-100">Lokal</button>
						<button class="rounded-md border border-green-200 bg-green-700/50 px-2 py-1 text-xs font-bold uppercase text-green-100">Schaffhausen</button>
					</div>
				</div>
			</div>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'volare' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'volare' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
