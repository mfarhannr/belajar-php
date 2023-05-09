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
    $kalimatstring = "Aku sedang berada pada materi string preg_match().";
    $cari = "/preg_match/";
    $gantikan = "preg_replace";
    echo preg_replace($cari, $gantikan, $kalimatstring);
    echo "<br>";
    echo "2. ";
    $kalimatstring = "Aku telah melalui pembelajaran javascript.";
    $cari = "/javascript/";
    $gantikan = "php";
    echo preg_replace($cari, $gantikan, $kalimatstring);
    ?>
</body>