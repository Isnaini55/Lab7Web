# Lab7Web

# Praktikum 7

# Pemograman WEB

~~~
Nama  : Isnaini Rizkyana
NIM   : 311910254
Kelas : TI.19.C1
~~~
## Langkah-langkah Praktikum
## Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP terlebih dahulu.
Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7. Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu XAMPP.

## Install XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan direktorinya (misal: d:\xampp).

## Konfigurasi Web Server
• Konfigurasi Apache
  Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul yang diaktifkan, lokasi document root, dll.
  Lokasi file: \xampp\apache\conf\httpd.conf
  
• Konfigrasi PHP
  Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa. Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error reporting,
  dll.
  Lokasi file: \xampp\php\php.ini
  
• Konfigrasi MySql
  Konfigurasi server MySQL, seperti administrator user, port, timezone, dll.
  Lokasi file: \xampp\mysql\bin\my.ini
  
## Menjalankan Web Server
Untuk menjalankan web server dari menu XAMPP Control.
![Xampp Control](https://user-images.githubusercontent.com/81541764/118308151-d3f63200-b515-11eb-8f17-616db1cd36b3.JPG)

• Uji coba apakah server sudah berkerja dengan baik
  http://127.0.0.1 atau http://localhost
  Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.
• Dokumen Website
  Semua file website tempatkan di direktori: \xampp\htdocs\
• Database MySQL
  Direktori: \xampp\mysql\
  Manajemen database: http://localhost/phpmyadmin
  
## Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)
![lab7_php_dasar](https://user-images.githubusercontent.com/81541764/118308562-4cf58980-b516-11eb-998f-9f77b5f584d2.JPG)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/
![Tampilan Web Server](https://user-images.githubusercontent.com/81541764/118308784-90e88e80-b516-11eb-8f8a-155554c57bfc.JPG)

## PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.
~~~
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
</body>
</html>
~~~
Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

![PHP DASAR](https://user-images.githubusercontent.com/81541764/118318608-cf387a80-b523-11eb-8bf2-429543445fb9.JPG)


## Variable PHP
Menambahkan variable pada program.
![Menggunakan Variabel](https://user-images.githubusercontent.com/81541764/118312633-d8254e00-b51b-11eb-8932-cbd93e04c8a0.JPG)

## Predefine Variable $_GET
~~~
<h2>Predefine Variable</h2>
    <?php 
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
~~~
![Predefine Variable $_GET](https://user-images.githubusercontent.com/81541764/118318565-c47de580-b523-11eb-8e9c-ba6752e6278f.JPG)


## Membuat Form Input
~~~
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Selamat Datang' . $_POST['nama'];
    ?>
    </body>
</html>
~~~

![Form Input](https://user-images.githubusercontent.com/81541764/118323397-c5fedc00-b52a-11eb-8efe-aa43867ea29c.JPG)

## Operator
~~~
<h2>Operator</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
            echo "Gaji sebelum pajak = Rp. $gaji <br>";
            echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
~~~
![Operator](https://user-images.githubusercontent.com/81541764/118323752-50474000-b52b-11eb-981f-242695a463c2.JPG)

## Kondisi IF
~~~
<h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l");
            if ($nama_hari == "Sunday") {
        echo "Minggu";
            } elseif ($nama_hari == "Monday") {
        echo "Senin";
            } else {
        echo "Selasa";
        }
    ?>
~~~
![Kondisi IF](https://user-images.githubusercontent.com/81541764/118323971-97353580-b52b-11eb-8f4b-a2af79264dbb.JPG)

## Kondisi Switch
~~~
<h2>Kondisi Switch</h2>
    <?php
        $nama_hari = date("l");
            switch ($nama_hari) {
            case "Sunday":
        echo "Minggu";
            break;
            case "Monday":
    echo "Senin";
            break;
            case "Tuesday":
    echo "Selasa";
            break;
            default:
    echo "Sabtu";
            }
    ?>
~~~
![Kondisi Switch](https://user-images.githubusercontent.com/81541764/118324233-f6934580-b52b-11eb-9071-0d6794670167.JPG)

## Kondisi Perulangan For
~~~
<h2>Perulangan For</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
            for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
            for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
~~~
![Perulangan For](https://user-images.githubusercontent.com/81541764/118324400-322e0f80-b52c-11eb-8aa9-cb490f538555.JPG)

## Perulangan While
~~~
 <h2>Perulangan While</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
            $i=1;
            while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
~~~
![Perulangan While](https://user-images.githubusercontent.com/81541764/118324530-60135400-b52c-11eb-9568-72a79bb004bc.JPG)

## Perulangan dowhile
~~~
<h2>Perulangan Dowhile</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
            $i=1;
            do {
        echo "Perulangan ke: " . $i . '<br />';
            $i++;
            } while ($i<=10);
    ?>
~~~
![Perulangan dowhile](https://user-images.githubusercontent.com/81541764/118324765-a963a380-b52c-11eb-949d-169535b1f67a.JPG)

# Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.
~~~
<h2>Tugas</h2>
    <form method="post">
            <label>Nama Lengkap: </label>
            <input type="text" name="nama">
            <br>
            <label>Tempat Lahir: </label>
            <input type="text" name="tempat_lahir">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir">
            <br>
            <label>Alamat: </label>
            <input type="text" name="alamat">
            <br>
            <label>Pekerjaan:
            <select name='pekerjaan'>
                <option value='Programmer'>Prgrammer</option>
                <option value='Software Enginer'>Software Enginer</option>
                <option value='IT Konsultan'>IT Konsultan</option>
                <option value='Database Enginer'>Database Enginer</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <h2>Output</h2>
    <?php
        echo '<br> Nama Lengkap : ' . $_POST['nama'];
        echo '<br> Tempat Lahir : ' . $_POST['tempat_lahir'];
        echo '<br> Alamat : ' . $_POST['alamat'];
            $tgl_lahir = @$_POST['tgl_lahir'];
            $lahir = new DateTime($tgl_lahir);
            $hari_ini = new DateTime();
            $diff = $hari_ini->diff($lahir);
        echo "<br> Usia : ". $diff->y ." Tahun";
        echo "<br> Pekerjaan : ". $_POST['pekerjaan'];
            $pekerjaan = @$_POST['pekerjaan'];
            if($pekerjaan == "Prgrammer"){
                echo '<br> Gaji : Rp. 10.000.000,-';
            }
            elseif($pekerjaan == "Software Enginer"){
                echo '<br> Gaji : Rp. 19.500.000,-';
            }
            elseif($pekerjaan == "IT Konsultan"){
                echo '<br> Gaji : Rp. 14.000.000,-';
            }
            elseif($pekerjaan == "Database Enginer"){
                echo '<br> Gaji : Rp. 12.000.000,-';
            }
    ?>
~~~

![Tugas](https://user-images.githubusercontent.com/81541764/118325875-4ffc7400-b52e-11eb-9a01-31a90e06fe69.JPG)


