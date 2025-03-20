<?php
/**
 * Template part for displaying theses block
 *
 * @package SU-7
 */
?>
<?php
    if(get_post_type() == 'buildings') {
        echo '<h1>Прeимущества ' . get_the_title() . '</h1>';
    }
?>
<div class="theses">
    <?php 
        for ($i=1; $i<=20; $i++) {

            $thesis_icon = "benefit_" . $i . "_icon";
            $thesis_description = "benefit_" . $i . "_description";
            $icon_value = get_field($thesis_icon);
            $description_value = get_field($thesis_description);

            if ($description_value AND $icon_value) {

                echo 
                    "<div class='thesis'>
                        <div class='thesis-circle'>
                            <img src=" . $icon_value . ">
                        </div> 
                        <div class='thesis-description'>
                            <p>" . $description_value . "</p> 
                        </div>
                     </div>"; 

            }
        }
    ?> 
</div>
