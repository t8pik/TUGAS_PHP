<!DOCTYPE html>
<html>
<body>

<?php
// contoh variabel biasa
$nama = "Budi";
$umur = 20;
echo "Nama saya $nama dan umur saya $umur tahun.<br>";

// contoh variable scope

// Local Scope
function tampilNama() {
    $nama = "Ani"; // lokal hanya untuk fungsi ini
    echo "Nama di dalam fungsi: $nama<br>";
}
tampilNama();

// Global Scope
$kota = "Jakarta";
function tampilKota() {
    global $kota;
    echo "Kota asal: $kota<br>";
}
tampilKota();

// Static Scope
function hitung() {
    static $angka = 1;
    echo "Angka sekarang: $angka<br>";
    $angka++;
}
hitung();
hitung();
?>

</body>
</html>