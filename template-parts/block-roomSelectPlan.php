<?php
/**
 * Template part for displaying roomSelectPlan block
 * @package SU-7
 */
?>

<?php

    $floor = 1; 
    if ($_GET['f']) {
       $floor = (int) $_GET['f'];
    }

    global $post;
    $house = $post->post_name;

    $roomCount = 10;
    $section = '2-6';
    $sectionSeparator = 5;
    $sectionRoomCount = 40;

    if ($floor > 5 AND $house == 'borovaya') {
	    $section = '7-9';
    } elseif ($floor > 1 AND $floor < 6 AND $house == 'prityashenie') {
	$section = '2-5';
        $roomCount = 6;
    } elseif ($floor > 5 AND $floor < 8 AND $house == 'prityashenie') {
	    $section = '6-7';
        $roomCount = 6;
    } elseif ($floor > 7 AND $house == 'prityashenie') {
	    $section = '8';
        $roomCount = 4;
    } elseif ($floor < 2 AND $house == 'prityashenie') {
	    $section = '1';
        $roomCount = 6;
    } elseif ($floor == 1 AND $house == 'kommunar') {
        $section = '1';
        $roomCount = 6;
        $sectionSeparator = 3;
    } elseif ($floor == 2 AND $house == 'kommunar') {
        $section = '2';
        $roomCount = 6;
        $sectionSeparator = 3;
    } elseif ($floor == 3 AND $house == 'kommunar') {
        $section = '3';
        $roomCount = 4;
        $sectionSeparator = 2;
    } elseif ($floor == 1 AND $house == 'dinastia') {
        $section = '1';
        $roomCount = 6;
    } elseif ($floor == 2 AND $house == 'dinastia') {
        $section = '2';
        $roomCount = 6;
    } elseif ($floor == 3 AND $house == 'dinastia') {
        $section = '3';
        $roomCount = 3;
    } elseif ($floor == 1 AND $house == 'bit') {
        $section = '1';
        $roomCount = 4;
    } elseif ($floor > 1 AND $floor < 7 AND $house == 'bit') {
        $section = '2-6';
        $roomCount = 4;
    } elseif ($floor == 7 AND $house == 'bit') {
        $section = '7';
        $roomCount = 4;
    }
    if ($house == 'borovaya') {
        $roomCount = 14;
        $sectionSeparator = 8;
        $sectionRoomCount = 64;
    } elseif ($house == 'prityashenie') {
        $sectionSeparator = 46;
        $sectionRoomCount = 46;
    } elseif ($house == 'kommunar') {
        $sectionRoomCount = 8;   
    } elseif ($house == 'dinastia') {
		$sectionRoomCount = 5;
   } elseif ($house == 'bit') {
        $sectionRoomCount = 4;
    }

    if ($house == 'borovaya') {
 	    $firstRoom = (($floor * $roomCount) - $roomCount) / 2;
    }
    if ($house == 'prityashenie'){
	    if ($floor == 1) {
	       $firstRoom = 1;
	    } elseif ($floor == 2) {
	       $firstRoom = 7; 
	    } elseif ($floor == 3) {
	       $firstRoom = 13;
	    } elseif ($floor == 4) {
	       $firstRoom = 19;
	    } elseif ($floor == 5) {
	       $firstRoom = 25;
	    } elseif ($floor == 6) {
	       $firstRoom = 31;
	    } elseif ($floor == 7) {
	       $firstRoom = 37; 
	    } elseif ($floor == 8) {
	       $firstRoom = 43;
	    }
    }
    if ($house == 'bit'){
	    if ($floor == 1) {
	       $firstRoom = 1;
	    } elseif ($floor == 2) {
	       $firstRoom = 5; 
	    } elseif ($floor == 3) {
	       $firstRoom = 9;
	    } elseif ($floor == 4) {
	       $firstRoom = 13;
	    } elseif ($floor == 5) {
	       $firstRoom = 17;
	    } elseif ($floor == 6) {
	       $firstRoom = 21;
	    } elseif ($floor == 7) {
	       $firstRoom = 25; 
	    }
    }
    if ($house == 'kommunar'){
	    if ($floor == 1) {
	       $firstRoom = 1;
	    } elseif ($floor == 2) {
	       $firstRoom = 4; 
	    } elseif ($floor == 3) {
	       $firstRoom = 7;
	    }
    }
    if ($house == 'dinastia'){
	    if ($floor == 1) {
	       $firstRoom = 1;
	    } elseif ($floor == 2) {
	       $firstRoom = 7; 
	    } elseif ($floor == 3) {
	       $firstRoom = 13;
	    }
    } 

    $floorCheck = 0;
    if ($floor == 1 OR !$floor) { 
        $firstRoom = 1;
        $floorCheck = 1;
    }

    for($i=1; $i<=$roomCount; $i++) { 

    	if ($house == 'borovaya') {
    	   $roomNumber = ($firstRoom + $i);
    	}
    	
   	    if ($house == 'kommunar' or 'dinastia' or 'bit') {
    	   $roomNumber = ($firstRoom + $i) - 1;
    	}
    
    	if ($house == 'prityashenie') {
    	   if ($floor != 1) {
    	      $roomNumber = ($firstRoom + $i) - 1;
    	   } else {
    	      $roomNumber = ($firstRoom + $i) - 1;
    	   }
    	}

        if ($i > $sectionSeparator) $roomNumber += $sectionRoomCount - $sectionSeparator;
        if ($house == 'borovaya' AND $floor > 1 AND $i <= 8) $roomNumber += ($floor - 1);
        if ($house == 'borovaya' AND $floor > 1 AND $i > 8) $roomNumber -= ($floor - 1);
        

        $current_post = get_page_by_title($roomNumber, OBJECT, $house . '-rooms'); 

        $uri =  "'/". $house.'-rooms/'. $roomNumber ."'";
        $planItemClass = 'roomSelectPlan-item';
        if (get_field('статус', $current_post->ID) != 'Свободна') {
            $planItemClass = 'roomSelectPlan-unactive';
            $uri = '';
        }

        echo '
            <img 
                 test_floorNumber="' . $floor . '"  
                 test_sectionNumber="' . $section . '"
                 test_roomNumber="' . $roomNumber . '"
                 house="' . $house . '"
                 roomNumber="' . get_field('номер_квартиры', $current_post->ID) . '" 
                 roomsCount="' . get_field('количество_комнат', $current_post->ID) . '" 
                 price="' . get_field('стоимость', $current_post->ID) . '" 
                 priceFormat="' . number_format(get_field('стоимость', $current_post->ID), 0, '.', ' ') . '"
                 status="' . get_field('статус', $current_post->ID) . '" 
                 onclick="window.location.href='.$uri.'" 
                 src="' . get_template_directory_uri() . '/img/plans/' . $house . '-plan/' . $section . '/room-' . $i . '.png" 
                 class="' . $planItemClass . ' roomSelectPlan-item-' . $house . '-' . $section . '-' . $i . '"
            />';
    }
    if ($floor == 3 and $house == 'dinastia') {
        echo '<img style="transform:unset !important;" status="Свободна" src="https://su-7.ru/wp-content/themes/su-7/img/plans/dinastia-plan/3/room-4.png" class="roomSelectPlan-item roomSelectPlan-item-dinastia-3-4">';
    }

?>
