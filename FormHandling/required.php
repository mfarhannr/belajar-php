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
    $namaLengkap = "";
    $kelas = '';

    //message error required
    $namaLengkapError = "";
    $kelasError = '';

    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = stripslashes($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;
    }

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        // $namalengkap = dataType($_POST['namalengkap']);
        // $kelas = dataType($_POST['kelas']);
        if(empty($_POST['namaLengkap'])){
            $namaLengkapError = "Nama lengkap tidak boleh kosong, harus diisikan.";
        }else{
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if(empty($_POST['kelas'])){
            $kelasError = "kelas tidak boleh kosong, harus diisikan.";
        }else{
            $kelas = dataType($_POST['kelas']);
        }
    }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" id="namaLengkap" name="namaLengkap">
            <span style="color:red; font-size: 12px;"> <?php echo $namaLengkapError; ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas">
            <span style="color:red; font-size: 12px;"> <?php echo $kelasError; ?></span>
        </div>
        <button type="submit">Simpan</button>
    </form>

    <?php
    echo "<br>";
    echo "Nama saya adalah " . $namaLengkap;
    echo "<br>";
    echo "Kelas saya saat ini " . $kelas;
    ?>

    <?php echo "Today is" . date("d H Y"); ?>
    <?php include './include.php'; ?>
    <?php include '../form/include.php'; ?>

</body>
</html>