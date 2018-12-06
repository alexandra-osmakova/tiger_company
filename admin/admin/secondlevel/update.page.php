<?php

session_start();

require(__DIR__ . "/../../database/db.php");

$uploaddir = __DIR__ . '../../../tiger.img/';

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    $page = R::load("tags", $_GET["id"]);

    if (isset($_POST["update"])) {
        $page->offer = $_POST["offer"];
        $page->cta = $_POST["cta"];
        $page->description = $_POST["descr"];
        $page->title = $_POST["title"];
        $page->text_title = $_POST["text_title"];
        $page->text = $_POST["text"];

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

                <label for="title">Заголовок страницы</label>
                <input type="text" name="title" id="title" value="<?= $page->title ?>">

                <label for="offer">Оффер</label>
                <textarea name="offer" id="offer" cols="30" rows="10" style="height: 100px;width:50%"><?= $page->offer ?></textarea>

                <label for="cta">CTA</label>
                <textarea name="cta" id="cta" cols="30" rows="10" style="height: 100px;width:50%"><?= $page->cta ?></textarea>

                <label for="text_title">Заголовок текста</label>
                <input type="text" name="text_title" id="text_title" value="<?= $page->text_title ?>">

                <label for="text">Текст</label>
                <textarea name="text" id="text" cols="30" rows="10" style="height: 100px;"><?= $page->text ?></textarea>

                <label for="descr">Описание</label>
                <textarea name="descr" id="descr" cols="30" rows="10" style="height: 100px;width:50%"><?= $page->description ?></textarea>

                <iframe src="../../../<?=$page->tag?>/" frameborder="0" width="1000px" height="500px" style="margin-top: 20px;"></iframe>

                <input type="submit" name="update" value="Сохранить">
            </form>
        </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#text',
        theme: 'modern',
        width: 600,
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],
        content_css: '../css/admin.css',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
    });
</script>
<? } else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}