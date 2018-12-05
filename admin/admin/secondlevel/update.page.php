<?php

session_start();

require(__DIR__ . "/../../database/db.php");

$uploaddir = __DIR__ . '../../../tiger.img/';

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    $page = R::load("tags", $_GET["id"]);

    if (isset($_POST["update"])) {
        $page->offer = $_POST["offer"];
        $page->cta = $_POST["cta"];

        R::store($page);
    }

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Администратор :: Tiger Logistics</title>
        <link rel="stylesheet" type="text/css" href="../../css/admin.css">

    </head>
<body>
<section id="admin">
    <div class="content">
        <div class="wrapper centered active">
            <form style="margin: 70px 0" action="update.page.php?id=<?= $page->id ?>" method="post" enctype="multipart/form-data">
                <h1>Редактировать тег: <?= $page->id ?></h1>
                <a href="index.php" class="button-standart">Назад</a>

                <label for="tag">Тег страницы</label>
                <input type="text" name="tag" id="tag" value="<?= $page->tag ?>" disabled>

                <label for="offer">Оффер</label>
                <textarea name="offer" id="offer" cols="30" rows="10" style="height: 100px;"><?= $page->offer ?></textarea>

                <label for="cta">CTA</label>
                <textarea name="cta" id="cta" cols="30" rows="10" style="height: 100px;"><?= $page->cta ?></textarea>

                <iframe src="../../../<?=$page->tag?>/" frameborder="0" width="1000px" height="500px" style="margin-top: 20px;"></iframe>

                <input type="submit" name="update" value="Сохранить">
            </form>
        </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<? } else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}