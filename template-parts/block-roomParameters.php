<?php
/**
 * Template part for displaying roomParameters block
 *
 * @package SU-7
 */
?>

<?php
$section = 1;
if (get_post_type() == 'kristall-rooms' AND get_field('номер_квартиры') > 40) $section = 2;
if (get_post_type() == 'borovaya-rooms' AND get_field('номер_квартиры') > 64) $section = 2;
if (get_post_type() == 'kommunar-rooms' AND get_field('номер_квартиры') > 8) $section = 2;
?>

<div class="roomParameters">
    <span class="roomParameters-title">Квартира №<?php echo get_field('номер_квартиры');?></span> 
    <span class="roomParameters-price"><?php echo(number_format(get_field('стоимость'), 0, '.', ' '));?> &#8381;</span>
    <div class="roomParameters-list">
        <?php echo '
            <div class="roomParameters-item"><span>Подъезд:</span><span class="secondSpan">' . $section . '</span></div>
            <div class="roomParameters-item"><span>Этаж:</span><span class="secondSpan">' . get_field('этаж')  . '</span></div>
            <div class="roomParameters-item"><span>Комнат:</span><span class="secondSpan">' . get_field('количество_комнат')  . '</span></div>
            <div class="roomParameters-item"><span>Общая площадь,м2:</span><span class="secondSpan">' . get_field('площадь')  . '</span></div>
            <div class="roomParameters-item"><span>Площадь кухни,м2:</span><span class="secondSpan">' . get_field('площадь_кухни')  . '</span></div>
            <div class="roomParameters-item"><span>Санузел:</span><span class="secondSpan">' . get_field('санузел')  . '</span></div>
            <div class="roomParameters-item"><span>Лоджия:</span><span class="secondSpan">' . get_field('балкон')  . '</span></div>
            <div class="roomParameters-item"><span>Цена м2:</span><span class="secondSpan">' . number_format(get_field('цена_за_метр'), 0, '.', ' ') . '&#8381;</span></div>
        ';?>
    </div>
    <div class="roomParameters-buttons">
        <input class="openForm" type="button" value="Забронировать квартиру"/>
        <input class="openForm" type="button" value="Записаться на просмотр"/>
    </div>
</div>
