<?php
/**
 * Template part for displaying callBackForm
 *
 * @package SU-7
 */

?>

<div class="callBackForm">
    <div class="callBackForm-content">
        <img id="callBackForm-close" src="<?php echo get_template_directory_uri(); ?>/img/close.svg"/>
        <span class="callBackForm-title">Заказать звонок</span>
        <input required type="text" placeholder="Введите имя"/>
        <input required class="tel" type="tel" placeholder="Номер телефона"/>
        <input required type="email" placeholder="Адрес эл. почты"/>
        <input onclick="formSend();" type="button" value="ОТПРАВИТЬ"/>
        <span class="formThanks">Спасибо!</span>
        <span class="formCheckMessage">* Заполнены не все поля!</span>
    </div>
</div>
