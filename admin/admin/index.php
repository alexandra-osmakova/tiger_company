<?
session_start();

if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin :: Login</title>

    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<section id="login">
    <div class="form-container">
        <div class="logo centered"></div>
        <div class="buttons centered">
            <a href="secondlevel" class="button-standart">Страницы ВТОРОГО уровня</a>
            <a href="thirdlevel" class="button-standart">Страницы ТРЕТЬЕГО уровня</a>
            <a href="../index.php" class="button-standart">Выйти</a>
        </div>
    </div>
</section>

</body>
</html>
<?}else {
    echo "<h1 style='color: red'>ACCESS DENIED</h1>";
}?>