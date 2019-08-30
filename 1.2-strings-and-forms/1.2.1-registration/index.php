<?php
$data = $_POST;
$codeWord = 'nd82jaake';
if (preg_match("/[@\/\*\?,;:]/", $data['login'])) {
  echo 'Поле логин не должно содержать символы @/*?,;:.';  
} elseif (!$data['login']) {
    echo 'Поле логин обязательно к заполнению';
} elseif (strlen($data['password']) < 8) {
    echo 'Длина пароля должна быть минимум 8 символов';
} elseif (preg_match('/^\w+@[a-zA-Z]+\.[a-zA-Z]+$/', trim($data['email'])) === 0) {
    echo 'Неверный формат почтового адреса';
} elseif (strlen(trim($data['firstName'])) === 0 && strlen(trim($data['lastName'])) === 0 && strlen(trim($data['middleName'])) === 0) {
    echo 'ФИО обязательно к заполнению';
} elseif ($codeWord !== $data['code']) {
    echo 'Неверно введено кодовое слово';
} else {
    echo 'У вас все хорошо!';
};

