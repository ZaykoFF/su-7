<?php
/**
 * The template for displaying single-floor
 *
 * @package SU-7
 */

get_header();
?>
	<main id="primary" class="wrapper site-main">

		<?php get_template_part( 'template-parts/block', 'floor'); ?>
		<?php get_template_part( 'template-parts/block', 'filter'); ?>

	</main><!-- #main -->

<?php
get_footer();
