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
    $stringtunggal = "Bintang, Arya, Farhan, Nabil";
    $explode = explode(",", $stringtunggal);
    print_r ($explode);
    echo "<br>";
    echo "2. ";
    $stringtunggal = "html- css- javascript- php";
    $explode = explode("-", $stringtunggal);
    print_r ($explode);
    ?>
</body>