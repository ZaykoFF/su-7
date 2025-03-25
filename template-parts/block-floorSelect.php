<?php
/**
 * Template part for displaying floorSelect block
 *
 * @package SU-7
 */

?>

<?php
    global $post;
    $house = $post->post_name;
    $floor = (int) $_GET['f'];
    if (!$floor) $floor = 1;
        $start_floor = 1;
        $max_floor = 8;
    if ($house == 'prityashenie' or $house == 'bit') {
    	$start_floor = 0;
    	$max_floor = 7;
    }
    if ($house == 'kommunar' or $house == 'dinastia') {
    	$start_floor = 0;
    	$max_floor = 2;
    }
?>

<div class="floorSelect">
    <div class="floorSelect-top">
    <span class="floorSelect-title">Выберите этаж</span>
        <div class="floorSelect-numList">
            <?php for($i=$start_floor;$i<=$max_floor;$i++) {
                $numClass = 'numItem';
                if($i == $floor AND $house == 'borovaya' OR $i == ($floor - 1) AND $house == 'prityashenie' OR $i == ($floor - 1) AND $house == 'kommunar') $numClass = 'numItem-active';
                echo '<span onclick="window.location.href=';
        		if ($house == 'borovaya') {
        		    echo "'/floor/" . $house . "/?f=" . $i . "'";
        		}
        		if ($house == 'prityashenie' or $house == 'kommunar' or $house == 'dinastia') {
        		    echo "'/floor/" . $house . "/?f=" . ($i+1) . "'";
        		}
                echo '" class="' . $numClass . '">' . ($i+1) . '</span>';

            }?>
        </div>
    </div>
    <div class="floorSelect-bottom">
        <span class="floorSelect-title">Показать квартиры только</span>
        <input class="sortRoomsButton" id="sortRooms1" roomCount="1" type="button" value="1-комнатные"/>
        <input class="sortRoomsButton" id="sortRooms2" roomCount="2" type="button" value="2-комнатные"/>
        <input class="sortRoomsButton" id="sortRooms3" roomCount="3" type="button" value="3-комнатные"/>
    </div>
</div>
