<?php
include($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?>'; 
?>
<realty-feed xmlns="http://webmaster.yandex.ru/schemas/feed/realty/2010-06">
<generation-date><?= date('c'); ?></generation-date>

<?php
//Получаем массив постов для обработки
$posts = get_posts( array(
	'numberposts' => -1,
	'post_type'   => 'borovaya-rooms',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){

if (get_field('статус', $post->ID) == 'Свободна') {
	
echo'
	<offer internal-id="' . $post->ID . '">
	<deal-status>Продажа от застройщика</deal-status>
	<price>
	<value>' . get_field('цена', $post->ID) . '</value>
	<currency>RUR</currency>
	</price>
	<image>
	'. get_field('план', $post->ID) .'
	</image>
	<area>
	<value>'. get_field('площадь', $post->ID) .'</value>
	<unit>кв. м</unit>
	</area>
	<living-space>
	<value>'.  ((get_field('жилая_площадь', $post->ID)) ? get_field('жилая_площадь', $post->ID) : '0')  .'</value>
	<unit>кв. м</unit>
	</living-space>
	<kitchen-space>
	<value>'. ((get_field('площадь_кухни', $post->ID)) ? get_field('площадь_кухни', $post->ID) : '0') .'</value>
	<unit>кв. м</unit>
	</kitchen-space>
	<room-space>
		<value>'. ((get_field('площадь_комнаты_1', $post->ID)) ? get_field('площадь_комнаты_1', $post->ID) : '0') .'</value>
		<unit>кв. м</unit>
	</room-space>';
	
	if (get_field('количество_комнат', $post->ID) >= 2) {
		
		echo '
			<room-space>
				<value>'. ((get_field('площадь_комнаты_2', $post->ID)) ? get_field('площадь_комнаты_2', $post->ID) : '0') .'</value>
				<unit>кв. м</unit>
			</room-space>
		';
		
	};
	
	if (get_field('количество_комнат', $post->ID) >= 3) {
		
		echo '
			<room-space>
				<value>'. ((get_field('площадь_комнаты_3', $post->ID)) ? get_field('площадь_комнаты_3', $post->ID) : '0') .'</value>
				<unit>кв. м</unit>
			</room-space>
		';
		
	};
		
echo'	
	<new-flat>да</new-flat>
	<floor>' . get_field('этаж', $post->ID) . '</floor>
	<rooms>' . get_field('количество_комнат', $post->ID) . '</rooms>
	<sales-agent>
	<organization>СУ-7</organization>
	<phone>+7 4942 30-30-12</phone>
	<category>застройщик</category>
	<url>' . get_site_url() . '</url>
	</sales-agent>
	<building-name>ЖК "Высотка на Боровой"</building-name>
	<type>продажа</type>
	<property-type>жилая</property-type>
	<category>квартира</category>
	<creation-date>2021-03-18T10:47:04+03:00</creation-date>
	<location>
	<country>Россия</country>
	<region>Костромская область</region>
	<district>Костромской район</district>
	<locality-name>Кострома</locality-name>
	<address>ул. Боровая, 34а</address>
	<latitude>57.800790</latitude>
	<longitude>40.924136</longitude>
	</location>
	<floors-total>9</floors-total>
	<yandex-building-id>118228</yandex-building-id>
	<yandex-house-id>172296</yandex-house-id>
	<building-state>built</building-state>
	<built-year>2024</built-year>
	<ready-quarter>4</ready-quarter>
	<building-type>кирпичный</building-type>
	<building-section>1</building-section>
	<description>
    Проектируемое здание многоквартирного жилого дома, представляет собой двухсекционное девятиэтажное здание с техническим подпольем.
	</description>
	</offer>
';
}
};
	
?>

</realty-feed>
