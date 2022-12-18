<!doctype html>
<html lang="ru">
<head>
    <?php
    require_once "blocks/head.php";
    ?>
    <title>Контактная форма</title>
</head>
<body>

<!--меню сайта-->
<?php require_once "blocks/header.php";?>

<!--статьи сайта-->
<div class="container mt-5">
<h3>Контактная форма</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите Email"
    class="form-control"><br>
    <textarea name="message" class="form-contrrol"
     placeholder="Введите ваше сообщение"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">
     Отправить </button>
</form>

</div>
<!--Низ страницы-->
<?php require_once "blocks/footer.php";?>

</body>
</html>