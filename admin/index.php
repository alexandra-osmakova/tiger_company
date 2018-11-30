<?
session_start();

if (isset($_SESSION["user"])) {
    unset($_SESSION["user"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin :: Login</title>

    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<section id="login">
    <div class="form-container">
        <div class="logo centered"></div>
        <form action="auth/auth.php" method="post">
            <input type="text" id="login" class="centered" name="login" placeholder="Login...">
            <input type="password" id="pwd" class="centered" name="pwd" placeholder="Password...">
            <input type="submit" class="centered" name="log" value="Войти">
        </form>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("form").on("submit", function (e) {
        if ($("input#login").val() === "") {
            $("input#login").css("border-color", "darkred");
            return false;
        } else if ($("input#pwd").val() === "") {
            $("input#pwd").css("border-color", "darkred");
            return false;
        }
    });
</script>
</body>
</html>
