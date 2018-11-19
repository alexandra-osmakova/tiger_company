<?php 
    header('Refresh: 5; url=index.html', true, 301);

    $transport = $_POST["transport"];
    $type_of_parcel = $_POST["type_of_parcel"];
    $type_of_parcel_other = $_POST["type_of_parcel_other"];
    $package = $_POST["package"];
    $type = $_POST["type"];
    $parcel_from_quiz = $_POST["parcel_from_quiz"];
    $more_than_one_destination = $_POST["more_than_one_destination"];
    $parcel_to_quiz = $_POST["parcel_to_quiz"];
    $more_than_one_dep = $_POST["more_than_one_dep"];
    $shipping = $_POST["shipping"];
    $organisation = $_POST["organisation"];
    $from = $_POST["from"];
    $answer = $_POST["answer"];


    $email_body =
        "User Telephone Number => $from.\n".

        "User needs help => $answer.\n".

        "Transport type =>  $transport.\n".

        "Type of Parcel => $type_of_parcel $type_of_parcel_other.\n".

        "Package => $package.\n".

        "Where to locate => $type.\n".

        "From => $parcel_from_quiz.\n".

        "To => $parcel_to_quiz.\n".

        "Speed => $shipping.\n".

        "Type of organisation => $organisation.\n".


        $email_subject = "New Form Submission";

        $to = "autotransport24@yandex.ru";

        $ok = mail($to, $email_subject, $email_body);

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
