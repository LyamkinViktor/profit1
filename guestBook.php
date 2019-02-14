<?php
session_start();
require_once __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook();

/*
$view = new View;
$view->assign('guestbook', $guestBook);
$view->assign('user', $user);
$view->assign('news', $news->getLast(10));
$view->display('gallery.php'); (аргумент - полный абсолютный путь)
*/

include __DIR__ . '/templates/guestBook.php';