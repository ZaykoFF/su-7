<?php
/**
 * Template part for displaying mobileMenu block
 *
 * @package SU-7
 */

?>

<div class="mobileMenu">
    <div class="mobileMenu-closeContainer">
        <span id="mobileMenuClose">X</span>
    </div>
    <nav class="mobile-navigation">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
        ?>
    </nav>
</div>
