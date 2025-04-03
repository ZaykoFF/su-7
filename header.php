<?php
/**
 * The header for our theme
 *
 * @package SU-7
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="9211f05b6954ac4d" />
	<meta name="google-site-verification" content="Kc2E29DsjWrN5yWaDtSGfWeNA3mWDyp_DNEb4CHmROE" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">

        <div class="wrapper header-content">
            <div class="header-logo">
                <img onclick="window.location.href='<?php echo get_site_url(); ?>'" class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->

            <div class="header-contacts" id="header-contacts">
                <div class="header-contacts-phone">
                    <a href="tel:+7 (4942) 30-30-12">+7 (4942) 30-30-12</a>
                </div>
                <div class="header-contacts-callBackButton">
                    <input class="openForm" type="button" value="Заказать звонок"/>
                </div>
            </div>
            <img id="burger" src="<?php echo get_template_directory_uri(); ?>/img/burger.svg"/>
        </div>
        <?php if (get_post_type() == 'status' OR get_post_type() == 'buildings' OR get_post_type() == 'floor' OR get_post_type() == 'kristall-rooms' OR get_post_type() == 'borovaya-rooms' OR get_post_type() == 'dinastia-rooms' OR get_post_type() == 'bit-rooms' OR get_post_type() == 'kommunar-rooms') get_template_part('template-parts/block', 'blueMenu'); ?>

	</header><!-- #masthead -->
