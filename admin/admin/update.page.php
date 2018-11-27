<?php

session_start();
require("../database/db.php");

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    $page = R::load("pages", $_GET["id"]);

    if (isset($_POST["update"])) {
        $page->title = $_POST["title"];
        $page->offer = $_POST["offer"];
        $page->img = $_POST["img"];
        $page->text_title = $_POST["text_title"];
        $page->content = $_POST["content"];
        $page->tag = $_POST["tag"];
        $page->description = $_POST["description"];

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
<div style="display: table-caption;margin-right: auto;margin-left: auto;">
    <form action="update.page.php?id=<?= $page->id ?>" method="post">
        <input type="text" name="title" value="<?= $page->title ?>">
        <input type="text" name="offer" value="<?= $page->offer ?>">
        <input type="file" accept=".jpg, .jpeg, .png" name="img" value="<?= $page->img ?>">
        <input type="text" name="text_title" value="<?= $page->text_title ?>">
        <input type="text" name="content" value="<?= $page->content ?>">
        <input type="text" name="tag" value="<?= $page->tag ?>">
        <input type="text" name="description" value="<?= $page->description ?>">
        <input type="submit" name="update" value="Submit">
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>tinymce.init({
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

    var hide = function (item) {
        $(item).css("display", "none");
    };

    var show = function (item) {
        $(item).css("display", "block");
    };

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
</script>
<? } else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}