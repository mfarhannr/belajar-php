<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>

<body>
    <?php
    echo "1. ";
    $karakter = "Saat ini saya sudah mencapai materi php.";
    echo substr($karakter, 0, 10);
    echo "<br>";
    echo "2. ";
    $karakter2 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.";
    echo substr($karakter2, 3, 20);
    ?>
</body>