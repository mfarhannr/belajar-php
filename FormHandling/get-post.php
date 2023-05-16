<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <!-- metode GET -->
    <!-- <form action="./get-data.php" method="GET">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkkan nama anda">
        </div>
        <div style="margin-bottom: 3px;">
            <label for="username">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Masukkan kelas">
        </div>
        <input type="submit" value="Simpan data">
    </form> -->
    <!-- metode post -->
    <form action="./get-data.php" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkkan nama anda">
        </div>
        <div style="margin-bottom: 3px;">
            <label for="username">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Masukkan kelas">
        </div>
        <input type="submit" value="Simpan data">
    </form>
</body>

</html>