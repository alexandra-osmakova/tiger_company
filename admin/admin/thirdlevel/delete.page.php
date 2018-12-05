<?php

session_start();

require(__DIR__ . "/../../database/db.php");

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {
    $page = R::load("pages", $_GET["id"]);
    R::trash($page);
    header("Location: index.php");
} else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}