<?php
/**
 * The template for displaying filterSorting
 *
 * @package SU-7
 */
?>

<div class="filterSorting">
    <div class="filterSorting-left">
        <input id="closeFilter" type="button" value="<   Назад"/>
        <span roomCount="1" class="sortRoomsButton sortingRule sortingRuleRoomCount"><span class="mobileOff">1-комнатные</span><span class="mobileOn">1-комн.</span></span>
        <span roomCount="2" class="sortRoomsButton sortingRule sortingRuleRoomCount"><span class="mobileOff">2-комнатные</span><span class="mobileOn">2-комн.</span></span>
        <span roomCount="3" class="sortRoomsButton sortingRule sortingRuleRoomCount"><span class="mobileOff">3-комнатные</span><span class="mobileOn">3-комн.</span></span>
    </div>
    <div class="filterSorting-right">
        <div price="up" class="filterSorting-rules">
            <span class="sortingRule sortingRuleTop">По возрастанию цены</span>
            <span class="sortingRule sortingRuleBottom">По убыванию цены</span>
            <img  class="trinagle" src="/wp-content/themes/su-7/img/trinagle.svg.svg"/>
        </div>
        <span class="sortingRule">Найдено квартир:<span class="filterRoomCount">25</span></span>
    </div>
</div>
