<?php
session_start();
require_once __DIR__ . '/classes/User.php';

if (isset($_POST['exit'])) {
    session_unset();
}

$user = new User();

//ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
if (null != $user->getCurrentUser() ) {
    header('Location: /index.php');
    exit;
}

//ЕСЛИ введены данные в форму входа - проверяем им checkPassword и ЕСЛИ проверка прошла,
// ТО запоминаем информацию о вошедшем пользователе
if (isset($_POST['User']) && isset($_POST['pwd'])) {
        $login = trim($_POST['User']);
        $pwd = trim($_POST['pwd']);
        var_dump($login);
        var_dump($pwd);
        exit;
        if (true == $user->checkPassword($login, $pwd)) {
            $_SESSION['User'] = $login;
            header('Location: /index.php');
            exit;
        } else {
            $error = 'Неверная пара логин-пароль';
        }
}

include __DIR__ . '/templates/login.php';