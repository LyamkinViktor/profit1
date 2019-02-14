<?php
session_start();
require_once __DIR__ . '/classes/User.php';

$user = new User();

if (isset($_POST['exit'])) {
    session_unset();
}

//ЕСЛИ пользователь уже вошел, ТО редирект на главную страницу
if (null != $user->getCurrentUser() ) {
    header('Location: /index.php');
    exit;
}

//ЕСЛИ введены данные в форму входа - проверяем им checkPassword и ЕСЛИ проверка прошла,
// ТО запоминаем информацию о вошедшем пользователе
if (isset($_POST['login']) && isset($_POST['pwd'])) {
        $login = trim($_POST['login']);
        $pwd = trim($_POST['pwd']);
        if (true == $user->checkPassword($login, $pwd)) {
            $_SESSION['login'] = $login;
            header('Location: /index.php');
            exit;
        } else {
            $error = 'Неверная пара логин-пароль';
        }
}

include __DIR__ . '/templates/login.php';