<?php
session_start();
require("../database/db.php");
require("../templates/Block.php");

use Templates\Block;

if (isset($_SESSION["user"])) {
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
        <div class="side-menu">
            <div class="logo centered"></div>
            <div class="menu-items centered">
                <span id="wrapper" class="active">Добавить страницу</span>
                <span id="pages">Все страницы</span>
                <a href="../index.php">Выйти</a>
            </div>
        </div>
        <div class="content">
            <div class="wrapper centered active">
                <form action="create.page.php" method="post" enctype="multipart/form-data">
                    <h1>Добавить страницу</h1>

                    <label for="url">ЧПУ</label>
                    <input type="text" id="url" name="url" placeholder="ЧПУ...">

                    <label for="title">Тег title</label>
                    <input type="text" id="title" name="title" placeholder="Title...">

                    <label for="description">Метатег description</label>
                    <input type="text" id="description" name="description" placeholder="Description...">

                    <label for="offer">Оффер страницы</label>
                    <input type="text" id="offer" name="offer" placeholder="Offer...">

                    <label for="content">CTA страницы</label>
                    <input type="text" id="content" name="content" placeholder="Content...">

                    <label for="text_title">Заоголовок текста</label>
                    <input type="text" id="text_title" name="text_title" placeholder="Text title...">

                    <label for="text">Текст</label>
                    <div id="toolbar"></div>
                    <textarea name="text" id="text" class="editor"></textarea>

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

                    <input type="submit" name="add_page" value="Создать страницу">
                </form>
            </div>

            <div class="pages hidden">
                <div class="wrap centered">
                    <h1 style="font-weight: 900">Все страницы</h1>
                    <div class="th">
                        <h3>Title</h3>
                        <h3>Дата</h3>
                        <h3>Действия</h3>
                    </div>
                    <?
                    $pages = R::find("pages");

                    foreach ($pages as $page) {
                        echo Block::generate($page);
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script>
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
    </script>
    </body>


    <?
} ?>
<?php
if ($_SESSION["user"] != "admin") {
    echo "<h1>YOU DON'T HAVE ACCESS TO THIS PAGE</h1>";
}
