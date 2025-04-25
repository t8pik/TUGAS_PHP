<?php

// Membuat Indexed Array (array dengan indeks numerik)
$buah = ["Mangga", "Apel", "Pisang"];
echo "Indexed Array: ";
print_r($buah);
echo "<br>";

// Membuat Associative Array (array dengan kunci string)
$umur = [
    "Andi" => 25,
    "Budi" => 30,
    "Citra" => 28
];
echo "Associative Array: ";
print_r($umur);
echo "<br>";

// Mengakses Array Items
echo "Buah pertama: " . $buah[0] . "<br>";
echo "Umur Budi: " . $umur["Budi"] . "<br>";

// Mengupdate Array Items
$buah[1] = "Jeruk";
$umur["Andi"] = 26;
echo "Array setelah diupdate: <br>";
echo "Indexed Array: ";
print_r($buah);
echo "<br>";
echo "Associative Array: ";
print_r($umur);
echo "<br>";

// Menambahkan Array Items
$buah[] = "Anggur"; // Menambahkan di akhir indexed array
$umur["Dedi"] = 32; // Menambahkan key-value baru di associative array
echo "Array setelah ditambahkan item: <br>";
echo "Indexed Array: ";
print_r($buah);
echo "<br>";
echo "Associative Array: ";
print_r($umur);
echo "<br>";

// Menghapus Array Items
unset($buah[2]); // Menghapus item dengan indeks 2
unset($umur["Citra"]); // Menghapus item dengan kunci "Citra"
echo "Array setelah dihapus item: <br>";
echo "Indexed Array: ";
print_r($buah);
echo "<br>";
echo "Associative Array: ";
print_r($umur);
echo "<br>";

// Looping melalui array (indexed)
echo "Looping melalui indexed array: <br>";
for ($i = 0; $i < count($buah); $i++) {
    echo "Buah ke-" . $i . ": " . $buah[$i] . "<br>";
}

// Looping melalui array (associative)
echo "<br>Looping melalui associative array: <br>";
foreach ($umur as $nama => $nilai) {
    echo "Nama: " . $nama . ", Umur: " . $nilai . "<br>";
}

// Sorting Array (indexed - mengurutkan nilai)
$angka = [5, 2, 8, 1, 9];
sort($angka); // Mengurutkan dari kecil ke besar
echo "<br>Array angka setelah diurutkan: ";
print_r($angka);
echo "<br>";

// Sorting Array (associative - mengurutkan berdasarkan nilai)
asort($umur); // Mengurutkan associative array berdasarkan nilai, mempertahankan kunci
echo "<br>Associative array setelah diurutkan berdasarkan umur: ";
print_r($umur);
echo "<br>";

?>