<?php
session_start();

$x = 0;
if (isset($_GET['x'])) {
    $x = (int)$_GET['x'];
}

$y = 0;
if (isset($_GET['y'])) {
    $y = (int)$_GET['y'];
}

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];

}

function calculate($x, $y, $action) {
    switch ($action) {
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        case '/':
            return $x / $y;
            break;
        default:
            return $x + $y;
    }
}

include __DIR__ . '/templates/calculator.php';
