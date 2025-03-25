<?php
/**
 * Template part for displaying blueMenu
 *
 * @package SU-7
 */

?>

<div class="blueMenu">
    <div class="blueMenu-content wrapper">
            <?php 
                    global $post;
                    $slug = $post->post_name;
                    $post_type = $post->post_type;
                    if($slug == 'visotka-na-borovoy' OR $post_type == 'borovaya-rooms' OR $slug == 'borovaya') {
                        wp_nav_menu(array('container_class' => 'menu-blue',
                                     'theme_location' => 'footer_borovaya',
                                     'items_wrap' => '<div class="title">ЖК "Высотка на Боровой"</div><ul class="%2$s">%3$s</ul>'));
                    } 
					if($slug == 'prityashenie' OR $post_type == 'prityashenie-rooms') {
                        wp_nav_menu(array('container_class' => 'menu-blue',
                                     'theme_location' => 'footer_prityashenie',
                                     'items_wrap' => '<div class="title">ЖК "Притяжение"</div><ul class="%2$s">%3$s</ul>'));
		    		}
					if($slug == 'bit' OR $post_type == 'bit-rooms') {
                        wp_nav_menu(array('container_class' => 'menu-blue',
                                     'theme_location' => 'footer_bit',
                                     'items_wrap' => '<div class="title">ЖК "Новый быт"</div><ul class="%2$s">%3$s</ul>'));
		    		}
					if($slug == 'kommunar' OR $post_type == 'kommunar-rooms') {
                        wp_nav_menu(array('container_class' => 'menu-blue',
                                     'theme_location' => 'footer_kommunar',
                                     'items_wrap' => '<div class="title">ЖК "Коммунар"</div><ul class="%2$s">%3$s</ul>'));
		    		}
					if($slug == 'dinastia' OR $post_type == 'dinastia-rooms') {
                        wp_nav_menu(array('container_class' => 'menu-blue',
                                     'theme_location' => 'footer_dinastia',
                                     'items_wrap' => '<div class="title">ЖК "Династия"</div><ul class="%2$s">%3$s</ul>'));
		    		}
             ?>
    </div>
</div>
