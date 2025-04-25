<?php
// 1. While Loop
$angka = 1;
while ($angka <= 5) {
    echo "While: Angka ke-$angka<br>";
    $angka++;
}

// 2. Do While Loop
$angka = 1;
do {
    echo "Do While: Angka ke-$angka<br>";
    $angka++;
} while ($angka <= 5);

// 3. For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "For: Angka ke-$i<br>";
}

// 4. Foreach Loop
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Foreach: $b<br>";
}

// 5. Break
for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        break; // Berhenti ketika i == 4
    }
    echo "Break contoh: $i<br>";
}

// 6. Continue
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Lewatkan angka 3
    }
    echo "Continue contoh: $i<br>";
}
?>
