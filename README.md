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

![PHP DASAR](https://user-images.githubusercontent.com/81541764/118312301-533a3480-b51b-11eb-86c9-18efea0b7e3f.JPG

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
Untuk mengaksesnya gunakan URL: http://localhost/lab7_php_dasar/latihan2.php?nama=Isnaini
![Predefine Variable $_GET](https://user-images.githubusercontent.com/81541764/118315886-4cfa8700-b520-11eb-9905-db268749ad2c.JPG)

## Membuat Form Input
~~~
<h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php 
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
~~~


