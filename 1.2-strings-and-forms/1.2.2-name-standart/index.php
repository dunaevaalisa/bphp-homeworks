<?php
$name = mb_convert_case(trim($_POST['name']), MB_CASE_TITLE, "UTF-8");
$surname = mb_convert_case(trim($_POST['surname']), MB_CASE_TITLE, "UTF-8");
$lastName = mb_convert_case(trim($_POST['lastName']), MB_CASE_TITLE, "UTF-8");

$fullname = $name. ‘ ‘ . $surname . ‘ ‘ . $initials;
$fio = substr($name,0, 1). ‘ ’ . substr($surname, 0,1) . ‘ ‘ .substr($initials);
$surnameAndInitials = substr($surname,0,1)) . ‘ ‘ . substr($name,0, 1)). '.' .substr($initials));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php</title>
</head>
<body>
    <?="<p>Полное имя: '$fullname'</p>";?>
    <?="<p>Фамилия и инициалы: '$surnameAndInitials'</p>";?>
    <?="<p>Аббревиатура: '$fio'</p>";?>
</body>
</html>
