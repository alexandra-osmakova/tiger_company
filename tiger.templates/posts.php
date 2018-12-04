<?php

require "../admin/database/db.php";
require "../admin/templates/Block.php";

use Templates\Block;

$pages = R::findAll("pages");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Транспортная компания Tiger Logistic - Статьи</title>

    <link rel="stylesheet" type="text/css" href="tiger.css/tiger.css">
</head>
<body>
<section id="all_articles">
    <div class="upper-block">
        <div class="upper-top"></div>
        <div class="upper-bottom"></div>
    </div>

    <div class="articles">
        <a href=".">< Назад</a>
        <?=Block::generate_all_blocks($pages)?>
    </div>

    <div style="height: 120px;"></div>
</section>
</body>
</html>