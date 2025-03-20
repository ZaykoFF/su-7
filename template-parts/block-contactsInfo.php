<?php
/**
 * Template part for displaying contactsInfo
 *
 * @package SU-7
 */

?>

<div class="contacts-info" style="justify-content:space-between;">
    <div class="contacts-info-left">
        <p><b>Адрес:</b> 156000 г. Кострома, ул. Свердлова, 41Б</p>
        <p><b>Отдел продаж:</b> +7 4942 30-30-12</p>
        <p><b>Эл. почта:</b> su7-k@mail.ru</p>
        <p><b>График работы:</b> Пн-Пт с 08:00 до 17:00</p>
        <br>
        <p><b>Отдел снабжения::</b> 47-01-01</p>
        <p><b>ПТО:</b> 47-01-02</p>
        <p><b>Бухгалтерия:</b> 47-01-03</p>
    </div>
    <div class="contacts-info-right">
		<img src="<?php echo get_field('фото_офиса'); ?>" style="display: flex; margin: auto;"/>
    </div>
</div>

<style>
@media only screen and (min-width: 320px) and (max-width: 1023px)
.contacts-info {
    flex-direction: column !important;
}
</style>
