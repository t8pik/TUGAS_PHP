<!DOCTYPE html>
<html>
<body>


    <?php
        // Mengakses variabel global $GLOBALS
        $nama = "Budi";
        $GLOBALS['usia'] = 30;

        function tampilkanInfo() {
            echo "<p>Nama di dalam fungsi: " . $GLOBALS['nama'] . "</p>";
            echo "<p>Usia dari variabel GLOBALS: " . $GLOBALS['usia'] . "</p>";
        }

        tampilkanInfo();

        echo "<hr>";

        // Mengakses informasi server menggunakan $_SERVER
        echo "<h2>Informasi Server:</h2>";
        echo "<p>Nama Server: " . $_SERVER['SERVER_NAME'] . "</p>";
        echo "<p>Alamat IP Server: " . $_SERVER['SERVER_ADDR'] . "</p>";
        echo "<p>Metode Request: " . $_SERVER['REQUEST_METHOD'] . "</p>";
        echo "<p>User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";

        echo "<hr>";
    ?>

    <h2>Contoh Penggunaan $_GET (melalui URL)</h2>
    <p>Coba akses halaman ini dengan menambahkan parameter nama dan usia pada URL, contoh: <code>?nama=Andi&usia=25</code></p>

    <?php
        // Mengakses data melalui metode GET menggunakan $_GET
        if (isset($_GET['nama']) && isset($_GET['usia'])) {
            $nama_get = $_GET['nama'];
            $usia_get = $_GET['usia'];
            echo "<h2>Data dari URL (GET):</h2>";
            echo "<p>Nama: " . htmlspecialchars($nama_get) . "</p>";
            echo "<p>Usia: " . htmlspecialchars($usia_get) . "</p>";
        }
    ?>

    <hr>

    <h2>Contoh Penggunaan $_POST (melalui Form)</h2>
    <form method="post">
        <label for="nama_post">Nama:</label>
        <input type="text" id="nama_post" name="nama"><br><br>
        <label for="usia_post">Usia:</label>
        <input type="number" id="usia_post" name="usia"><br><br>
        <input type="submit" value="Submit (POST)">
    </form>

    <?php
        // Mengakses data melalui metode POST menggunakan $_POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_post = $_POST['nama'];
            $usia_post = $_POST['usia'];
            echo "<h2>Data dari Form (POST):</h2>";
            echo "<p>Nama: " . htmlspecialchars($nama_post) . "</p>";
            echo "<p>Usia: " . htmlspecialchars($usia_post) . "</p>";
        }
    ?>

    <hr>

    <h2>Contoh Penggunaan $_REQUEST</h2>
    <p>$_REQUEST dapat berisi data dari $_GET, $_POST, dan $_COOKIE.</p>

    <?php
        // Mengakses data dari $_REQUEST (prioritas GET > POST > COOKIE)
        if (isset($_REQUEST['nama']) && isset($_REQUEST['usia'])) {
            echo "<h2>Data dari \$_REQUEST:</h2>";
            echo "<p>Nama: " . htmlspecialchars($_REQUEST['nama']) . "</p>";
            echo "<p>Usia: " . htmlspecialchars($_REQUEST['usia']) . "</p>";
        }
    ?>

</body>
</html>