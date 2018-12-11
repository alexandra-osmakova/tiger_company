<?php

session_start();

header('Refresh: 3; url=index.php', true, 301);

require __DIR__ . "/../../database/db.php";

$page = R::dispense("pages");

$uploaddir = __DIR__ . '/../../../tiger.img/';

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {
    if (isset($_POST["add_page"])) {

        $file_path_first = $uploaddir . $_FILES['img_first']['name'];
        $file_path_second = $uploaddir . $_FILES['img_second']['name'];

        move_uploaded_file($_FILES['img_first']['tmp_name'], $file_path_first);
        move_uploaded_file($_FILES['img_second']['tmp_name'], $file_path_second);

        $url_first = "../tiger.img/" . $_FILES['img_first']['name'];
        $url_second = "../tiger.img/" . $_FILES['img_second']['name'];

        $page->url = $_POST["url"];
        $page->title = $_POST["title"];
        $page->offer = $_POST["offer"];
        $page->img_first = $url_first;
        $page->img_second = $url_second;
        $page->text_title = $_POST["text_title"];
        $page->content = $_POST["content"];
        $page->tag = $_POST["tag"];
        $page->text = $_POST["text"];
        $page->description = $_POST["description"];
        $page->date = date("Y-m-d H:i:s");
        $page->least = ($_POST["least"] === "on") ? true : false;
        $page->most = ($_POST["most"] === "on") ? true : false;

        try {
            R::store($page);
            echo "<div><h1 style='color: green'>Успешно</h1></div>";
        }catch (Exception $e) {
            echo "<h1>" . $e->getMessage() . "</h1>";
            if($e->getLine() === 768) {
                echo "<h1 style='color:red'>Такое ЧПУ уже существует<h1>";
            }
        }
    } else {
        echo "<div><h1 style='color: red'>Что-то пошло не так</h1>></div>";
    }
}else {
    echo "<h1>YOU DON'T HAVE ACCESS TO THIS PAGE</h1>";
}