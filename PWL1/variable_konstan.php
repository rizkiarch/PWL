<?php
// definisikan konstan
define('PHI', 3.14);
define('DBNAME', 'inventory');
define('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$k11 = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan jari : ' . $jari . ':' . $luas;
echo ' Kelingkaran dengan jari : ' . $jari . ':' . $k11;
echo 'Nama Database : ' . DBNAME;
echo 'Lokasi Database ada di ' . DBSERVER;
