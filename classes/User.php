<?php

class User
{

    //возвращает массив всех пользователей и хэшей их паролей
    public function getUsersList() {
        return [
            'admin' => '$2y$10$3s60pVXe08tp11kQA1wSV.8jzh6XCAU6VRR1hDGl.8SnDJi5uQQb6', //12345
            'user1' => '$2y$10$TQzc7m6F/RsE/if2kbwuKu8I28ZsNpPkb4sXykduu4YYmqsMnqnBW', //56789
            'user2' => '$2y$10$1WB3UeIbLAuRPwpLy6gyQe7iCnEcrcTQwAw6VDdU/bKQNWUgi3RGG' //01234
        ];
    }

// проверяет - существует ли пользователь с заданным логином?
    public function existsUser($login) {
        if (isset($this->getUsersList()[$login])) {
            return true;
        }
        return false;
    }

//пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
    public function checkPassword($login, $password) {
        $hash = $this->getUsersList()[$login];
        if (true == $this->existsUser($login) && true == password_verify($password, $hash)) {
            return true;
        }
        return false;
    }

//которая возвращает либо имя вошедшего на сайт пользователя, либо null
    public function getCurrentUser() {
        if (isset($_SESSION['User']) && true == $this->existsUser($_SESSION['User'])) {
            return $_SESSION['User'];
        }
        return null;
    }

}