<?php
/**
 * Template part for displaying chess block
 *
 * @package SU-7
 */

?>
<? $slug = basename(get_permalink(get_the_ID())); ?>
<div class="chess">
    <div class="chess-top">
        <h1>Выбрать квартиру</h1> 
    </div>
    <div class="chess-bottom
        <? if ($slug == 'kommunar' or $slug == 'dinastia') echo ' chess-bottom-kommunar'; ?> 
        <? if ($slug == 'bit') echo ' chess-bottom-bit'; ?>" 
        <? if ($slug == 'kommunar' or $slug == 'dinastia') echo 'style="background-image:url(/wp-content/themes/su-7/img/house_min.svg);"'; ?>
        <? if ($slug == 'bit') echo 'style="background-image:url(/wp-content/themes/su-7/img/house_bit.svg);"'; ?>>
        <div class="chess-bottom-top">
            <?php get_template_part('template-parts/block', 'chessSwitch'); ?>
        </div>
        <div class="chess-bottom-bottom" <? if ($slug == 'kommunar') echo 'style="height:440px"'; ?>>
            <?php get_template_part('template-parts/block', 'chessRooms'); ?>
        </div>
    </div>
</div>