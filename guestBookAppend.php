<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

$guestBook = new GuestBook();
$record = new GuestBookRecord($_POST['message']);

$guestBook->append($record)->save();

header('Location: /guestBook.php');