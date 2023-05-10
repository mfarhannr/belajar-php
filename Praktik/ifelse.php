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
        $nilai = 74;
        if ($nilai >= 75) {
            echo "kamu sudah diatas KKM";
        } else{
            echo "kamu dibawah KKM";
        }

        echo "<br>";
        $waktu = 10;
        if($waktu <= 10){
            echo "Selamat Pagi";
        }else {
            echo "selamat Siang";
        }
        echo "<br>";

        //elseif
        $nilaitugas = 80;
        if ($nilaitugas >= 90) {
            echo "Selamat kamu nilainya bagus! (A)";
        }elseif ($nilaitugas >= 85) {
            echo "Selamat kamu nilainya cukup bagus (A-)";
        }elseif ($nilaitugas >= 80) {
            echo "Selamat kamu nilainya bagus (B)";
        }elseif ($nilaitugas >= 75) {
            echo "Selamat kamu nilainya kurang bagus (C)";
        }else{
            echo "Selamat kamu remedial";
        }
        echo "<br>";

        //switch
        $hari = "senin";
        switch ($hari) {
            case 'senin';
                echo " Hari ini adalah senin";
                break;
            case 'selasa';
                echo " Hari ini adalah selasa";
                break;
            case 'rabu';
                echo " Hari ini adalah rabu";
                break;
            case 'kamis';
                echo " Hari ini adalah kamis";
                break;
            case 'jumat';
                echo " Hari ini adalah jum'at";
                break;
            default:
                echo "hari weekend libur! Jangan Ganggu!";
                break;
        }
    ?>
</body>