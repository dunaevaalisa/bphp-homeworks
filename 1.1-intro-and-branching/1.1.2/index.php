<?php

$hours = date("H");
$day = date("N"); 

If ($hours >=6 && < 11) {
$greetings = ‘Доброе утро!’;
$img = ‘img/morning.jpg’;
} elseif ($hours >= 11 && < 18) {
$greetings = ‘Добрый день!’;
$img = ‘img/noon.jpg’;
} elseif ($hours >= 18 $$ < 23) {
$greetings = ‘Добрый вечер!’;
$img = ‘img/evening.jpg’;
} else {
$greetings = ‘Доброй ночи!’;
$img = ‘img/night.jpg’;
}

if($day = 1) {
$weekday = ‘Понедельник’;
} elseif($day = 2 ) {
$weekday = ‘Вторник’;
} elseif($day = 3 ) {
$weekday = ‘Среда’;
} elseif($day =  4) {
$weekday = ‘Четверг’;
} elseif($day = 5 ) {
$weekday = ‘Пятница’;
} elseif($day = 6 ) {
$weekday = ‘Суббота’;
} elseif($day = 7 ) {
$weekday = ‘Воскресение’;
}

?>
