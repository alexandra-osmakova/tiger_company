<?php

session_start();

require("../database/db.php");

$uploaddir = '../../tiger.img/';

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    $page = R::load("pages", $_GET["id"]);

    if (isset($_POST["update"])) {
        if ($_FILES['img_first']["name"] !== "") {
            $file_path_first = $uploaddir . $_FILES['img_first']['name'];
            move_uploaded_file($_FILES['img_first']['tmp_name'], $file_path_first);
            $url_first = "../tiger.img/" . $_FILES['img_first']['name'];

            $page->img_first = $url_first;
        }
        if ($_FILES['img_second']["name"] !== "") {
            $file_path_second = $uploaddir . $_FILES['img_second']['name'];
            move_uploaded_file($_FILES['img_second']['tmp_name'], $file_path_second);
            $url_second = "../tiger.img/" . $_FILES['img_second']['name'];

            $page->img_second = $url_second;
        }

        $page->title = $_POST["title"];
        $page->offer = $_POST["offer"];
        $page->text_title = $_POST["text_title"];
        $page->content = $_POST["content"];
        $page->tag = $_POST["tag"];
        $page->text = $_POST["text"];
        $page->description = $_POST["description"];
        $page->date = date("Y-m-d H:i:s");

        R::store($page);
    }

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Администратор :: Tiger Logistics</title>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">

    </head>
<body>
<section id="admin">
    <div class="content">
        <div class="wrapper centered active">
            <form action="update.page.php?id=<?= $page->id ?>" method="post" enctype="multipart/form-data">
                <h1>Редактировать страницу: <?= $page->id ?></h1>
                <a href="index.php" class="button-standart">Назад</a>

                <label for="title">Тег title</label>
                <input type="text" id="title" name="title" value="<?= $page->title ?>">

                <label for="description">Метатег description</label>
                <input type="text" id="description" name="description" value="<?= $page->description ?>">

                <label for="offer">Оффер страницы</label>
                <input type="text" id="offer" name="offer" value="<?= $page->offer ?>">

                <label for="content">CTA страницы</label>
                <input type="text" id="content" name="content" value="<?= $page->content ?>">

                <label for="text_title">Заоголовок текста</label>
                <input type="text" id="text_title" name="text_title" value="<?= $page->text_title ?>">

                <label for="text">Текст</label>
                <div id="toolbar"></div>
                <textarea name="text" id="text" class="editor"><?= $page->text ?></textarea>

                <div class="files">
                    <div class="file">
                        <label for="img_first">Обложка первого блока</label>
                        <div class="file-upload">
                            <label>
                                <input type="file" accept="image/*" id="img_first" name="img_first">
                                <span>Выберите файл</span>
                            </label>
                        </div>
                        <input type="text" id="filename_first" class="filename" disabled>
                    </div>

                    <div class="file">
                        <label for="img_second">Картинка для текста</label>
                        <div class="file-upload">
                            <label>
                                <input type="file" accept="image/*" id="img_second" name="img_second">
                                <span>Выберите файл</span>
                            </label>
                        </div>
                        <input type="text" id="filename_second" class="filename" disabled>
                    </div>
                </div>

                <label for="tag">Тег страницы</label>
                <select name="tag" id="tag">
                    <option value="gruzoperevozki-po-rossii" selected>Грузоперевозки по России</option>
                    <option value="gruzoperevozki-furami">Грузоперевозки фурами</option>
                    <option value="gruzoperevozki-refrizheratorom">Грузоперевозки рефрижератором</option>
                    <option value="poputnye-gruzoperevozki">Попутные грузоперевозки</option>
                    <option value="dostavka-sbornyh-gruzov">Доставка сборных грузов</option>
                    <option value="pereezd-mezhgorod">Переезды межгород</option>
                    <option value="perevozka-lichnykh-vechey">Перевозка личных вещей</option>
                    <option value="perevozka-konkretnyh-vidov-gruza">Перевозка конкретных видов груза</option>
                    <option value="gruzoperevozki-kamazom">Грузоперевозки КамАЗом</option>
                </select>

                <input type="submit" name="update" value="Сохранить">
            </form>
        </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
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

    $("span").on("click", function (e) {
        $("span").attr("class", "");
        $(e.currentTarget).attr("class", "active");

        if (e.currentTarget.id === "wrapper") {
            $("div.pages").attr("class", "pages hidden");
            $("div.wrapper").attr("class", "wrapper active");
        }
        if (e.currentTarget.id === "pages") {
            $("div.pages").attr("class", "pages active");
            $("div.wrapper").attr("class", "wrapper hidden");
        }
    });

    $(document).ready(function () {
        $(".file-upload input[type=file]").change(function () {

            var filename = $(this).val().replace(/.*\\/, "");

            if (this.id === "img_first") {
                $("#filename_first").val(filename);
            }
            if (this.id === "img_second") {
                $("#filename_second").val(filename);
            }
        });
    });

    let options = $("select").find("option");

    for (let i = 0; i < 9; i++) {
        if ($(options[i]).val() === "<?=$page->tag?>") {
            options[i].selected = true;
        }
    }
</script>
<? } else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}