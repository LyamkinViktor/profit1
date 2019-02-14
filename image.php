<?php
require_once __DIR__ . '/classes/Gallery.php';

$id = $_GET['id'];
$gallery = new Gallery();

include __DIR__ . '/templates/image.php';