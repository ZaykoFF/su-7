<?php
/**
 * The template for displaying main page
 *
 * @package SU-7
 */

get_header();
?>
    <?php get_template_part( 'template-parts/block', 'slider' ); ?>

	<main id="primary" class="site-main wrapper">

		<?php

            get_template_part('template-parts/block', 'dreamInReality'); 
            get_template_part('template-parts/block', 'ourProjects'); 
            get_template_part('template-parts/block', 'dreamInRealityText'); 
            get_template_part('template-parts/block', 'ourCompitention'); 
            get_template_part('template-parts/block', 'lastNews'); 

		?>

	</main>

<?php
get_footer();
