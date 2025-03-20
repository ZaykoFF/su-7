<?php
/**
 * The template for displaying single completed
 *
 * @package SU-7
 */

get_header();
?>

	<main id="primary" class="wrapper site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.

			get_template_part( 'template-parts/block', 'completed');

		?>

	</main><!-- #main -->

<?php
get_footer();
