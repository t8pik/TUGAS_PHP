<?php
// (string) - ubah ke string
$angka = 123;
$keString = (string)$angka;
var_dump($keString); // string(3) "123"

// (int) - ubah ke integer
$teks = "45";
$keInt = (int)$teks;
var_dump($keInt); // int(45)

// (float) - ubah ke float
$angka2 = "3.14";
$keFloat = (float)$angka2;
var_dump($keFloat); // float(3.14)

// (bool) - ubah ke boolean
$nilai = 0;
$keBool = (bool)$nilai;
var_dump($keBool); // bool(false)

// (array) - ubah ke array
$nama = "Asep";
$keArray = (array)$nama;
var_dump($keArray); // array(1) { [0]=> string(4) "Asep" }

// (object) - ubah ke object
$umur = 21;
$keObjek = (object)$umur;
var_dump($keObjek); // object(stdClass)#1 (1) { ["scalar"]=> int(21) }

// (unset) - ubah ke NULL
$tes = "Isi";
$keNull = (unset)$tes;
var_dump($keNull); // NULL
?>
