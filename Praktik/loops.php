<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Comments</title>
</head>

<body>
    <?php
    //perulangan;
    for ($awal = 1; $awal <= 10; $awal++){
        echo "nilai: " . $awal . "<br>";
    }
    echo "<br>";
    //for if
    for ($awal= 1; ; $awal++) {
        if ($awal > 10) {
            break;
        }
        echo $awal . "<br>";
    }
    echo "<br>";

    //while
    $i = 1;
        while ($i <= 10) {
        echo $i++;
        }
    echo "<br>";
    echo "<br>";

    //do while
    $i = 1;
    do {
        echo $i . "";
        $i++;
    } while ($i <= 10);
    echo "<br>";
    echo "<br>";
    //foreach
    $arrayteman = array("kelas x", "kelas xi", "kelas xii", "kelas galulus");
    foreach ($arrayteman as $array) {
        echo $array . "<br>";
    }
    
    ?>
</body>

</html>