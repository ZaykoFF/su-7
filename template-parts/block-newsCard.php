<?php
/**
 * Template part for displaying newsCard block
 *
 * @package SU-7
 */
?>

    <div class="completedCard" 
	<?php 
		if (is_front_page()) { 
		   echo 'style="max-width:32%; width: 100%; height: 340px;">';
		} else {
		   echo '>';
		}
	?>
    <a href=" <?php echo get_permalink(); ?>"/>
        <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"  class="completedCard-container">
            <?php echo '
                <div class="completedCard-titleContainer">
                    <span class="completedCard-title">' . get_the_title() . '</span>
                </div>'; 
            ?>
        </div>
    </a>
</div>
