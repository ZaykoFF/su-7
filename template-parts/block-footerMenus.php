<?php
/**
 * Template part for displaying footerMenus
 *
 * @package SU-7
 */

?>

<div class="footerMenus">
    <nav class="footerMenus-content">
        <?php
            wp_nav_menu(array('container_class' => 'menu-footer',
                              'theme_location' => 'footer_dinastia',
                              'items_wrap' => '<div class="title">ЖК "Династия"</div><ul class="%2$s">%3$s</ul>'));
            wp_nav_menu(array('container_class' => 'menu-footer',
                              'theme_location' => 'footer_kommunar',
                              'items_wrap' => '<div class="title">ЖК "Коммунар"</div><ul class="%2$s">%3$s</ul>'));
            wp_nav_menu(array('container_class' => 'menu-footer',
                              'theme_location' => 'footer_projects',
                              'items_wrap' => '<div class="title">Наши проекты</div><ul class="%2$s">%3$s</ul>'));
            wp_nav_menu(array('container_class' => 'menu-footer',
                              'theme_location' => 'footer_information',
                              'items_wrap' => '<div class="title">Информация</div><ul class="%2$s">%3$s</ul>'));
        ?> 
    </nav>
</div>

