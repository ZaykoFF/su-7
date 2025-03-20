<?php
/**
 * Template part for displaying floor block
 *
 * @package SU-7
 */

?>

<?php $floor_post_slug = get_post_field( 'post_name', get_post() ); ?>

<div class="floor">
	<div class="floor-left <? echo $floor_post_slug; ?>">
            <?php get_template_part('template-parts/block', 'roomSelect'); ?>
    </div>
    <div class="floor-right">
            <?php get_template_part('template-parts/block', 'floorSelect'); ?>
    </div>
</div>

