<?php
/**
 * Template part for displaying roomSelect block
 *
 * @package SU-7
 */
?>
<?php
    global $post;
    $house = $post->post_name;
?>

<div class="roomSelect-<?php echo $house; ?>">
    <div class="roomSelect-lable-<?php echo $house; ?>">
        <div class="roomSelect-lable-item">
            <span>Подъезд</span>
            <span id="lable-section">-</span>
        </div>
        <div class="roomSelect-lable-item">
            <span>Комнат</span>
            <span id="lable-room">-</span>
        </div>
        <div class="roomSelect-lable-item">
            <span>Стоимость</span>
            <span><span id="lable-price">-</span><span>&#8381;</span></span>
        </div>
        <div class="roomSelect-lable-item">
            <span>Статус</span>
            <span id="lable-status">-</span>
        </div>
    </div>
    <?php get_template_part('template-parts/block', 'roomSelectPlan'); ?>
</div>
