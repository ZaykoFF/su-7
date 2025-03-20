<?php
/**
 * Template part for displaying room block
 *
 * @package SU-7
 */

?>

<div class="room">
    <div class="room-top">
            <?php get_template_part('template-parts/block', 'breadCrumbs'); ?>
    </div>
    <div class="room-middle">
        <div class="room-middle-left">
            <?php get_template_part('template-parts/block', 'slider'); ?>
        </div>
        <div class="room-middle-right">
            <?php get_template_part('template-parts/block', 'roomParameters'); ?>
        </div>
    </div>
    <div class="room-bottom">
            <?php get_template_part('template-parts/block', 'roomDescription'); ?>
    </div>
</div>
