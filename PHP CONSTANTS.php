<?php
// 1. define() - cara biasa
define("NAMA", "Andi");
echo NAMA . "<br>";

// 2. const keyword - lebih modern, hanya bisa di luar fungsi
const KOTA = "Jakarta";
echo KOTA . "<br>";

// 3. Constant Array
define("BUAH", ["apel", "jeruk", "mangga"]);
echo BUAH[0] . "<br>"; // apel

// 4. Constants are Global
function tampilNama() {
    echo "Nama dari dalam fungsi: " . NAMA . "<br>";
}
tampilNama();
?>
