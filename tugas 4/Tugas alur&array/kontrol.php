<?php
// Struktur Kontrol
$nilai = 75;

echo "== IF ==\n";
if ($nilai > 60) {
    echo "Lulus\n";
}

echo "\n== IF-ELSE ==\n";
if ($nilai >= 80) {
    echo "Nilai A\n";
} else {
    echo "Nilai B atau C\n";
}

echo "\n== IF-ELSEIF-ELSE ==\n";
if ($nilai >= 90) {
    echo "Nilai A\n";
} elseif ($nilai >= 75) {
    echo "Nilai B\n";
} else {
    echo "Nilai C\n";
}

echo "\n== SWITCH-CASE ==\n";
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Awal minggu\n";
        break;
    case "Jumat":
        echo "Hampir weekend\n";
        break;
    default:
        echo "Hari biasa\n";
        break;
}