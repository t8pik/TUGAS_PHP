<?php
// __LINE__
echo "Baris ini ada di baris ke: " . __LINE__ . "<br>";

// __FILE__
echo "File ini berada di: " . __FILE__ . "<br>";

// __DIR__
echo "Folder direktori: " . __DIR__ . "<br>";

// __FUNCTION__
function tesFungsi() {
    echo "Nama fungsi ini: " . __FUNCTION__ . "<br>";
}
tesFungsi();

// __CLASS__
class TesClass {
    function tampilClass() {
        echo "Nama kelas: " . __CLASS__ . "<br>";
    }

    function tampilMethod() {
        echo "Nama method: " . __METHOD__ . "<br>";
    }

    function tampilTrait() {
        // tidak ada trait di sini, hanya untuk contoh
    }
}
$obj = new TesClass();
$obj->tampilClass();
$obj->tampilMethod();

// __NAMESPACE__
namespace ContohNamespace;
echo "Namespace saat ini: " . __NAMESPACE__ . "<br>";

// __TRAIT__
trait CobaTrait {
    function tampilTrait() {
        echo "Nama trait: " . __TRAIT__ . "<br>";
    }
}
class GunakanTrait {
    use \CobaTrait;
}
$obj2 = new \GunakanTrait();
$obj2->tampilTrait();

// ClassName::class
class Mobil {}
echo "Nama class: " . Mobil::class . "<br>";
?>
