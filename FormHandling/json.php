<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    //json encode
    $kelas = array(
        // 'key' => '
        'xi' => 'kelas 10',
        'xii' => 'kelas 11',
        'xiii' => 'kelas 12',
    );

    foreach ($kelas as $value) {
        echo $value . "<br>";
    }

    echo "<br>";

    $kelasDecode = '{"x" : 1, "xi" : 2, "xii" : 3}';
    var_dump(json_decode($kelasDecode));

    $object = json_decode($kelasDecode);
    print $object;
    ?>
</body>
</html>