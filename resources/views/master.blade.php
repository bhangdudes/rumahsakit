<!DOCTYPE html>
<html>

<head>
    <title>UAS Pemweb Lanjut</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/topnav.css">
</head>
<body>
<div class="topnav">
        <a class="active" href="<?php echo url('/home') ?>">HOME</a>
        <a href="<?php echo url('/pasien') ?>">Data Pasien</a>
        <a href="<?php echo url('/kamar') ?>">Data Kamar</a>
        <a href="<?php echo url('/jeniskamar') ?>">Data Jenis Kamar</a>
        <a href="<?php echo url('/tentang') ?>">Tentang Kami</a>
        <a href="<?php echo url('/kontak') ?>">Kontak</a>
        <a href="<?php echo url('/logout') ?>">LOGOUT</a>   
        <br />
        <br />
</div>

<h3> @yield('judul_halaman') </h3>

@yield('konten')

<br />
<br />
<hr />

<footer style="text-align: center;">
    <p>Project Tugas Akhir Pemrograman Web Lanjut</p>
</footer>
</body>

</html>