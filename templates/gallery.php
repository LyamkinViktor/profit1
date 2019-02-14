<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>

<?php
foreach ($gallery->getPictures() as $key => $pic) {
    if ($pic != '.' && $pic != '..') { ?>
        <a href="/image.php?id=<?php echo $key; ?>">
            <img src="/img/<?php echo $pic; ?>" width="350" height="250">
        </a>
    <?php }
} ?>

<?php
if (null != $user->getCurrentUser()) {?>
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Загрузить</button>
    </form>
<?php } ?>

<p>
    <a href="/guestBook.php">Гостевая книга</a><br>
    <a href="/calculator.php">Калькулятор</a><br>
    <a href="/index.php">Главная страница</a><br>
</p>

</body>
</html>