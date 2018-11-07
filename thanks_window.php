<?php 
    header('Refresh: 5; url=index.html', true, 301);

    $user_name = $_POST['name'];
    $telephone = $_POST['phone-number'];

    $email_body = "User Name: $user_name.\n".
    "User Telephon Number: $telephone.\n".
    $email_subject = "New Form Submission";

    $to = "alexandra.osmakova@gmail.com";

    $ok = mail($to, $email_subject, $email_body, $headers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./tiger.css/tiger.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <section class="thanks_modal">
        <div class="thick_container">
            <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <path d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z"
                    fill="#ffdb4d" />
            </svg>
        </div>
        <h3>Спасибо <br> за вашу заявку!</h3>
        <p>Мы свяжемся с Вами в ближайшее время.</p>
    </section>
</body>

</html>