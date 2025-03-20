<?php
/**
 * The template for displaying a docList block
 * @package SU-7
 */
?>

<?php
    global $post;
    $post_slug = $post->post_name;
?>

<div id="doc-list-<?php echo $post_slug; ?>" class="docList">
    <div class="docList-content wrapper">
        <div class="docItem">
            <img class="docItem-img" src="<?php echo get_template_directory_uri(); ?>/img/declaration-doc.svg">
            <a href="<?php echo get_field('declaration_url');?>">Проектная декларация</a>
        </div>  
        <div class="docItem">
            <img class="docItem-img" src="<?php echo get_template_directory_uri(); ?>/img/order-doc.svg">
            <a href="<?php echo get_field('let_url');?>">Разрешение на строительство</a>
        </div>  
        <div class="docItem">
            <img class="docItem-img" src="<?php echo get_template_directory_uri(); ?>/img/deal-doc.svg">
            <a href="<?php echo get_field('contract_url');?>">Договор ДУ</a>
        </div>  
    </div>
</div>
