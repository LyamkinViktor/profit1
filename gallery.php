<?php
session_start();
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Gallery.php';

$user = new User();
$gallery = new Gallery();

include __DIR__ . '/templates/gallery.php';