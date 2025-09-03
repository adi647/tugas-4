<?php
// Operator Logika & Perbandingan
$a = 10;
$b = 20;

echo "== Perbandingan ==\n";
echo "\$a == \$b : "; var_dump($a == $b);
echo "\$a != \$b : "; var_dump($a != $b);
echo "\$a < \$b  : "; var_dump($a < $b);
echo "\$a > \$b  : "; var_dump($a > $b);
echo "\$a <= \$b : "; var_dump($a <= $b);
echo "\$a >= \$b : "; var_dump($a >= $b);

echo "\n== Logika ==\n";
$x = true;
$y = false;

echo "\$x && \$y : "; var_dump($x && $y);
echo "\$x || \$y : "; var_dump($x || $y);
echo "!\$x       : "; var_dump(!$x);
