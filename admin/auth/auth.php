<?php
session_start();

require_once "Verificator.php";

use Util\Verificator;

if(isset($_POST["log"])) {
    $login = $_POST["login"];
    $password = $_POST["pwd"];

    if(Verificator::verify($login, $password)) {
        $_SESSION["user"] = $login;
        header("Location: ../admin/");
    }else {
        echo "<h1 style='color: red'>Access Denied</h1>";
    }
}