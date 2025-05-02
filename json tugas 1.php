<?php
// Variabel berisi data dalam format JSON
$jsonData = '{"nama":"Christian","umur":21,"kota":"Semarang"}';

// Decode ke dalam bentuk PHP Object
$obj = json_decode($jsonData);
echo "Dari Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Kota: " . $obj->kota . "<br><br>";

// Decode ke dalam bentuk PHP Array
$arr = json_decode($jsonData, true);
echo "Dari Array:<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Kota: " . $arr["kota"] . "<br>";
?>
