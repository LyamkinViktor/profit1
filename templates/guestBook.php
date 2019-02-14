<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>

    <?php foreach ($guestBook->getRecords() as $record) { ?>
    <article style="border: 1px dotted lightgray; margin-bottom: 10px">
        <?php echo $record->getMessage(); ?>
    </article>
    <?php } ?>

    <hr>

    <form action="/guestBookAppend.php" method="post">
        <textarea name="message"></textarea>
        <button type="submit">Отправить</button>
    </form>


    <p>
        <a href="/gallery.php">В галерею</a><br>
        <a href="/calculator.php">На главную</a>
    </p>

</body>
</html>