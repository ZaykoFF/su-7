<?php
/**
 * Template part for displaying completedCard block
 *
 * @package SU-7
 */
?>

<div class="completedCard">
    <a href=" <?php echo get_permalink(); ?>"/>
        <div style="background-image: url(<?php echo get_field('slider_photo_1'); ?>);"  class="completedCard-container">
            <?php echo '
                <div class="completedCard-titleContainer">
                    <span class="completedCard-title">' . get_the_title() . '</span>
                </div>'; 
            ?>
        </div>
    </a>
</div>
