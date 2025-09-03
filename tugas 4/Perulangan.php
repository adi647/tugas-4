<?php
// Perulangan

echo "== FOR ==\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i\n";
}

echo "\n== WHILE ==\n";
$j = 1;
while ($j <= 5) {
    echo "Angka $j\n";
    $j++;
}

echo "\n== DO-WHILE ==\n";
$k = 1;
do {
    echo "Nomor $k\n";
    $k++;
} while ($k <= 5);

echo "\n== FOREACH (Array) ==\n";
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b\n";
}
