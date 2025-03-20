<?php
/**
 * The template for displaying filter
 *
 * @package SU-7
 */
?>

<div class="filter">
    <div class="filter-top">
        <?php get_template_part('template-parts/block', 'filterSorting') ?>
    </div>
    <div class="filter-bottom">
        <?php get_template_part('template-parts/block', 'filterList') ?>
    </div>
</div>
