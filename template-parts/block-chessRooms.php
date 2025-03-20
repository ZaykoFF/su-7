<?php
/**
 * Template part for displaying chessRooms
 * @package SU-7
 */
?>

<div class="chessRooms">
    <div class="chessRooms-content">
        <div class="chessRooms-left">
	    <?php 
			
			$slug = basename(get_permalink(get_the_ID()));
			$minus = 0;

			switch($slug) {
				case "prityashenie":
					$minus = 1;
					$floors = 8;
					$first_floor = 1;
					break;
				case "kommunar":
					$floors = 3;
					$first_floor = 1;
					break;
				case "visotka-na-borovoy":
					$minus = 0;
					$floors = 9;
					$first_floor = 2;
					break;
				case "dinastia":
					$minus = 0;
					$floors = 3;
					$first_floor = 1;
					break;
			}
			
			for ($i=$floors;$i>=$first_floor;$i--) echo '<div class="chessRooms-floorNumberBlock"><span>' . $i . '</span><span>этаж</span></div>';
	    ?>
        </div>
        <div class="chessRooms-Right roomSection-<?php echo basename(get_permalink(get_the_ID())); ?>">
            <?php
                $slug = basename(get_permalink(get_the_ID()));
                $rooms_in_section = 64;
                $post_type = "borovaya-rooms";
				$order = 'DESC';
				if ($slug == "prityashenie") {
					$post_type = "prityashenie-rooms";
					$rooms_in_section = 46;
					$order = 'DESC';
				}
				if ($slug == "dinastia") {
					$post_type = "dinastia-rooms";
					$rooms_in_section = 15;
					$order = 'DESC';
				}
				if ($slug == "kommunar") {
					$post_type = "kommunar-rooms";
					$rooms_in_section = 8;
					$order = 'DESC';
				}
                $rooms_array = get_posts(array(
                    'post_type' => $post_type,
                    'numberposts' => -1,
                    'meta_key' => 'номер_квартиры',
                    'orderby' => 'meta_value_num',
                    'order' => $order
                ));
                for ($i=1;$i<=2;$i++) { 

                    $section_additional_style = '';
                    if ($post_type == "borovaya-rooms" AND $i == 1) $section_additional_style = 'style="width: 1632px; overflow: hidden;"';
                    if ($post_type == "borovaya-rooms" AND $i == 2) $section_additional_style = 'style="width: 1224px; overflow: hidden;"';
                    if ($post_type == "prityashenie-rooms" AND $i == 1) $section_additional_style = 'style="width: 1224px; overflow: hidden;"';
					if ($post_type == "kommunar-rooms") $section_additional_style = 'style="width: 740px; overflow: hidden;"';
					if ($post_type == "dinastia-rooms") $section_additional_style = 'style="width: 1212px; overflow: hidden;"';
				
                    echo '<div ' . $section_additional_style . ' class="chessRoomsSection section' . $i . '">';     
						if($slug == 'kommunar') echo '<div class="chessRooms-item unavailable empty-chessItem" style="opacity: 0;"></div>';
						if($slug == 'dinastia') echo '<div class="chessRooms-item unavailable empty-chessItem" style="opacity: 0;"></div><div class="chessRooms-item unavailable empty-chessItem" style="opacity: 0;"></div><div class="chessRooms-item unavailable empty-chessItem" style="opacity: 0;"></div>';
						foreach( $rooms_array as $room ) {
                            if (get_field('номер_квартиры', $room->ID) <= $rooms_in_section AND $i == 1 OR get_field('номер_квартиры', $room->ID) > $rooms_in_section AND $i == 2) {
                                if (get_field('статус', $room->ID) == 'Свободна') {
                                    echo '
					<a href="' . get_permalink($room->ID) . '"';
				    if ($post_type == 'prityashenie-rooms' AND get_field('номер_квартиры', $room->ID) == 46) echo ' style="margin-right: 403px;" class="lastRoom" ';
				    echo '>
                                        <div class="chessRooms-item">
                                            <span class="chessRooms-item-RoomCount"><span>' . get_field('количество_комнат', $room->ID) . '</span> комн.</span>
                                            <span class="chessRooms-item-RoomArea">' . get_field('площадь_кухни', $room->ID)  . '/' . get_field('жилая_площадь', $room->ID)  . '/' . get_field('площадь', $room->ID) . ' м<sup>2</sup></span>
                                            <span class="chessRooms-item-RoomPrice"><span>' . number_format(get_field('стоимость', $room->ID), 0, '.', ' ') . '</span>&#8381;</span>
                                            <span class="chessRooms-item-RoomNumber">' . get_field('номер_квартиры', $room->ID) . '</span>
                                        </div></a>';
                                } else {
                                    echo '<div class="chessRooms-item unavailable';
									if ($post_type == 'prityashenie-rooms' AND get_field('номер_квартиры', $room->ID) == 46) echo ' lastRoom" style="margin-right: 403px;';
									echo '"><span>' . get_field('статус', $room->ID) . '</span><span class="chessRooms-item-RoomNumber">' . get_field('номер_квартиры', $room->ID) . '</div>';
                                }
                            }
                        };
					
                   echo '</div>';
               }
           ?>
        </div>
    </div>
</div>
