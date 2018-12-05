<?php
session_start();
require(__DIR__ . "/../../database/db.php");
require(__DIR__ . "/../../templates/Block.php");

use Templates\Block;

if (isset($_SESSION["user"])) {
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
        <div class="side-menu">
            <div class="logo centered"></div>
            <div class="menu-items centered">
                <span id="pages" class="active">Все теги</span>
                <a href="../index.php">Назад</a>
            </div>
        </div>
        <div class="content">
            <div class="pages">
                <div class="wrap centered">
                    <h1 style="font-weight: 900">Все страницы</h1>
                    <div class="th">
                        <h3 style="width: 50%;">Title</h3>
                        <h3 style="width: 50%;">Действия</h3>
                    </div>
                    <?
                    $pages = R::find("tags");

                    foreach ($pages as $page) {
                        echo Block::generate_second($page);
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
