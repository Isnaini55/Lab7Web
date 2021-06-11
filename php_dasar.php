<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
    <h2>Menggunakan Variable</h2>
    <?php
        $nim = "311910254";
        $nama = 'Isnaini Rizkyana';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
        <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
</body>
</html>