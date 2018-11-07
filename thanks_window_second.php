<?php 
    header('Refresh: 5; url=index.html', true, 301);

    $telephone = $_POST['phone-number'];
    $apply_task = $_POST['apply_task'];

    $parcel_type = $_POST['parcel_type'];

    $cargo_help = $_POST['cargohelp'];
    $adding = $_POST['adding'];
    $gazel = $_POST['gazel'];
    $three_ton = $_POST['3ton'];
    $five_ton = $_POST['5ton'];
    $ten_ton = $_POST['10ton'];
    $fura = $_POST['fura'];
    $unusual_shape = $_POST['unusual_shape'];

    $box = $_POST['box'];
    $palet = $_POST['palet'];
    $case = $_POST['case'];
    $bag = $_POST['bag'];
    $big_bag = $_POST['big_bag'];
    $obreshetka = $_POST['obreshetka'];
    $bunch = $_POST['bunch'];
    $other = $_POST['other'];
    $no_wrap = $_POST['no'];

    $top_loading = $_POST['top_loading'];
    $side_loading = $_POST['side_loading'];
    $back_loading = $_POST['back_loading'];
    $combined = $_POST['combined'];
    $no_matter = $_POST['no_matter'];

    $parcel_from_quiz = $_POST['parcel_from_quiz'];
    $parcel_to_quiz = $_POST['parcel_to_quiz'];

    $asap = $_POST['asap'];
    $one_day = $_POST['one_day'];
    $in_week = $_POST['in_week'];
    $in_month = $_POST['in_month'];

    $person = $_POST['person'];
    $company = $_POST['company'];
    $businessman = $_POST['businessman'];
    $OOO = $_POST['OOO'];

    echo $modal_btn+'here';

    $email_body = $email_body = 
        "User Telephon Number: $telephone.\n".
        "Parcel type: $parcel_type.\n".
        "User needs help: $cargo_help.\n".
        "Dogruz: $adding.\n".
        "Gazel: $gazel.\n".
        "3-ton: $three_ton.\n".
        "5-ton: $five_ton.\n".
        "10-ton: $ten_ton.\n".
        "Fura: $fura.\n".
        "Ne gabarit: $unusual_shape.\n".
        "Box: $box.\n".
        "Palet: $palet.\n".
        "Korobka: $case.\n".
        "Bag: $bag.\n".
        "Big_bag: $big_bag.\n".
        "Obreshetka: $obreshetka.\n".
        "Svyazka: $bunch.\n".
        "Other: $other.\n".
        "Bez obertki: $no_wrap.\n".
        "Sverhu: $top_loading.\n".
        "Sboku: $side_loading.\n".
        "Szadi: $back_loading.\n".
        "Combi: $combined.\n".
        "Ne vazno: $no_matter.\n".
        "Parcel from: $parcel_from_quiz.\n".
        "Parcel to: $parcel_to_quiz.\n".
        "Bistro: $asap.\n".
        "1 day: $one_day.\n".
        "1 week: $in_week.\n".
        "1 month: $in_month.\n".
        "Person: $person.\n".
        "Company: $company.\n".
        "Businessman: $businessman.\n".
        "OOO: $OOO.\n".


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