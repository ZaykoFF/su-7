<?php
/**
 * Template part for displaying breadCrumbs block
 *
 * @package SU-7
 */
?>

<?php
    global $post;
    $house = $post->post_type;
    $section = 1;
    if ($house == 'borovaya-rooms' AND get_field('номер_квартиры') > 64) $section = 2;
    if ($house == 'kristall-rooms' AND get_field('номер_квартиры') > 40) $section = 2;
    $floor = 'kristall';
    if ($house == 'borovaya-rooms') { 
        $floor = 'borovaya';
    }
    if ($house ='prityashenie-rooms') {
	    $floor = 'prityashenie';
    }
    if ($house ='kommunar-rooms') {
	    $floor = 'kommunar';
    }
    if ($house ='dinastia-rooms') {
	    $floor = 'dinastia';
    }
?>

<div class="breadCrumbs">
    <div class="breadCrumbs-content">
        <?php 
            $uri = "'/floor/" . $floor . "/?f=" . ((int)get_field('этаж') - 1) . "'";
            echo '
             <span>Подъезд ' . $section . '</span><span> / </span>
             <span onclick="window.location.href=' . $uri . '" style="cursor: pointer;">Этаж ' . get_field('этаж') . '</span><span> / </span>
             <span>Квартира ' . get_field('номер_квартиры') . '</span>
            ';?>
    </div>
</div>
