$name = mb_convert_case(trim($_POST['name']), MB_CASE_TITLE, "UTF-8");
$surname = mb_convert_case(trim($_POST['surname']), MB_CASE_TITLE, "UTF-8");
$lastName = mb_convert_case(trim($_POST['lastName']), MB_CASE_TITLE, "UTF-8");

$fullname = $name. ‘ ‘ . $surname . ‘ ‘ . $initials;
$fio = substr($name,0, 1). ‘ ’ . substr($surname, 0,1) . ‘ ‘ .substr($initials);
$surnameAndInitials = substr($surname,0,1)) . ‘ ‘ . substr($name,0, 1)). '.' .substr($initials));
