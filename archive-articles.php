<?php
/**
 * The template for displaying archive for page type "completed"
 *
 * @package SU-7
 */

get_header();
?>
	<main id="primary" class="site-main wrapper">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
                <h1>Статьи</h1>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
            echo '<div class="completedCards">';
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/block', 'articleCard' );
			endwhile;
            echo '</div>';
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main><!-- #main -->

<?php
get_footer();
