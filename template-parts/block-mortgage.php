<?php
/**
 * Template part for displaying mortgage block
 *
 * @package SU-7
 */
?>

<div class="mortgage">
    <?php 
        for ($i=1; $i<=20; $i++) {

            $mortgage_image = "mortgage_" . $i . "_image";
            $mortgage_description = "mortgage_" . $i . "_description";
            $mortgage_title = "mortgage_" . $i . "_title";
            $mortgage_size = "mortgage_" . $i . "_size";
            $title_value = get_field($mortgage_title);
            $image_value = get_field($mortgage_image);
            $description_value = get_field($mortgage_description);
            $size_value = get_field($mortgage_size);

            if ($description_value AND $image_value AND $title_value AND $size_value) {

                echo 
                    "<div class='mortgage-item' style='width:" . $size_value . "%;'>
                        <div class='mortgage-title'>
                            <span>" . $title_value . "</span>
                        </div>
                        <div class='mortgage-description'>
                            <p>" . $description_value . "</p> 
                        </div>
                        <div class='mortgage-image'>
                            <img src=" . $image_value . ">
                        </div> 
                     </div>"; 

            }
        }
    ?> 
</div>
