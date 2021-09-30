<?php

define("PHI", 3.14);

// 1. LUAS PERSEGI
$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas Persegi = ". $luas_persegi . "cm2";
echo "<br> <br>";

// 2. LUAS SEGITIGA
$alas = 12;
$tinggi = 6;
$luas_segitiga = (1/2 * $alas * $tinggi);
echo "Luas Segitiga = ". $luas_segitiga . "cm2";
echo "<br><br>";

// 3. LUAS TRAPESIUM
$sisi_a = 8;
$sisi_b = 6;
$tinggi = 4;
$luas_trapesium = (1/2 * ($sisi_a + $sisi_b) * $tinggi );
echo "Luas Trapesium = ". $luas_trapesium . "cm2";
echo "<br><br>";

// 4. LUAS PERMUKAAN TABUNG
$jari2 = 5;
$tinggi = 5;
$luas_permukaan_tabung = (2 * PHI * $jari2 * ($jari2 + $tinggi));
echo "Luas Permukaan Tabung = ". $luas_permukaan_tabung . "cm2";
echo "<br><br>";

// 5. LUAS PERMUKAAN LINGKARAN [MUNGKIN MAKSUDNYA PERMUKAAN BOLA SEBAB LINGKARAN KAN BANGUNG DATAR, JADI YA TINGGAL PAKAI LUAS LINGKARAN, TIDAK PERLU PERMUKAAN]
$jari2 = 10;
$luas_permukaan_bola = ( 4 * PHI * ($jari2 * $jari2) );
echo "Luas Permukaan Bola = ". $luas_permukaan_bola . "cm2";


?>
