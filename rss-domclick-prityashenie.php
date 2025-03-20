<?php
    header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
    echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?>';
?>

<complexes>
    <complex>
        <id>119600</id>
        <name>ЖК "Притяжение"</name>
        <latitude>57.737730</latitude>
        <longitude>40.998068</longitude>
        <address>Кострома, Индустриальная улица 7/1</address>
        <images>
            <image>
                <?php echo get_site_url(); ?>/wp-content/uploads/2023/09/1-1.jpg
            </image>
        </images>
        <profits_main>
            <profit_main>
                <title>1</title>
                <text>1</text>
                <image>
                    <?php echo get_site_url(); ?>/wp-content/uploads/2023/09/1-1.jpg
                </image>
            </profit_main>
        </profits_main>
        <buildings>
            <building>
                <id>177446</id>
                <fz_214>1</fz_214>
                <name>1</name>
                <floors>8</floors>
                <building_state>строится</building_state>
                <built_year>2025</built_year>
                <ready_quarter>3</ready_quarter>
                <building_type>кирпичный</building_type>
                <flats>
                
                <?php
                
                //Получаем массив постов для обработки
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'prityashenie-rooms',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                //Проходимся по каждому посту
                foreach( $posts as $post ) {
					if (get_field('статус', $post->ID) == 'Свободна') {
                    
					echo '<flat>
                            <flat_id>'. $post->ID .'</flat_id>
                            <apartment>'. get_field('номер_квартиры', $post->ID) .'</apartment>
                            <floor>'. get_field('этаж', $post->ID) .'</floor>
                            <room>'. get_field('количество_комнат', $post->ID) .'</room>
                            <plan>'. get_field('план_квартиры', $post->ID) .'</plan>
                            <balcony>'. get_field('балкон', $post->ID) .'</balcony>
                            <renovation>нет</renovation>
                            <price>'. get_field('стоимость', $post->ID) .'</price>
                            <area>'. get_field('площадь', $post->ID) .'</area>
                            <living_area>'. get_field('жилая_площадь', $post->ID) .'</living_area>
                            <kitchen_area>'. get_field('площадь_кухни', $post->ID) .'</kitchen_area>
                            
							<rooms_area>
                                <area><value>'. get_field('площадь_комнаты_1', $post->ID) .'</value></area>';
                                
                                if (get_field('количество_комнат', $post->ID) >= 2) {
                                    
                                    echo '
                                        <area>
                                            <value>'. get_field('площадь_комнаты_2', $post->ID) .'</value>
                                        </area>
                                    ';
                                    
                                };
                                
                                if (get_field('количество_комнат', $post->ID) >= 3) {
                                    
                                    echo '
                                        <area>
                                            <value>'. get_field('площадь_комнаты_3', $post->ID) .'</value>
                                        </area>
                                    ';
                                    
                                };
                                
                    echo '</rooms_area>
                            <window_view/>
                            <bathroom>'. get_field('санузел', $post->ID) .'</bathroom>
                        </flat>
    
                    ';
					}
                
                };
                
                
                    
                                
                ?>
                    
                    
                </flats>
            </building>
        </buildings>
        <sales_info>
            <sales_phone>+7 4942 30-30-12</sales_phone>
            <responsible_officer_phone>+7 4942 30-30-12</responsible_officer_phone>
            <address>г. Кострома, ул. Свердлова, 41Б</address>
            <sales_latitude>57.766737</sales_latitude>
            <sales_longitude>40.939973</sales_longitude>
            <timezone>GMT +03:00</timezone>
            <works_day>
                <work_day>
                    <day>пн</day>
                    <open_at>8:00</open_at>
                    <close_at>17:00</close_at>
                </work_day>
                <work_day>
                    <day>вт</day>
                    <open_at>8:00</open_at>
                    <close_at>17:00</close_at>
                </work_day>
                <work_day>
                    <day>ср</day>
                    <open_at>8:00</open_at>
                    <close_at>17:00</close_at>
                </work_day>
                <work_day>
                    <day>чт</day>
                    <open_at>8:00</open_at>
                    <close_at>17:00</close_at>
                </work_day>
                <work_day>
                    <day>пт</day>
                    <open_at>8:00</open_at>
                    <close_at>17:00</close_at>
                </work_day>
            </works_day>
        </sales_info>
        <developer>
            <id>297261</id>
            <name>Застройщик СУ-7</name>
            <phone>+7 4942 30-30-12</phone>
            <site><?php echo get_site_url(); ?></site>
            <logo><?php echo get_site_url(); ?>/wp-content/themes/su-7/img/logo.svg</logo>
        </developer>
    </complex>
</complexes>
