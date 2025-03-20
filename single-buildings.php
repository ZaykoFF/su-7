<?php
/**
 * The template for displaying a single buildings
 *
 * @package SU-7
 */

get_header();
?>
    
    <?php 
          get_template_part('template-parts/block', 'slider'); 
          get_template_part('template-parts/block', 'docList'); ?>

	<main id="primary" class="site-main wrapper">
        <?php get_template_part('template-parts/block', 'buildingDescription'); 
              get_template_part('template-parts/block', 'theses');
              get_template_part('template-parts/block', 'releaseDate');
              get_template_part('template-parts/block', 'chess');
        ?>
	</main><!-- #main -->

    <?php get_template_part('template-parts/block', 'infrastructure'); ?>

<?php
get_footer();
