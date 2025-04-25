<?php
// String dasar
$nama = "Andi";
echo "Halo, nama saya " . $nama . "<br>";

// 1. Modify Strings
$teks = "Halo Dunia";
echo strtoupper($teks) . "<br>"; // jadi huruf besar semua
echo strtolower($teks) . "<br>"; // jadi huruf kecil semua
echo strlen($teks) . "<br>";     // panjang string

// 2. Concatenate Strings (menggabungkan)
$awal = "Selamat";
$akhir = "Datang";
$gabung = $awal . " " . $akhir;
echo $gabung . "<br>";

// 3. Slicing Strings (ambil sebagian)
$kalimat = "Belajar PHP itu seru!";
$potong = substr($kalimat, 0, 7); // ambil dari index ke-0 sebanyak 7 karakter
echo $potong . "<br>"; // output: Belajar

// 4. Escape Characters
$ucapan = "Dia berkata: \"Aku suka PHP!\"";
echo $ucapan;
?>
