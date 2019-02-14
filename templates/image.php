<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Картинка</title>
</head>
<body>

    <div>
        <img src="/img/<?php echo $gallery->getPictures()[$id]; ?>">
    </div>

    <a href="/gallery.php">Назад</a>

</body>
</html>