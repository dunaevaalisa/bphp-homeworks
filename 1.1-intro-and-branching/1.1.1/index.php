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
