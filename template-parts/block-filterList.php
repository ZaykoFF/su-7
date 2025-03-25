<?php
/**
 * The template for displaying filterList
 *
 * @package SU-7
 */
?>

<?php
    global $post;
    $house = $post->post_name;
    $maxRooms = 80;
    if ($house == "borovaya") $maxRooms = 112;
    $maxFloors = 9;
    if ($house == "prityashenie") $maxFloors = 8;
    if ($house == "bit") $maxFloors = 7;
    if ($house == "kommunar" or 'dinastia') $maxFloors = 3;
?>

<div class="filterList">
    <div class="filterList-top">
        <?php $titles = array('План', 'Комнат', 'Подъезд', 'Этаж', 'Площадь', 'Цена за м2', 'Стоимость', '');
              foreach ($titles as $title) echo '<span class="filterListTitle">' . $title . '</span>'; ?>
    </div>
    <div class="filterList-bottom">
        <?php
            for ($i = 1; $i <= $maxRooms; $i++) {
                $current_post = get_page_by_title($i, OBJECT, $house . '-rooms'); 
                if (get_field('статус', $current_post->ID) == 'Свободна') {
                    $section = 1;
                    if ($i > 40 AND $house == 'kristall' OR $i > 64 AND $house == 'borovaya') $section = 2;
                    echo '<div active="true" id="'. get_field('стоимость', $current_post->ID) .'" roomCount="' . get_field('количество_комнат', $current_post->ID) . '" class="filterList-item" onclick="if (window.screen.availWidth <= 1023)window.location.href=`' . get_permalink($current_post->ID) . '`">
                            <div class="filterList-itemIMG"><img class="lightBox" src="' . get_field('план_квартиры', $current_post->ID) . '"/></div>
                            <span class="filterList-itemSpan filterList-itemRoomsCount">' . get_field('количество_комнат', $current_post->ID) . ' <span class="mobileOn">-комн.</span></span>
                            <span class="filterList-itemSpan filterList-itemFloor mobileOff">' . $section . '</span>
                            <span class="filterList-itemSpan filterList-itemFloor">' . get_field('этаж', $current_post->ID) . '<span class="mobileOff"> из ' . $maxFloors . '</span> <span class="mobileOn"> этаж</span></span>
                            <span class="filterList-itemSpan filterList-itemArea">' . get_field('площадь', $current_post->ID) . '<span class="mobileOn">м<sup>2</sup></span></span>
                            <span class="filterList-itemSpan filterList-itemPriceMeter mobileOff">' . get_field('цена_за_метр', $current_post->ID) . '</span>
                            <span class="filterList-itemSpan filterList-itemPrice">' . get_field('стоимость', $current_post->ID) . ' &#8399;</span>
                            <a class="filterList-itemLink mobileOff" href="' . get_permalink($current_post->ID) . '">Подробнее</a>
                         </div>';
                }
            }
        ?>
    </div>
</div>
