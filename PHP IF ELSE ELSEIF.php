<?php
$nilai = 85;

// 1. PHP If
if ($nilai >= 80) {
    echo "Lulus dengan nilai bagus<br>";
}

// 2. PHP If Operators
if ($nilai >= 80 && $nilai <= 100) {
    echo "Nilai dalam rentang 80-100<br>";
}

// 3. PHP If…Else
if ($nilai >= 75) {
    echo "Lulus<br>";
} else {
    echo "Tidak lulus<br>";
}

// 4. PHP Shorthand If (Ternary)
echo ($nilai >= 75) ? "Lulus (versi ternary)<br>" : "Tidak lulus (versi ternary)<br>";

// 5. PHP Nested If
if ($nilai >= 70) {
    if ($nilai >= 90) {
        echo "Lulus dengan predikat A<br>";
    } else {
        echo "Lulus tapi bukan A<br>";
    }
}
?>
