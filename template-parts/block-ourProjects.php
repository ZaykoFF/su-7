<?php
/**
 * Template part for displaying ourProjects block
 *
 * @package SU-7
 */

?>

<div class="ourProjects">
    <h1>Наши проекты</h1> 
    <div class="ourProjects-content">
        
        <?php $posts = get_posts([
          'post_type' => 'buildings',
          'post_status' => 'publish',
          'numberposts' => -1
        ]);

        global $post;

        foreach( $posts as $post ){
            setup_postdata( $post );
            echo '
                <div class="ourProjects-item" style="background-image:url(' . get_field('slider_photo_1') . ');">
                    <div class="ourProjects-statusPlank">
                        <img src="' . get_template_directory_uri() .'/img/status_plank.svg"/>';
                            echo '<span>' . get_field('status') . '</span>';
                    echo '
                    </div>
                    <div class="ourProjects-itemDescription">
                        <span class="ourProjects-itemTitle">' . get_the_title() . '</span>
                        <span class="ourProjects-itemAddress"><img src="' . get_template_directory_uri() . '/img/target.svg"/>' . get_field('address') . '</span>
                        <a href="' . get_permalink() . '"><input type="button" value="Подробнее"/></a>
                    </div>
                </div>';
        }

        wp_reset_postdata(); ?>


    </div>
</div>
