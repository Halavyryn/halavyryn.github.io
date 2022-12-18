<!doctype html>
<html lang="ru">
<head>
    <?php
    require_once "blocks/head.php";
    ?>
    <title>PHP веб сайт</title>
</head>
<body>
<!--меню сайта-->
<?php
require_once "blocks/header.php";
?>

<!--статьи сайта-->
<div class="container mt-5">
    <h3 class="mb-5">Наши статьи</h3>

    <div class="d-flex flex-wrap">
        <?php    for( $i = 0 ; $i < 5;$i++):    ?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Просто текст</h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail" alt="image">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                </div>
            </div>
        <?php    endfor;    ?>
    </div>
</div>
<!--Низ страницы-->
<?php
require_once "blocks/footer.php";
?>
</body>
</html>