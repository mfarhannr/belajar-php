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
    $strpos = "Saat ini saya sudah mencapai materi php";
    $searchstrpos = "php";
    echo strpos($strpos, $searchstrpos);

    echo "<br>";
    echo "2. ";
    $strpos = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos";
    $searchstrpos = "belajar php string";
    echo strpos($strpos, $searchstrpos);
    ?>
</body>

</html>
