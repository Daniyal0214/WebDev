<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Заявка</title>
</head>

<body>
    <?php require "блоки/menu.php" ?>
    <div class="container mt-5">
        <h3>Подать Заявку</h3>
        <form action="checker.php" method="post">
            <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
            <textarea name="message" placeholder="Введите ваши контактные данные" class="form-control"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>
    <?php require "блоки/footer.php" ?>
</body>

</html>