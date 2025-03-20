<?php
/**
 * Template part for displaying ourCompitention block
 *
 * @package SU-7
 */

?>

<div class="ourCompitention">
    <h1>В наших компетенциях</h1> 
    <div class="ourCompitention-content">
        <div class="ourCompitention-item">
            <img loading="lazy" class="ourCompitention-itemImage" src="<?php echo get_template_directory_uri(); ?>/img/compitention1.jpg"/><p>Жилые комплексы</p>
        </div> 
        <div class="ourCompitention-item">
            <img loading="lazy" class="ourCompitention-itemImage" src="<?php echo get_template_directory_uri(); ?>/img/compitention2.jpg"/><p>Детские сады и школы</p>
        </div> 
        <div class="ourCompitention-item">
            <img loading="lazy" class="ourCompitention-itemImage" src="<?php echo get_template_directory_uri(); ?>/img/compitention3.jpg"/><p>Промышленное<br>строительство</p>
        </div> 
        <div class="ourCompitention-item" onclick="window.location.href = '/mortgage/';">
            <span class="ourCompitention-itemBigText">ипотека <br>от 6%</span><p>Ипотечные программы</p>
        </div> 
    </div>
</div>
