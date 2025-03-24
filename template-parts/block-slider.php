<?php
/**
 * Template part for displaying slider block
 *
 * @package SU-7
 */
?>

<?php
    global $post;
    $post_slug = $post->post_name;
    $css_class = 'main';

    if ($post_slug != 'main') {
        $css_class = get_post_type();
    }

?>

<div class="slider wrapper slider-<?php echo $css_class; ?>">
    <?php 

        $plan = get_field('план_квартиры');
        $visual = get_field('визуализация');
        if($plan) echo '<div class="sliderPhoto" src="' . $plan . '" style="background-image:url(' . $plan . ')"></div>';
        if($visual) echo '<div class="sliderPhoto" src="' . $visual . '" style="background-image:url(' . $visual . ')"></div>';

        for ($i=1; $i<=8; $i++) {
            $slide = "slider_photo_" . $i;
	    	$slide_mobile = "slider_photo_" . $i . "_mobile";
            $slide_value = get_field($slide);
            if ($slide_value) {
                echo "<div class='sliderPhoto sliderPhoto-num-" . $i . "' src='" . $slide_value .  "' style='background-image:url(" . $slide_value . "); '>";
			
				if ($slide_mobile AND $post_slug == 'main') {
					echo '<script>
						if (window.screen.width <= 1023) {
							jQuery(".sliderPhoto-num-' . $i . '").attr("style","background-image: url(' . get_field($slide_mobile) . '); width: 420px;");
						}
						 </script>';
				};
				
                if ($css_class == 'main') {
                    $title = "slide_title_" . $i;
                    $title_value = get_field($title);
                    $description = "slide_description_" . $i;
                    $description_value = get_field($description);
                    if ($title_value AND $description_value) {
                        echo 
                            "<div class='sliderDescription wrapper'>
                                <div class='sliderDescription-content'>
                                    <div class='sliderDescription-title'>
                                        <span>" . $title_value . "</span>
                                    </div>
                                    <div class='sliderDescription-description'>
                                        <p>" . $description_value . "</p>    
                                    </div>
                                    <div class='sliderDescription-button'>
                                        <input type='button' value='Подробнее'/>
                                    </div>
                                </div>
                            </div></div>";
		    } else {
		        echo "</div>";
		    }
                } else {
                    echo "</div>";
                }
           }
        }
    ?>
</div>
<?php if (get_post_type() == 'buildings') { 
        if (basename(get_permalink(get_the_ID())) == 'visotka-na-borovoy') {
            echo "<div class='sliderGoRoomContent'><a href='/floor/borovaya/'><input class='sliderGoRoomButton' type='button' value='Выбрать квартиру'/></a></div>";
        } elseif (basename(get_permalink(get_the_ID())) == 'prityashenie') {
            echo "<div class='sliderGoRoomContent'><a href='/floor/prityashenie/'><input class='sliderGoRoomButton' type='button' value='Выбрать квартиру'/></a></div>";
        } elseif (basename(get_permalink(get_the_ID())) == 'kommunar') {
            echo "<div class='sliderGoRoomContent'><a href='/floor/kommunar/'><input class='sliderGoRoomButton' type='button' value='Выбрать квартиру'/></a></div>";
        } 
      }
?>

<?php
    if ($css_class == 'borovaya-rooms' OR $css_class == 'kristall-rooms' OR $css_class == 'prityashenie-rooms' OR
$css_class == 'dinastia-rooms' OR
$css_class == 'kommunar-rooms' OR 
$css_class == 'bit-rooms') {
        echo '
            <script>
                document.querySelectorAll(".sliderPhoto").forEach(el => {
                    el.classList.add("lightBox"); 
                });
            </script> 
        ';
    }
?>
