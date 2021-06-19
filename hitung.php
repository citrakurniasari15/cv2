<?php 
include "webcounter.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Menghitung Jumlah Kunjungan Dengan PHP dan TXT</title>
    <style>
        .welcome {
            color:#0000CD;
            text-align: left;
        }
    </style>
</head>
<body>

<h2 class="welcome">
 Selamat Datang Anda Adalah Pengunjung<br>
 <?php 
 echo "Ke - $visitor";
 ?>
</h2>
</body>
</html>
