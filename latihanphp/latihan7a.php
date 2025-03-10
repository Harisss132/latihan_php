<?php 
    $bukuTulis = 12500;
    $jumlahBuku = 25;
    $total1 = ($bukuTulis * $jumlahBuku);
    $diskon = $total1 * 0.05;
    $total = $total1 - $diskon;
    echo "total uang uang harus di bayarkan adalah Rp. $total";
?>