<?php
/**
 * The template for displaying the footer
 *
 * @package SU-7
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="site-footer-content wrapper">
            <div class="site-footer-top">
                <div class="footer-logo">
                    <img onclick="window.location.href='<?php echo get_site_url(); ?>'" class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
                </div>
                <div class="footer-social">
                    <a href="https://youtube.com/@su7-kostroma"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/img/yt.svg"></a>
                    <a href="https://t.me/su7kostroma303012"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/img/tg.svg"></a>
                    <a href="https://vk.com/su7.kostroma"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/img/vk.svg"></a>
                </div>
                <div class="footer-contacts">
                    <div class="footer-contacts-phone">
                        <a href="tel:+7 (4942) 30-30-12">+7 (4942) 30-30-12</a>
                    </div>
                    <div class="footer-contacts-callBackButton">
                        <input class="openForm" type="button" value="Заказать звонок"/>
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="footer-navigationArea">
                    <?php get_template_part('template-parts/block', 'footerMenus'); ?>    
                </div>
                <div class="footer-infoArea">
                    <span class="footer-title">Правовая информация</span>
                    <p>Любая информация, представленная на данном сайте, носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями статьи 437 Гражданского кодекса РФ.</p>
                    <a href="">Политика конфиденциальности.</a>
                    <p>© ООО «СУ-7», 2023</p>
                    <a href="https://pautina-web.ru">Создание сайта “ПАУТИНА”</a>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php 
    get_template_part( 'template-parts/block', 'callBackForm' ); 
    get_template_part( 'template-parts/block', 'mobileMenu' ); 
    get_template_part( 'template-parts/block', 'lightBox' ); 

    global $post;
    $slug = $post->post_name;
    $post_type = $post->post_type;
    if($slug == 'visotka-na-borovoy' OR $post_type == 'borovaya-rooms' OR $slug == 'borovaya' OR $slug == 'prityashenie' OR $post_type == 'prityashenie-rooms' OR $post_type == 'kommunar-rooms' OR $slug == 'kommunar' OR $slug == 'dinastia' OR $slug == 'bit') {
	get_template_part( 'template-parts/block', 'videoButton' ); 
    }

?>

<?php wp_footer(); ?>

</body>
</html>
