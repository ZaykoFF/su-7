<?php
/**
 * The template for displaying about page
 *
 * @package SU-7
 */

get_header();
?>

	<main id="primary" class="site-main wrapper">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.

			get_template_part( 'template-parts/block', 'about' );

		?>

	</main><!-- #main -->

<?php
get_footer();
