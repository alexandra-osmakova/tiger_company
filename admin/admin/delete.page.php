<?php

session_start();

require("../database/db.php");

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {
    $page = R::load("pages", $_GET["id"]);
    R::trash($page);
    header("Location: ../admin");
} else {
    echo "<h1 style='color: RED;'>ACCESS DENIED</h1>";
}