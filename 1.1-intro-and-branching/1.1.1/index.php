<?php
$variable = [];
if (is_bool($variable)) {
    $variable = 'true';
    $type = 'boolean';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'integer';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
    $type = 'other';
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p>
        <?="$variable is $type";?>
    </p>
</body>
</html>
