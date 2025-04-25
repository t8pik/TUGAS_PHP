<!DOCTYPE html>
<html>
<body>

    <?php
        $teks = "Ada angka 123 di sini.";
        $pola_angka = "/\d+/";
        $pola_huruf = "/[a-z]+/";

        echo "<h2>Teks Awal:</h2>";
        echo "<p>" . htmlspecialchars($teks) . "</p>";
        echo "<hr>";

        // Contoh preg_match(): Cek apakah ada angka
        echo "<h2>preg_match(): Cek keberadaan angka</h2>";
        if (preg_match($pola_angka, $teks)) {
            echo "<p>Teks mengandung angka.</p>";
        } else {
            echo "<p>Teks tidak mengandung angka.</p>";
        }

        echo "<hr>";

        // Contoh preg_match_all(): Cari semua huruf kecil
        echo "<h2>preg_match_all(): Cari semua huruf kecil</h2>";
        if (preg_match_all($pola_huruf, $teks, $semua_huruf)) {
            echo "<p>Huruf kecil yang ditemukan: <strong>" . implode(", ", array_map('htmlspecialchars', $semua_huruf[0])) . "</strong></p>";
        } else {
            echo "<p>Tidak ada huruf kecil yang ditemukan.</p>";
        }

        echo "<hr>";

        // Contoh preg_replace(): Ganti angka dengan teks
        echo "<h2>preg_replace(): Ganti angka</h2>";
        $teks_tanpa_angka = preg_replace($pola_angka, "[DIGIT]", $teks);
        echo "<p>Teks setelah angka diganti: <strong>" . htmlspecialchars($teks_tanpa_angka) . "</strong></p>";
    ?>

</body>
</html>