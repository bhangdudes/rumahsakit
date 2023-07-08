<!DOCTYPE html>
<html>
    <head>
        <title>UAS Pemweb Lanjut</title>
        <link rel="stylesheet" href="css/topnav.css">
    </head>
    <div class="topnav">
    <body>
            <a class="active" href="<?php echo url('/home') ?>">HOME</a>
            <a href="<?php echo url('/pasien') ?>">Data Pasien</a>
            <a href="<?php echo url('/kamar') ?>">Data Kamar</a>
            <a href="<?php echo url('/pasien') ?>">Data Jenis Kamar</a>
            <a href="<?php echo url('/tentang') ?>">Tentang Kami</a>
            <a href="<?php echo url('/kontak') ?>">Kontak</a>
        <br/>
        <br/>
    </body>
    </div>
    
        <h3> @yield('judul_halaman') </h3>
 
        @yield('konten')
 
        <br/>
        <br/>
        <hr/>
 
        <footer style="text-align: center;"  >
            <p>Project Tugas Akhir Pemrograman Web Lanjut</p>
        </footer>
    </body>
</html>

