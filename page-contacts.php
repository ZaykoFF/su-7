<?php
/**
 * The template for displaying contacts page
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
		?>
        
        <div class="contacts-content"> 
            <?php get_template_part( 'template-parts/block', 'contactsInfo' ); ?>
        </div>

	</main><!-- #main -->
    <?php get_template_part( 'template-parts/block', 'map' );?>

<?php
get_footer();
