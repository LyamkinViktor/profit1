<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>



<form action="/calculator.php" method="get">
    <input type="number" name="x" value="<?php echo $x; ?>">
    <select name="action">
        <option <?php if ($action == '+') {?> selected <?php } ?> value="+">+</option>
        <option <?php if ($action == '-') {?> selected <?php } ?> value="-">-</option>
        <option <?php if ($action == '*') {?> selected <?php } ?> value="*">*</option>
        <option <?php if ($action == '/') {?> selected <?php } ?> value="/">/</option>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>">
    <button type="submit">=</button>
    <?php echo calculate($x, $y, $action); ?>
</form>

<p>
    <a href="/gallery.php">В галерею</a><br>
    <a href="/guestBook.php">Гостевая книга</a><br>
    <a href="/index.php">Главная страница</a><br>
</p>

</body>
</html>