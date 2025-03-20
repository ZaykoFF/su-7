<?php
/**
 * Template part for displaying lastNews block
 *
 * @package SU-7
 */

?>

    <h1>Последние новости</h1> 
    <div class="completedCards">

        <?php $posts = get_posts([
          'post_type' => 'news',
          'post_status' => 'publish',
          'numberposts' => 3
        ]);

        global $post;

        foreach( $posts as $post ){
            setup_postdata( $post );
	    get_template_part( 'template-parts/block', 'newsCard' );
        }

        wp_reset_postdata(); ?>

    </div>


