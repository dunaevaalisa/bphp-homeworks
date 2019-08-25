<?php
$variable = 3.14;
if( is_bool($variable)) {
$type = ‘boolean’;
} elseif (is_float($variable)) {
$type = ‘float’;
} elseif (is_int(’$variable’)) {
$type = ‘int’;
} elseif (is_string($variable)) {
$type = ’string’;
} elseif(is_null($variable)) {
$type = ‘null’;
} else {
$type = ‘other’;
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP</title>
</head>
<body>
<ul>
    <li>Блок 1. Базовый синтаксис. PHP в HTML и HTML средствами PHP
        <ul>
            <li>Занятие 1.1. Знакомство с PHP
                <ul>
                    <li><a href="1.1-intro-and-branching/1.1.0">Задание 1.1.0</a></li>
                    <p><?="$variable is $type»?></p>
                    <li><a href="1.1-intro-and-branching/1.1.1">Задание 1.1.1</a></li>
                    <li><a href="1.1-intro-and-branching/1.1.2">Задание 1.1.2</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
</body>
</html>

