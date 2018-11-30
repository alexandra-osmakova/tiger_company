<?php
require("../database/db.php");
$page = R::load("pages", $_GET["id"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$page->title?></title>
</head>

<body>
    <?=$page->text_title?><br>
    <?=$page->offer?><br>
    <?=$page->img?><br>
    <?=$page->content?><br>
    <?=$page->tag?><br>
    <?=$page->description?><br>
    <img src="<?=$page->img_first?>" alt="">
    <img src="<?=$page->img_second?>" alt="">
</body>
</html>