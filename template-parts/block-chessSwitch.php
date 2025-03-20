<?php
/**
 * Template part for displaying chessSwitch
 *
 * @package SU-7
 */

?>

<?php

    $slug = basename(get_permalink(get_the_ID()));

    $post_type = "borovaya-rooms"; 

	switch($slug) {
		case "prityashenie":
			$post_type = "prityashenie-rooms";
			break;
		case "kommunar":
			$post_type = "kommunar-rooms";
			break;
		case "dinastia":
			$post_type = "dinastia-rooms";
			break;
		case "bit":
			$post_type = "bit-rooms";
			break;
	}

    $rooms_array = get_posts(array(
        'post_type' => $post_type,
        'numberposts' => -1,
		'meta_query' => array(
		  array(
			'key' => 'статус',
			'value' => 'Свободна',
			'compare' => 'LIKE'
		  )
		),
    ));

    $freeRooms1 = 0;
    $freeRooms2 = 0;

    foreach($rooms_array as $room) {
		switch($slug) {
			case "prityashenie":
				if (get_field('статус', $room->ID) == 'Свободна') $freeRooms2++;
				break;
			case "kommunar":
				if (get_field('номер_квартиры', $room->ID) <= 8) $freeRooms2++;
				if (get_field('номер_квартиры', $room->ID) > 8) $freeRooms1++;
				break;
			case "visotka-na-borovoy":
				if (get_field('номер_квартиры', $room->ID) <= 64) $freeRooms2++;
				if (get_field('номер_квартиры', $room->ID) > 64) $freeRooms1++;
				break;
			case "dinastia":
				if (get_field('статус', $room->ID) == 'Свободна') $freeRooms2++;
				break;
		}
    }
?>

<div class="chessSwitch">
    <div class="chessSwitch-content">
        <div class="chessSwitch-item">
            <input id="chessSwitch1" type="button" value="Подъезд №1"/>
            <span>Свободно <span class="chessRoomsCount"><?php echo $freeRooms2; ?></span> кв.<span>
        </div>
	<? if($post_type != "dinastia-rooms"): ?>
        <div class="chessSwitch-item">
            <input id="chessSwitch2" class="chessSwitchOff" type="button" value="Подъезд №2"/>
            <span>Свободно <span class="chessRoomsCount"><?php echo $freeRooms1; ?></span> кв.<span>
        </div>
	<? endif; ?>
    </div>
</div>
